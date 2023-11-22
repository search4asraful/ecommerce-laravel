<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryCreateForm()
    {
        return view('backend.pages.category.add');
    }

    public function categoryManage()
    {
        $categories = Category::select(['id', 'name', 'image'])->orderBy('id', 'desc')->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    public function categoryStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'image' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/', $imageName);
        Category::create([
            'name' => $request->name,
            'image' => $imageName
        ]);
        $this->setMassage('succes', 'Category has been created');
        return redirect()->back();
    }

    public function categoryEdit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('backend.pages.category.edit', compact('category'));
    }

    public function categoryUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'image' => 'sometimes|image'
        ]);

        $category = Category::find($id);

        if($request->hasFile('image')){
            if(file_exists(public_path('images/'.$category->image))){
                unlink(public_path('images/'.$category->image));
            }else{
                $imageName = time().'.'.$request->image->extension();
                $request->image->move('images/',$imageName);
            }
            $category->image = $imageName;
        }
        $category->update([
            'name' => $request->name
        ]);

        $this->setMassage('succes', 'Category has been updated');
        return redirect()->back();
    }

    public function categoryDelete($id)
    {
        $category = Category::find($id);
        $category->delete();
        $this->setMassage('succes', 'Category has been deleted');
        return redirect()->back();
    }
}
