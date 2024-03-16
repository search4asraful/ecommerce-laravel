<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function frontIndex()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('frontend.home.index', compact('products'));
    }

    public function customerLogin(){
        return view('frontend.pages.login');
    }

    public function shopProducts(){
        return view('frontend.pages.shop');
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.details', [
            'product' => $product
        ]);
    }

    public function productFromCategory()
    {
        return view('frontend.pages.productFromCategory');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function aboutUs()
    {
        return view('frontend.pages.aboutUs');
    }

    public function trackOrder()
    {
        return view('frontend.pages.track-order');
    }

    public function comingsoon()
    {
        return view('frontend.pages.coming-soon');
    }

    public function termsCondition()
    {
        return view('frontend.pages.terms-condition');
    }
    
    public function privacy()
    {
        return view('frontend.pages.privacy');
    }

}
