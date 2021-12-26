<?php

namespace App\Http\Controllers;

use App\Models\Enchere;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuctionController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $encheres = $user->encheres()->get();
        $encheres->each(function ($enchere) {
            $AllEncheresWithThisProduct = Enchere::where("produit_id", "=", $enchere->produit_id)->distinct()->get();
            $enchere->image_path = Product::find($enchere->produit_id)->images()->first()->path_logo ?? "text";
            $enchere->currentBid = $AllEncheresWithThisProduct->max("price");
            $enchere->allBidsCount = $AllEncheresWithThisProduct->count();
        });
        // dd($encheres);
        //dd($encheres);
        return view('myAuctions', ["encheres" => $encheres, "user" => $user]);
    }
}
