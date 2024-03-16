<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BackendContoller;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Order\OrderController;

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

Route::get('/', [FrontendController::class, 'frontIndex']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login/customer', [FrontendController::class, 'customerLogin']);
Route::get('/shop', [FrontendController::class, 'shopProducts']);
Route::get('/category/product/list', [FrontendController::class, 'productFromCategory']);
Route::get('/product/details/{id}', [FrontendController::class, 'productDetails']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/coming-soon', [FrontendController::class, 'comingsoon']);
Route::get('/track-order', [FrontendController::class, 'trackOrder']);
Route::get('/terms-condition', [FrontendController::class, 'termsCondition']);
Route::get('/privacy', [FrontendController::class, 'privacy']);

Route::post('/product/addToWishlist', [WishlistController::class, 'productAddWishlist']);
Route::get('/product/productWishlistRemove/{id}', [WishlistController::class, 'productWishlistRemove']);
Route::get('/wishlist', [WishlistController::class, 'productwishlistView']);

Route::get('/cart', [CartController::class, 'productCartView']);
Route::post('/product/addToCart', [CartController::class, 'productAddCart']);
Route::get('/product/productCartRemove/{id}', [CartController::class, 'productCartRemove']);
Route::post('/cart/update/{id}', [CartController::class, 'cartUpdate']);
Route::get('/checkout', [CartController::class, 'checkout']);

Route::get('/order', [OrderController::class, 'orders']);
Route::post('/confirm/order', [OrderController::class, 'confirmOrder']);
Route::get('/manage/order/{id}', [OrderController::class, 'orderManage']);
Route::post('/order/update/{id}', [OrderController::class, 'orderUpdate']);
Route::get('/order/invoice/{id}', [OrderController::class, 'orderInvoice']);

Auth::routes();
Route::get('/admin/setting', [BackendContoller::class, 'adminSetting']);
Route::get('/banner/manage', [BackendContoller::class, 'bannerManage']);
Route::get('/membership/manage', [BackendContoller::class, 'membershipManage']);
Route::get('/tranding/manage', [BackendContoller::class, 'trendingBanner']);
Route::get('/deals/outlet', [BackendContoller::class, 'dealsOutlet']);

Route::post('/create/banner', [GeneralController::class, 'bannerStore']);
Route::get('/banner/delete/{id}', [GeneralController::class, 'bannerDelete']);
Route::get('/banners', [GeneralController::class, 'bannerShow']);

Route::post('/create/membership', [GeneralController::class, 'membershipStore']);
Route::get('/membership/delete/{id}', [GeneralController::class, 'membershipDelete']);
Route::get('/memberships', [GeneralController::class, 'membershipShow']);

Route::get('/category/create', [CategoryController::class, 'categoryCreateForm']);
Route::get('/category/manage', [CategoryController::class, 'categoryManage']);
Route::post('/category/store', [CategoryController::class, 'categoryStore']);
Route::get('/category/edit/{id}', [CategoryController::class, 'categoryEdit']);
Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate']);
Route::get('/category/delete/{id}', [CategoryController::class, 'categoryDelete']);

Route::get('/brand/create', [BrandController::class, 'brandCreateForm']);
Route::get('/brand/manage', [BrandController::class, 'brandManage']);
Route::post('/brand/store', [BrandController::class, 'brandStore']);
Route::get('/brand/edit/{id}', [BrandController::class, 'brandEdit']);
Route::post('/brand/update/{id}', [BrandController::class, 'brandUpdate']);
Route::get('/brand/delete/{id}', [BrandController::class, 'brandDelete']);

Route::get('/product/productAdd', [ProductController::class, 'productAddForm']);
Route::post('/product/store', [ProductController::class, 'productStore']);
Route::get('/product/edit/{id}', [ProductController::class, 'productEdit']);
Route::get('/product/productManage', [ProductController::class, 'productManage']);
Route::post('/product/update/{id}', [ProductController::class, 'productUpdate']);
Route::get('/product/delete/{id}', [ProductController::class, 'productDelete']);