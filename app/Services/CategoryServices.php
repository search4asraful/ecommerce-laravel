<?php

namespace App\Services;

use App\Models\Category;

class CategoryServices
{
    public function categoryStore($request)
    {
        if($request->file('image')){            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images/', $imageName);
        }
        
        $category = Category::create([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return $category;
    }
    
    public function categoryUpdate($category, $request)
    {

        if($request->hasFile('image')){
            $oldImage = $category->image;
            if($oldImage && file_exists(public_path('images/'.$oldImage))){
                unlink(public_path('images/'.$oldImage));
            }else{
                $imageName = time().'.'.$request->image->extension();
                $request->image->move('images/',$imageName);
            }
            $category->image = $imageName;
        }

        $category->update([
            'name' => $request->name
        ]);

        return $category;
    }
}