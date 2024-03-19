<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StockTrackingController extends Controller
{
    //

    public function index(Product $product)
    {
        $stockTrackQuantity = 0;
        $stockTrackQuantityAvailable = 0;
        $reOrderLevel = 0;
        $reOrderLevelValue = 0;

        if ($product->stockTracking()->exists()) {
            $stockTrackQuantity = $product->stockTracking()->first()->quantity;
            $stockTrackQuantityAvailable = $product->stockTracking()->first()->quantity_available;
            $reOrderLevel = $product->stockTracking()->first()->reorder_level;
            $reOrderLevelValue = $product->stockTracking()->first()->reorder_level_value;
            if ($reOrderLevel == null) {
                $reOrderLevel = 0;
            }

            if ($reOrderLevelValue == null) {
                $reOrderLevelValue = 0;
            }
        }

        if ($product->inventoryBatches()->exists()) {
            $quantity_available = $product->inventoryBatches()->where('is_active', 1)->sum('quantity_available');
        } else {
            $quantity_available = 0;
        }

        return response()->json([
            'stock_tracking_quantity' => $stockTrackQuantity,
            'quantity_available' => $stockTrackQuantityAvailable,
            'reorder_level' => $reOrderLevel,
            'reorder_level_value' => $reOrderLevelValue

        ]);

    }

    public function store(Request $request, Product $product)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:0', // required and must be a non-negative integer
            'quantity_available' => 'required|integer|min:0', // required and must be a non-negative integer
            'reorder_level' => 'required|numeric|min:0', // required and must be a non-negative integer
        ]);

        // Create a new StockTracking instance and save the form data
        $stockTracking = $product->stockTracking()->updateOrCreate(
            ['product_id' => $product->id], // Find by this attribute
            [
                'quantity' => $validatedData['quantity'], // Update or create with these values
                'quantity_available' => $validatedData['quantity_available'],
                'reorder_level' => $validatedData['reorder_level']
            ]
        );

        return back()->with('success', 'Stock Tracking created successfully');
    }

    //update
    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'quantity_available' => 'required|integer|min:0', // required and must be a non-negative integer
            'reorder_level' => 'required', // required and must be a non-negative integer
        ]);

        if ($product->stockTracking()->exists()) {
            $stockTracking = $product->stockTracking()->first();
            $reorder_level = $product->stockTracking()->first()->reorder_level;
            $quantity_available = $product->stockTracking()->first()->quantity_available;
            $quantity = $product->stockTracking()->first()->quantity;

            //round $reorder_level_value to a whole number
            $reorder_level_value = round(($validatedData['reorder_level'] / 100) * $quantity, 0);

            $stockTracking->updateOrCreate(
                ['product_id' => $product->id], // Find by this attribute
                [
                    'reorder_level' => $validatedData['reorder_level'],
                    'reorder_level_value' => $reorder_level_value,

                ]
            );
        }

        // Create a new StockTracking instance and save the form data
        return back()->with('success', 'Stock Tracking Level updated successfully');
    }

}
