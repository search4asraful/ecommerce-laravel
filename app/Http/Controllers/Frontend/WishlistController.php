<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\wishlist;

class WishlistController extends Controller
{
    public function productAddwishlist(Request $request)
    {
        wishlist::create([
        'product_id' => $request->product_id,
        'price' => $request->price,
        'ip_address' => $request->ip()
        ]);
        
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Product has been added to wishlist');
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
        $wish = wishlist::find(1);
        return view('frontend.pages.wishlist');
    }

}
