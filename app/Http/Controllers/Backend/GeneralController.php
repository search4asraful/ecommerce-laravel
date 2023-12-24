<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Membership;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function bannerShow()
    {
        $banners = Banner::all();
        return view('frontend.home.index', compact('banners'));
    }

    public function bannerStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'price' => 'required|integer|not_in:0',
            'heading' => 'required|string|max:255',
            'pricetag' => 'nullable|string|max:255',
            'link' => 'required|string|max:255',
            'image' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/banner/', $imageName);

        $banner = new Banner();
        $banner->name = $request->name;
        $banner->price = $request->price;
        $banner->heading = $request->heading;
        $banner->pricetag = $request->pricetag;
        $banner->link = $request->link;
        $banner->image = $imageName;
        $banner->save();

        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Your new banner has been added');
        return redirect()->back();
    }
    
    public function bannerDelete($id)
    {
        $product = Banner::find($id);
        $product->delete();
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Banner has been deleted');
        return redirect()->back();
    }

    public function membershipShow()
    {
        $memberships = Membership::all();
        return view('frontend.home.index', compact('memberships'));
    }

    public function membershipStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'image' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/membership/', $imageName);

        $membership = new Membership();
        $membership->name = $request->name;
        $membership->image = $imageName;
        $membership->save();

        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Your new membership has been added');
        return redirect()->back();
    }
    
    public function membershipDelete($id)
    {
        $product = Membership::find($id);
        $product->delete();
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('membership has been deleted');
        return redirect()->back();
    }

}
