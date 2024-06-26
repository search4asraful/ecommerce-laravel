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
        
        $this->setMassege('success', 'Product has been added to cart');
        return redirect()->back();
    }

    public function productCartRemove($id)
    {
        $cartProduct = Cart::find($id);
        $cartProduct->delete();

        $this->setMassege('warning', 'Product has been removed from cart.');
        return redirect()->back();
    }

    public function productCartView()
    {
        $cart = Cart::with('products')->first();

        if ($cart && $cart->products->isNotEmpty()) {
            return view('frontend.pages.cart');
        }
        flash()->options([
            'timeout' => 3500,
            'position' => 'bottom-right',
        ])->addInfo('Your cart is empty. <br/>Add products to cart for proceed');
        return redirect('/');
    }

    public function checkout()
    {
        $cart = Cart::with('products')->first();

        if ($cart && $cart->products->isNotEmpty()) {
            return view('frontend.pages.checkout');
        }
        $this->setMassege('info', 'First add products to cart for proceed');
        return redirect('/shop');
    }

    public function cartUpdate(Request $request, $id) {
        $this->validate($request, [
            'qty' => 'sometimes|integer|not_in:0'
        ]);

        $cartProduct = Cart::find($id);
        $cartProduct->update([
            'qty' => $request->qty
        ]);

        $this->setMassege('success', 'Your cart has been updated');
        return redirect()->back();
    }

}