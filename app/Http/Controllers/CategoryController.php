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
        $category = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        Category::create([
            //name string to Upper
            'name' => strtoupper($category['name']),
            'description' => $category['description'],
        ]);

        return redirect()->route('product-categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Update the specified shop in storage.
     */
    public function update(Request $request, Category $category)
    {


        $update = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        $category->update([
            //name string to Upper
            'name' => strtoupper($update['name']),
            'description' => $update['description'],
        ]);

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
