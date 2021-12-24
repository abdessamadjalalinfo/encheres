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

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
Route::get('/favorits', [App\Http\Controllers\DashboardController::class, 'favorits'])->name('favorits');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
