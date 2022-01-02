<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;
use App\Models\Enchere;
use App\Models\Product;
use App\Models\User;
use App\Models\Win;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function checkAdmin()
    {
        if (Auth::check()) {
            if (Auth::user()->type != "admin") {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }


    function users()
    {


        $this->checkAdmin();
        $nb_users = User::all()->count();
        $nb_products = Product::all()->count();
        $ventes = Win::all()->count();
        $produit_encours = Product::all()->where("etat", "normal")->count();
        $nb_encheres = Enchere::all()->count();
        $nb_catégories = Categorie::all()->count();
        return view('admin.users', [
            'nbUsers' => $nb_users, 'nbProducts' => $nb_products,
            'nbVentes' => $ventes,
            'nbCours' => $produit_encours,
            'nbEncheres' => $nb_encheres,
            'nbCategories' => $nb_catégories

        ]);
    }
    public function categories($id)
    {
        $this->checkAdmin();
        $categ = Categorie::find($id);
        // dd($categ->products->count());
        return view('admin.categories', ['cat' => $categ]);
    }

    public function encheres()
    {
        $this->checkAdmin();
        $encheres = Enchere::all();
        return view('admin.encheres', ['encheres' => $encheres]);
    }

    public function expired()
    {
        $this->checkAdmin();
        $wins = Win::all();
        return view('admin.wins', ['wins' => $wins]);
    }


    public function customer()
    {
        $this->checkAdmin();
        $users = User::all();
        return view('admin.customer', ['users' => $users]);
    }
}
