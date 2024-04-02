<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\wishlist;

class WishlistController extends Controller
{
    public function productAddwishlist(Request $request)
    {
        $existingWishlist = wishlist::where('product_id', $request->product_id)->first();

        if ($existingWishlist) {
            $this->setMassege('info', 'Product is already in the wishlist');
        } else {
        wishlist::where('product_id', $request->product_id)->first();
        
        wishlist::create([
        'product_id' => $request->product_id,
        'qty' => $request->qty,
        'price' => $request->price,
        'ip_address' => $request->ip()
        ]);
        
        $this->setMassege('success', 'Product has been added to wishlist');
    }
        return redirect()->back();
    }

    public function productwishlistRemove($id)
    {
        $wishlistProduct = wishlist::find($id);
        $wishlistProduct->delete();

        $this->setMassege('warning', 'Product has been removed from wishlist.');
        return redirect()->back();
    }

    public function productwishlistView()
    {
        $wish = wishlist::with('products')->first();

        if ($wish && $wish->products->isNotEmpty()) {
            return view('frontend.pages.wishlist');
        }
        $this->setMassege('info', 'Your wishlist is empty. <br/>Add products to wishlist for proceed');
        return redirect('/');
    }

}
