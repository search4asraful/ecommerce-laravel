<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('frontend.home.index', compact('products'));
    }

    public function shopProducts()
    {
    return view('frontend.pages.shop');
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.details', [
            'product' => $product
        ]);
    }

}
