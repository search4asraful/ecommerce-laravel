<?php

namespace App\Services;

use App\Models\Banner;
use App\Models\Membership;

class GeneralServices
{
    public function bannerStore($request)
    {
        if($request->file('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images/banner/', $imageName);
        }

        $banner = Banner::create([
            'name' => $request->name,
            'price' => $request->price,
            'heading' => $request->heading,
            'pricetag' => $request->pricetag,
            'link' => $request->link,
            'image' => $imageName,
        ]);

        return $banner;
    }

    public function membershipStore($request)
    {
        if($request->file('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images/brands/', $imageName);
        }

        $membership = Membership::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return $membership;
    }
}