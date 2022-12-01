<?php

use App\Models\Product;
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

Route::get('/shops', function () {
    return view('home',[
        'products'=>Product::all()->take(4)
    ]);
});
Route::get('/', function () {
    return view('shops.index',[
        'products'=>Product::all()
    ]);
});
Route::get('/carts', function () {
    return view('carts.index');
});
