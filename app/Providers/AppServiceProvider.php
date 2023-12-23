<?php

namespace App\Providers;

use App\Models\Banner;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\view;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\wishlist;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer('*', function($view){
            $view->with('banners', Banner::all());
            $view->with('categories', Category::all());
            $view->with('products', Product::all());
            $view->with('cartProduct', Cart::with('products')->where('ip_address', request()->ip())->get());
            $view->with('wishlistProduct', wishlist::with('products')->where('ip_address', request()->ip())->get());
        });
    }
}
