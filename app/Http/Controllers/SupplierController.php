<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //index
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.suppliers.index',compact('suppliers'));
    }

    //store
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'mobile' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'physical_address' => 'nullable|string',
            'web_address' => 'nullable|url|max:255',
        ]);

        $supplier = Supplier::create($validatedData);

        return redirect()->route('suppliers.index')->with('success', 'Supplier added successfully.');
    }

    public function update(Request $request, Supplier $supplier)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'mobile' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'physical_address' => 'nullable|string',
            'web_address' => 'nullable|url|max:255',
        ]);

        $supplier->update($validatedData);

        return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully.');
    }
    //destroy
    public function destroy(Supplier $supplier)
    {
        //delete supplier
        $supplier->delete();

        //redirect
        return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully');
    }
}
