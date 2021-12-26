<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'index'])->name('showProduct');

Route::get('/add_to_favoris/{id}', [App\Http\Controllers\ProductController::class, 'add_to_favoris'])->name('add_to_favoris')->middleware('auth');

Route::get('/proposer/{id}', [App\Http\Controllers\ProductController::class, 'proposer'])->name('proposer')->middleware('auth');

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
