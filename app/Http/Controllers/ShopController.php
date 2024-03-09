<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        $shops = Shop::all();
        return view('admin.shops.index', ['shops' => $shops]);
    }

    /**
     * Store a newly created shop in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'description' => 'nullable',
        ]);

        Shop::create($request->all());

        return redirect()->route('shop.index')->with('success', 'Shop created successfully.');
    }

    /**
     * Update the specified shop in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'description' => 'nullable',
        ]);

        $shop->update($request->all());

        return redirect()->route('shop.index')->with('success', 'Shop updated successfully.');
    }

    /**
     * Remove the specified shop from storage.
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();

        return redirect()->route('shop.index')->with('success', 'Shop deleted successfully.');
    }
}
