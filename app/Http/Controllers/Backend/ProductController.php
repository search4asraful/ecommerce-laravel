<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function productAddForm()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.products.productAdd', compact('categories'));
    }
    public function productStore(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|not_in:0',
            'short_description' => 'required',
            'long_description' => 'required',
            'qty' => 'required|integer|not_in:0',
            'image' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/', $imageName);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->badge = $request->badge;
        $product->image = $imageName;
        $product->save();

        $this->setMassage('succes', 'Product has been added');
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
        return view('backend.pages.products.edit', compact('product'));
    }

    public function productUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|not_in:0',
            'qty' => 'sometimes|integer|not_in:0',
            'image' => 'sometimes|image'
        ]);

        $product = Product::find($id);

        if($request->hasFile('image')){
            if(file_exists(public_path('images/'.$product->image))){
                unlink(public_path('images/'.$product->image));
            }else{
                $imageName = time().'.'.$request->image->extension();
                $request->image->move('images/',$imageName);
            }
            $product->image = $imageName;
        }
        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'badge' => $request->badge,
            'qty' => $request->qty
        ]);

        $this->setMassage('succes', 'Product has been updated');
        return redirect()->back();
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        $this->setMassage('succes', 'Product has been deleted');
        return redirect()->back();
    }
}
