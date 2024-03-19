<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Supplier;
use App\Models\SupplierProductLine;
use Illuminate\Http\Request;

class SupplierProductLineController extends Controller
{
    //index
    public function index(Supplier $supplier)
    {
        $supplierProductLines = $supplier->supplierProductLines;
        $categories = Category::all();
        return view('admin.supplier_product_lines.index', compact('supplierProductLines', 'supplier', 'categories'));
    }

    //store
    public function store(Request $request, Supplier $supplier)
    {
        $submittedProductIds = $request->input('products', []);

        // Get the current product lines for the supplier
        $currentProductLines = $supplier->supplierProductLines;

        // Mark as not supplying the products that were unchecked
        foreach ($currentProductLines as $productLine) {
            if (!in_array($productLine->product_id, $submittedProductIds)) {
                // Mark the product line as not supplying
                $productLine->is_supplying = false;
                $productLine->save();
            }
        }

        // Attach new products or re-mark as supplying if already exists but was marked as not supplying
        foreach ($submittedProductIds as $productId) {
            $productLine = $supplier->supplierProductLines()->where('product_id', $productId)->first();

            if ($productLine) {
                // The product line exists, ensure it's marked as supplying
                $productLine->is_supplying = true;
                $productLine->save();
            } else {
                // The product line doesn't exist, create a new one
                $supplier->supplierProductLines()->create([
                    'product_id' => $productId,
                    'is_supplying' => true,
                ]);
            }
        }

        return back()->with('success', 'Supplier product lines updated successfully.');
    }

    //destroy
    public function destroy(Supplier $supplier, SupplierProductLine $supplierProductLine)
    {
        $supplierProductLine->delete();
        return redirect()->route('supplier.product-lines.index',$supplier->slug)->with('success', 'Supplier product line deleted successfully.');
    }



}
