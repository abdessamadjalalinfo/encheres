<?php

use App\Models\Newsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\acceuilController::class, 'index'])->name('index');

Route::get('/categories/{id}', [App\Http\Controllers\acceuilController::class, 'showProductCategories'])->name('showProductCategories');

Route::Post('/categories/{id}', [App\Http\Controllers\acceuilController::class, 'showProductCategoriesfiltre'])->name('showProductCategoriesfiltre');

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'index'])->name('showProduct');

Route::get('/add_to_favoris/{id}', [App\Http\Controllers\ProductController::class, 'add_to_favoris'])->name('add_to_favoris')->middleware('auth');

Route::get('/proposer/{id}', [App\Http\Controllers\ProductController::class, 'proposer'])->name('proposer')->middleware('auth');
Route::get('/proposer1/{id}', [App\Http\Controllers\ProductController::class, 'proposer1'])->name('proposer1')->middleware('auth');

Route::get('addProduct', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct')->middleware('auth');
Route::post('ajouterannonce', [App\Http\Controllers\ProductController::class, 'ajouterannonce'])->name('ajouterannonce')->middleware('auth');
Auth::routes();



Route::get('/winningbids', [App\Http\Controllers\DashboardController::class, 'winningbids'])->name('winningbids')->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/favorits', [App\Http\Controllers\DashboardController::class, 'favorits'])->name('favorits')->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auctions', [App\Http\Controllers\AuctionController::class, 'index'])->name('auctions')->middleware("auth");


Route::get('/check', [App\Http\Controllers\ProductController::class, 'check'])->name('check');
Route::get('/myProducts', [App\Http\Controllers\ProductController::class, 'myProducts'])->name('myProducts');
Route::get('/sell', function () {
    return view("sell");
})->name('sell');

Route::get('/sellPrivate', function () {
    return view("sellPrivate");
})->name('sellPrivate');

Route::get('/sellCompany', function () {
    return view("sellCompany");
})->name('sellCompany');

Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users')->middleware("auth");
Route::get('/admin/categories/{id}', [App\Http\Controllers\AdminController::class, 'categories'])->name('admin.categories')->middleware("auth");

Route::get('/admin/encheres', [App\Http\Controllers\AdminController::class, 'encheres'])->name('admin.encheres')->middleware("auth");

Route::get('subscribe', function (Request $req) {
    $newsletter = new Newsletter();
    $newsletter->email = $req->email;
    $newsletter->save();
    return redirect()->route('index');
})->name('subscribe');

Route::get('/admin/expired', [App\Http\Controllers\AdminController::class, 'expired'])->name('admin.expired')->middleware("auth");
Route::get('/admin/customer', [App\Http\Controllers\AdminController::class, 'customer'])->name('admin.customer')->middleware("auth");
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'users'])->middleware("auth");
Route::get("about", function () {
    return view('about');
})->name("about");

Route::get('/admin/newsletters', [App\Http\Controllers\AdminController::class, 'newsletters'])->name('admin.newsletters')->middleware("auth");
