<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::where('published', 1)->get(); // Get only published products

        return view('admin.products.index', compact('products',));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $shops = Shop::all();
        $categories = Category::all();
        return view('admin.products.create', compact('shops', 'categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'customer_price' => 'nullable|numeric',
            'dealer_price' => 'nullable|numeric',
            'discount_percentage' => 'nullable|numeric|max:100',
            'shops' => 'required|array',
            'shops.*' => 'exists:shops,id',
            'description' => 'nullable|string',
            'cost_per_unit' => 'nullable',
            'image' => 'nullable|image|max:2048', // Validate the image
            // add validation for other fields as needed
        ]);

        //dd($request->all());

        $path = null;

        $productData = $request->except('shops', 'image'); // Exclude 'shops' and 'image' from the mass assignment

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Create a unique filename
            $path = $file->move('images/products/', $filename); // Move the file to the target directory
            $productData['image'] = $path; // Set the filename to be stored in the database
        }

        $product = Product::create($productData); // Create the product with the validated data

        // Associate product with shops
        $product->shops()->sync($request->shops);

        return redirect()->route('products.create')->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $shops = Shop::all();
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'shops', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'customer_price' => 'nullable|numeric',
            'dealer_price' => 'nullable|numeric',
            'discount_percentage' => 'nullable|numeric|max:100',
            'shops' => 'required|array',
            'shops.*' => 'exists:shops,id',
            'description' => 'nullable|string',
            'cost_per_unit' => 'nullable|boolean',
            'image' => 'nullable|image|max:2048', // Validate the image
            // add validation for other fields as needed
        ]);

        $path = null;

        $productData = $request->except('shops', 'image'); // Exclude 'shops' and 'image' from the mass assignment

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image && file_exists(public_path('images/products/' . $product->image))) {
                unlink('images/products/' . $product->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Create a unique filename
            $path = $file->move('images/products/', $filename); // Move the file to the target directory
            $productData['image'] = $path; // Set the filename to be stored in the database
        }

        // Update the product with the validated data
        $product->update($productData);

        // Update association with shops
        $product->shops()->sync($request->shops);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
