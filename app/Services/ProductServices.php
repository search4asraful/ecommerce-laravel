<?php

namespace App\Services;

use App\Models\Product;

class ProductServices
{
    public function productStore($request)
    {
        if($request->file('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images/', $imageName);
        }

        $product = Product::create([
        'category_id' => $request->category_id,
        'brand_id' => $request->brand_id,
        'name' => $request->name,
        'price' => $request->price,
        'qty' => $request->qty,
        'short_description' => $request->short_description,
        'long_description' => $request->long_description,
        'badge' => $request->badge,
        'image' => $imageName,
        ]);

        return $product;
    }

    public function productUpdate($product, $request)
    {
        if($request->hasFile('image')){
            if(file_exists(public_path('images/'.$product->image))){
                unlink(public_path('images/'.$product->image));
            }else{
                $imageName = time().'.'.$request->image->extension();
                $request->image->move('images/',$imageName);
            }
            $product->image = $imageName;
        }

        $productData = $product->update([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'price' => $request->price,
            'badge' => $request->badge,
            'qty' => $request->qty
        ]);

        return $productData;
    }
}