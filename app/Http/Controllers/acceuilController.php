<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

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
        $products = $categorie->products;
        //dd($products);
        return view('categorie', ['products' => $products, 'categorie' => $categorie,]);
    }
}
