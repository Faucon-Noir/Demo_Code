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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::post('/product/add', [App\Http\Controllers\AdminController::class, 'addProduct'])->name('add_product');
Route::get('/catalog', [App\Http\Controllers\ProductController::class, 'index'])->name('catalog');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'getProduct'])->name('get_product');
Route::post('/product/quantity/{id}', [App\Http\Controllers\AdminController::class, 'changeStock'])->name('change_stock');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('/cart/product/add/{productId}', [App\Http\Controllers\CartController::class, 'addProduct'])->name('add_product_in_cart');
Route::post('/cart/product/delete/{cartId}', [App\Http\Controllers\CartController::class, 'deleteProduct'])->name('delete_product_in_cart');
Route::get('/command', [App\Http\Controllers\CommandeController::class, 'index'])->name('command');
Route::get('/historic', [App\Http\Controllers\HistoriqueController::class, 'index'])->name('historic');
Route::get('/visual_client', [App\Http\Controllers\Visual_clientController::class, 'index'])->name('visual_client');




