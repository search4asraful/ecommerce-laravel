<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use App\Http\Requests\BrandUpdateRequest;
use App\Models\Brand;
use App\Services\BrandServices;

class BrandController extends Controller
{
    protected $BrandServices;

    public function __construct(BrandServices $BrandServices)
    {
        $this->BrandServices = $BrandServices;
    }
    
    public function brandCreateForm()
    {
        return view('backend.pages.brand.add');
    }

    public function brandManage()
    {
        $brands = Brand::select(['id', 'name', 'image'])->orderBy('id', 'desc')->get();
        return view('backend.pages.brand.manage', compact('brands'));
    }

    public function brandStore(BrandStoreRequest $request)
    {
        $this->BrandServices->brandStore($request);
        
        $this->setMassege('success', 'Brand has been created');
        return redirect()->back();
    }

    public function brandEdit($id)
    {
        $brand = Brand::where('id', $id)->first();
        return view('backend.pages.brand.edit', compact('brand'));
    }

    public function brandUpdate(BrandUpdateRequest $request, $id)
    {
        $brand = Brand::find($id);
        $this->BrandServices->brandUpdate($brand, $request);

        $this->setMassege('success', 'Brand has been updated');
        return redirect()->back();
    }

    public function brandDelete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        $this->setMassege('success', 'Brand has been deleted');
        return redirect()->back();
    }
}
