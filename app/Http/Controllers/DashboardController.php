<?php

namespace App\Http\Controllers;

use App\Models\Enchere;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        return view('dashboard', ['user' => $user]);
    }

    public function profile()
    {
        $user = Auth::user();

        return view('profile', ['user' => $user]);
    }

    public function favorits()
    {

        $user = Auth::user();



        return view('favorits', ['user' => $user]);
    }
    public function winningbids()
    {
        $user = Auth::user();

        return view('winningbids', ['user' => $user]);
    }
}
