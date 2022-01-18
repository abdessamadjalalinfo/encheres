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
        $products = $categorie->products()->paginate(6);
        $brands = Brand::all()->where('categorie_id', $id);
        $request = null;


        // dd($products[0]->brand()->get()[0]);
        return view('categorie', ['products' => $products, 'categorie' => $categorie, 'brands' => $brands, 'requests' => $request]);
    }
    public function showProductCategoriesfiltre($id, Request $request)
    {
        $categorie = Categorie::find($id);
        if ($request->brand) {
            $products = Product::all()->whereIn('brand_id', $request->brand)->where('categorie_id', $id);
        } else {
            $products = Product::all()->where('categorie_id', $id);
        }



        //$products = $categorie->products()->where('brand_id', $request->brand)->paginate(6);

        $brands = Brand::all()->where('categorie_id', $id);
        return view('categorie', ['products' => $products, 'categorie' => $categorie, 'brands' => $brands, 'requests' => $request->brand]);
    }
}
