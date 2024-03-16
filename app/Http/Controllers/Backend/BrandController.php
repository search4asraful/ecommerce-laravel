<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandCreateForm()
    {
        return view('backend.pages.brand.add');
    }

    public function brandManage()
    {
        $brands = Brand::select(['id', 'name', 'image'])->orderBy('id', 'desc')->get();
        return view('backend.pages.brand.manage', compact('brands'));
    }

    public function brandStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'image' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/', $imageName);
        Brand::create([
            'name' => $request->name,
            'image' => $imageName
        ]);
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Brand has been created');
        return redirect()->back();
    }

    public function brandEdit($id)
    {
        $brand = Brand::where('id', $id)->first();
        return view('backend.pages.brand.edit', compact('brand'));
    }

    public function brandUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'image' => 'sometimes|image'
        ]);

        $brand = Brand::find($id);

        if($request->hasFile('image')){
            if(file_exists(public_path('images/'.$brand->image))){
                unlink(public_path('images/'.$brand->image));
            }else{
                $imageName = time().'.'.$request->image->extension();
                $request->image->move('images/',$imageName);
            }
            $brand->image = $imageName;
        }
        $brand->update([
            'name' => $request->name
        ]);

        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Brand has been updated');
        return redirect()->back();
    }

    public function brandDelete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Brand has been deleted');
        return redirect()->back();
    }
}
