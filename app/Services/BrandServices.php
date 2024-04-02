<?php

namespace App\Services;

use App\Models\Brand;

class BrandServices
{
    public function brandStore($request)
    {
        if($request->file('image')){            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images/', $imageName);
        }
        
        $brand = Brand::create([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return $brand;
    }
    
    public function brandUpdate($brand, $request)
    {
        
        if($request->hasFile('image')){
            $oldImage = $brand->image;
            if($oldImage && file_exists(public_path('images/'.$oldImage))){
                unlink(public_path('images/'.$oldImage));
            }else{
                $imageName = time().'.'.$request->image->extension();
                $request->image->move('images/',$imageName);
            }
            $brand->image = $imageName;
        }

        $brand->update([
            'name' => $request->name
        ]);

        return $brand;
    }
}