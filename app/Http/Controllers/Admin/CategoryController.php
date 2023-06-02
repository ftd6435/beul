<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

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
}
