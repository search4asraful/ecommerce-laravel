<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function bannerStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'price' => 'required|integer|not_in:0',
            'heading' => 'required|string|max:255',
            'pricetag' => 'string|max:255',
            'image' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/banner/', $imageName);

        $banner = new Banner();
        $banner->name = $request->name;
        $banner->price = $request->price;
        $banner->heading = $request->heading;
        $banner->pricetag = $request->pricetag;
        $banner->image = $imageName;
        $banner->save();

        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Your banner details has been added.');
        return redirect()->back();
    }

}
