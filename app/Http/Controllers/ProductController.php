<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use App\Models\Favorit;
use App\Models\Enchere;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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


        //dd($nombre_encheres);


        //dd($images->get());
        //dd($product->images()->count());

        return view('product', ['product' => $product, 'categories' => $categories, 'min' => $min, 'nb_encheres' => $nombre_encheres, 'exist' => $exist]);
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
}
