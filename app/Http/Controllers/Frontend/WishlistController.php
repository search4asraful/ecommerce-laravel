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
        flash()->options([
            'timeout' => 3000,
            'position' => 'bottom-right',
        ])->addInfo('Product is already in the wishlist');
    } else {
        wishlist::where('product_id', $request->product_id)->first();
        wishlist::create([
        'product_id' => $request->product_id,
        'qty' => $request->qty,
        'price' => $request->price,
        'ip_address' => $request->ip()
        ]);
        
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Product has been added to wishlist');
    }
        return redirect()->back();
    }

    public function productwishlistRemove($id)
    {
        $wishlistProduct = wishlist::find($id);
        $wishlistProduct->delete();

        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addWarning('Product has been removed from wishlist.');
        return redirect()->back();
    }

    public function productwishlistView()
    {
        $wish = wishlist::with('products')->first();

        if ($wish && $wish->products->isNotEmpty()) {
            return view('frontend.pages.wishlist');
        }
        flash()->options([
            'timeout' => 3500, // 3 seconds
            'position' => 'bottom-right',
        ])->addInfo('Your wishlist is empty. Add products to wishlist for proceed');
        return view('frontend.home.index');
    }

}
