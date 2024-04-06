<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Check if the shop ID exists in the relationship's shops collection
        if ($request->has('shop_id')) {
            $shopId = $request->input('shop_id');
            $query->whereHas('shops', function ($query) use ($shopId) {
                $query->where('shops.id', $shopId);
            });
        }

        // Check if the category ID exists
        if ($request->has('category_id')) {
            $categoryId = $request->input('category_id');
            $query->whereHas('category', function ($query) use ($categoryId) {
                $query->where('categories.id', $categoryId);
            });
        }

        // Filter by price_range
        if ($request->has('price_range')) {
            $priceRange = explode('-', $request->input('price_range'));
            $minPrice = (int)str_replace('$', '', $priceRange[0]);
            $maxPrice = (int)str_replace('$', '', $priceRange[1]);

            $query->whereBetween('customer_price', [$minPrice, $maxPrice]);
        }

        // Retrieve the filtered products
        $products = $query->where('published', 1)
            ->with(['shops:id', 'category:id'])
            ->get();

        return response()->json($products);
    }

}
