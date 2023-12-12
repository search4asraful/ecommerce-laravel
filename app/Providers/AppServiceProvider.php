<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\view;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;

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
            $view->with('categories', Category::all());
            $view->with('products', Product::all());
            $view->with('cartProduct', Cart::with('products')->where('ip_address', request()->ip())->get());
        });
    }
}
