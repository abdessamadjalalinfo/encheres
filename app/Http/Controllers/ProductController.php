<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $categories = Categorie::all();

        return view('product', ['product' => $product, 'categories' => $categories]);
    }
}
