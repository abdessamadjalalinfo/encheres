<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class acceuilController extends Controller
{

    public function index()
    {
        $categories = Categorie::all();

        return view('welcome', ['categories' => $categories]);
    }

    public function showProductCategories($id)
    {
        $categorie = Categorie::find($id);
        $products = $categorie->products()->paginate(2);
      //dd($products->links()->paginator	);
        $brands=null;
        if($id==1){
            $brands = Brand::all();
        }
        // dd($products[0]->brand()->get()[0]);
        return view('categorie', ['products' => $products, 'categorie' => $categorie,'brands'=>$brands]);
    }
}
