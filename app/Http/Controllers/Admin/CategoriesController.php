<?php


namespace App\Http\Controllers\Admin;


use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\AdminCategorySaveRequest;

class CategoriesController
{


    public function category()
    {
        $category = ((new Category())->getCategories());
        return view('admin.category', ['categories' => $category]);
    }

    public function createCategory(Request $request)
    {
        return view('admin.editCategory');
    }

    public function saveCategory(AdminCategorySaveRequest $request, Category $category)
    {

        $category->saveCategory($request->id, $request);
        return redirect()->route('admin::news::createCategory');

    }

    public function updateCategory(Request $request)
    {
        return view('admin.editCategory',['id' => $request->id,
            'name_category' => $request->name_category]);
    }

    public function deleteCategory(AdminCategorySaveRequest $request, Category $category)
    {
        $category->deleteCategory($request->name_category);
        return redirect()->route('admin::news::category');
    }
}
