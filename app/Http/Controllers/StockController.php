<?php

namespace App\Http\Controllers;

use App\Models\InventoryBatch;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class StockController extends Controller
{
    //
    public function index(Product $product)
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('admin.stock.index', compact('suppliers', 'products'));
    }

    //create method
    public function create(Product $product)
    {
        $suppliers = Supplier::all();
        return view('admin.stock.create', compact('suppliers', 'product'));
    }


    public function store(Request $request, Product $product)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'supplier_id' => 'required|integer|exists:suppliers,id', // assuming you have a suppliers table
            'brand_id' => 'nullable', // assuming you have a brands table and it's nullable
            'quantity_available' => 'nullable|integer|min:0', // nullable and must be an integer if provided
            'quantity_ordered' => 'required|integer|min:0', // required and must be a non-negative integer
            'ordered_date' => 'nullable|date', // must be a valid date or null
            'received_date' => 'nullable|date', // must be a valid date or null
            'is_active' => 'nullable|boolean', // must be true, false, 1, 0, "1", or "0"
            'cost_price_per_unit' => 'required', // must be a numeric value between 0 and 999999.99
            'landing_cost' => 'required', // must be a numeric value between 0 and 999999.99
        ]);

        // Remove the batch_number from the validated data if present, since we'll set it manually after creation
        unset($validatedData['batch_number']);

        // Create a new InventoryBatch instance and save the form data
        $inventoryBatch = $product->inventoryBatches()->create($validatedData);

        // Generate the batch_number with a zero-filled ID
        $batchNumber = str_pad($inventoryBatch->id, 4, '0', STR_PAD_LEFT);

        // Update the InventoryBatch instance with the new batch_number
        $inventoryBatch->update(['batch_number' => $batchNumber]);

        // Redirect or return response as necessary
        return redirect()->route('stock.index',$product->slug)->with('success', 'Inventory batch created successfully!');
    }
}
