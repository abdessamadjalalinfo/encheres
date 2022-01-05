<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;

use App\Models\Product;
use App\Models\Categorie;
use App\Models\Favorit;
use App\Models\Enchere;
use App\Models\ImageProduct;
use App\Models\Win;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $product->nb_vue += 1;
        $product->save();
        $categories = Categorie::all();
        $images = $product->images();
        $min = \App\Models\Enchere::all()->where('produit_id', $id)->max('price');
        $encheres = \App\Models\Enchere::all()->where('produit_id', $id);
        $nombre_encheres = \App\Models\Enchere::all()->where('produit_id', $id)->count();
        if (Auth::user()) {


            $userId = Auth::user()->id;
            $check = Favorit::all()->where('produit_id', $id)->where('user_id', $userId);

            if ($check->count() > 0) {
                $exist = 1;
            } else {
                $exist = 0;
            }
        } else {
            $exist = 0;
        }

        $dernier_enchere = Enchere::all()->where('produit_id',  $product->id)->SortBy('price')->last();
        if ($dernier_enchere) {
            $date_expires = Carbon::parse($dernier_enchere->created_at)->addHours($product->duree);
        } else {
            $date_expires = "aucun enchère";
        }

        //dd($date_expires);


        return view('product', ['product' => $product, 'categories' => $categories, 'min' => $min, 'nb_encheres' => $nombre_encheres, 'exist' => $exist, 'date_expiration' => $date_expires, 'encheres' => $encheres]);
    }

    public function add_to_favoris($id)
    {
        $userId = Auth::user()->id;
        $check = \App\Models\Favorit::all()->where('produit_id', $id)->where('user_id', $userId);

        if ($check->count() > 0) {
            return redirect()->route('favorits');
        }

        $favoris = new Favorit();
        $favoris->produit_id = $id;
        $favoris->user_id = $userId;
        $favoris->save();
        return redirect()->route('favorits');
    }

    public function proposer($id, Request $request)
    {
        $userId = Auth::user()->id;

        $min = \App\Models\Enchere::all()->where('produit_id', $id)->max('price');

        if (intval($request->proposition) > $min) {
            $enchere = new Enchere();
            $enchere->produit_id = $id;
            $enchere->user_id = $userId;
            $enchere->price = intval($request->proposition);
            $enchere->etat = 'normale';
            $enchere->save();
            return redirect()->route('auctions');
        }



        $favoris = new Favorit();
        $favoris->produit_id = $id;
        $favoris->user_id = $userId;
        $favoris->save();
        return redirect()->route('auctions');
    }
    public function check()
    {
        $encheres_products = DB::table('encheres')->distinct()->get('produit_id');
        foreach ($encheres_products as $productId) {
            $produit_id = ($productId->produit_id);
            $produit = Product::find($produit_id);
            $dernier_enchere = Enchere::all()->where('produit_id', $produit_id)->SortBy('price')->last();
            $date_expires = Carbon::parse($dernier_enchere->created_at)->addHours($produit->duree);
            $date_now = Carbon::now();
            dd([$date_now, $date_expires]);
            if ($date_expires < $date_now) {
                $wins = new Win();
                $wins->enchere_id = $dernier_enchere->id;
                $wins->user_id = $dernier_enchere->user_id;
                $wins->save();
                $produit->etat = "expiré";
                $produit->save();
                echo "sala";
            }
        }
    }
    public function addProduct()
    {

        $user = Auth::user();
        $categories = Categorie::all();
        $brands = Brand::all();
        return view('addproduct', ['user' => $user, 'categories' => $categories,'brands'=>$brands]);
    }
    public function ajouterannonce(Request $request)
    {
        //dd($request);
        $product = new Product();
        $product->titre = $request->titre;
        $product->categorie_id = $request->categorie_id;
        if(in_array($request->categorie_id,[1]))
            $product->brand_id=$request->brand_id;
        
        $product->description = $request->description;
        $product->premier_prix = $request->premier_prix;
        $product->owner_id = Auth::user()->id;
        $product->duree = $request->duree;
       
        $product->save();

        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        if ($request->hasfile('filename')) {
            //return 1;

            foreach ($request->file('filename') as $image) {
                $name = $product->id . $image->getClientOriginalName();
                $image->move(public_path() . '/img/', $name);
                $imageOfProduct = new ImageProduct();
                $imageOfProduct->product_id = $product->id;
                $imageOfProduct->path_logo = 'img\\' . $name;
                $imageOfProduct->save();
            }
        }

        return redirect()->back();
    }

    public function myProducts(){
        //dd(Product::first()->categorie()->get()[0]);
        // dd(Enchere::where("produit_id",1)->orderBy("price","desc")->first());
        
        $normalProducts=Product::where("etat","normal")->get();
        $expiredProducts=Product::where("etat","expiré")->get();
        
        $normalProducts->each(function($product){
            $product->countBids = Enchere::where("produit_id",$product->id)->count();
            $product->currentBid =  Enchere::where("produit_id",$product->id)->max("price");
        });
        $expiredProducts->each(function($product){
            $enchere=Enchere::where("produit_id",$product->id)->orderBy("price","desc")->first();
            $winner = Win::where("enchere_id",$enchere->id)->first()->user()->first();
            $product->winner = $winner;
            $product->bidPrice=$enchere->price;
        });
        
        return view("myProducts",["normalProducts"=>$normalProducts,"expiredProducts"=>$expiredProducts]);
    }
}
