<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Store a newly created shop in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        Category::create($request->all());

        return redirect()->route('product-categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Update the specified shop in storage.
     */
    public function update(Request $request, Category $category)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        $category->update($request->all());

        return redirect()->route('product-categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified shop from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('product-categories.index')->with('success', 'Category deleted successfully.');
    }
}
