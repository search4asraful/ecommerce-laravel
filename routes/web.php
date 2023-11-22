<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\CartController;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/shop/products', [FrontendController::class, 'shopProducts']);
Route::get('/product/details/{id}', [FrontendController::class, 'productDetails']);
Route::post('/product/addToCart', [CartController::class, 'productAddCart']);
Route::get('/product/productCartRemove/{id}', [CartController::class, 'productCartRemove']);
Route::get('/cart/view', [CartController::class, 'productCartView']);
// Route::post('/cart/update', [CartController::class, 'cartUpdate']);
Route::get('/checkout', [CartController::class, 'checkout']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/category/create', [CategoryController::class, 'categoryCreateForm']);
Route::get('/category/manage', [CategoryController::class, 'categoryManage']);
Route::post('/category/store', [CategoryController::class, 'categoryStore']);
Route::get('/category/edit/{id}', [CategoryController::class, 'categoryEdit']);
Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate']);
Route::get('/category/delete/{id}', [CategoryController::class, 'categoryDelete']);

Route::get('/product/productAdd', [ProductController::class, 'productAddForm']);
Route::post('/product/store', [ProductController::class, 'productStore']);
Route::get('/product/edit/{id}', [ProductController::class, 'productEdit']);
Route::get('/product/productManage', [ProductController::class, 'productManage']);
Route::post('/product/update/{id}', [ProductController::class, 'productUpdate']);
Route::get('/product/delete/{id}', [ProductController::class, 'productDelete']);