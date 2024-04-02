<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductServices;

class ProductController extends Controller
{
    protected $productServices;

    public function __construct(ProductServices $productServices)
    {
        $this->productServices = $productServices;
    }

    public function productAddForm()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.products.productAdd', compact('categories'));
    }

    public function productStore(ProductStoreRequest $request)
    {
        $this->productServices->productStore($request);

        $this->setMassege('success', 'Your product has been added.');
        return redirect()->back();
    }

    public function productManage()
    {
        $products = Product::with('category')->select(['id', 'category_id', 'name', 'price', 'image', 'qty'])->orderBy('id', 'desc')->get();
        return view('backend.pages.products.productManage', compact('products'));
    }

    public function productEdit($id)
    {
        $product = Product::where('id', $id)->first();
        $brand = Brand::first();
        return view('backend.pages.products.edit', compact('product', 'brand'));
    }

    public function productUpdate(ProductUpdateRequest $request, $id)
    {
        $product = Product::find($id);
        $this->productServices->productUpdate($product, $request);
        $this->setMassege('success', 'Product has been updated');
        return redirect()->back();
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        $this->setMassege('success', 'Product has been deleted');
        return redirect()->back();
    }
}