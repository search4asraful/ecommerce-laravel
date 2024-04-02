<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\CategoryServices;

class CategoryController extends Controller
{
    protected $CategoryServices;

    public function __construct(CategoryServices $CategoryServices)
    {
        $this->CategoryServices = $CategoryServices;
    }

    public function categoryCreateForm()
    {
        return view('backend.pages.category.add');
    }

    public function categoryManage()
    {
        $categories = Category::select(['id', 'name', 'image'])->orderBy('id', 'desc')->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    public function categoryStore(CategoryStoreRequest $request)
    {
        $this->CategoryServices->categoryStore($request);

        $this->setMassege('success', 'Category has been created');
        return redirect()->back();
    }

    public function categoryEdit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('backend.pages.category.edit', compact('category'));
    }

    public function categoryUpdate(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);
        $this->CategoryServices->categoryUpdate($category, $request);

        $this->setMassege('success', 'Category has been updated');
        return redirect()->back();
    }

    public function categoryDelete($id)
    {
        $category = Category::find($id);
        $category->delete();

        $this->setMassege('success', 'Category has been deleted');
        return redirect()->back();
    }
}
