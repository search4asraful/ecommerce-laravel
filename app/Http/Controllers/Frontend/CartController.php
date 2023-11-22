<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function productAddCart(Request $request)
    {
        $checkCartProduct = Cart::where('product_id', $request->product_id)->first();

        if($checkCartProduct){
            if($request->qty){
                $checkCartProduct->qty = $checkCartProduct->qty + $request->qty;
                $checkCartProduct->save();
            }else {
                $checkCartProduct->qty = $checkCartProduct->qty + 1;
                $checkCartProduct->save();
            }
        }else{
            Cart::create([
            'product_id' => $request->product_id,
            'price' => $request->price,
            'qty' => $request->qty ? $request->qty : 1,
            'ip_address' => $request->ip()
        ]);
        }
        return redirect()->back();
    }

    public function productCartRemove($id)
    {
        $cartProduct = Cart::find($id);
        $cartProduct->delete();
        return redirect()->back();
    }

    public function productCartView()
    {
        return view('frontend.pages.cart');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }

    // public function cartUpdate(Request $request){
        
    //     $cartProduct = Cart::find('product_id', $request->id);
    //     $cartProduct->update([
    //         'qty' => $request->qty
    //     ]);
    //     return redirect()->back();
    // }
}