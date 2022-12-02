<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('shops.index',[
        'products'=>Product::take(8)->get()
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ORDER 

// Route::post('order', [OrderController::class, 'store'])->name('orders.store');
Route::resource('orders', OrderController::class);



// cart 
Route::get('/addCart/{product}', [CartController::class, 'addCart'])->name('cart.add');
Route::get('cart', [CartController::class, 'cartlist'])->name('cart.list');
Route::get('cart/update/{itemId}', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('cart/destroy', [CartController::class, 'destroy'])->name('cart.remove');
// Route::get('cart/destroy/id', [CartController::class, 'destroy'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

});



















require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
