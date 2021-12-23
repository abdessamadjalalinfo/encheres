<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use Illuminate\Http\Request;

class acceuilController extends Controller
{

    public function index()
    {
        $categories = Categorie::all();

        return view('index', ['categories' => $categories]);
    }
}
