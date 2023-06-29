<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Category::class, 'category');
    }

    public function index(Request $request)
    {
        $categories = Category::when($request->is('admin/category/archive'), function ($query){
                                    $query->onlyTrashed();
                                })
                                ->orderBy('created_at', 'desc')->get();

        return view('admin.categories.category', ['categories' => $categories]);
    }

    public function create()
    {
        $category = new Category();
        return view('admin.categories.forms', ['category' => $category]);
    }

    public function store(CategoryFormRequest $request, Category $category)
    {
        $category = Category::create($request->validated());
        return redirect()->route('admin.category.index')->with('success', 'Une catégorie à été ajouté avec succès');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.forms', ['category' => $category]);
    }

    public function update(CategoryFormRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('admin.category.index')->with('success', 'La catégorie à été modifié avec succès');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'La catégorie à été supprimer avec succès');
    }

    public function restore($id)
    {
        $category = Category::onlyTrashed()->where('id', $id);
        $category->restore();
        return redirect()->route('admin.category.index')->with('success', 'La catégorie à été restoré avec succès');
    }

    public function forceDelete($id)
    {
        $category = Category::onlyTrashed()->where('id', $id);
        $category->forceDelete();
        return redirect()->route('admin.category.index')->with('success', 'La catégorie à été supprimer definitivement avec succès');
    }

}
