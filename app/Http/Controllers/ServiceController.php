<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //index on admin.services
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }
    //create on admin.services
    public function create()
    {
        return view('admin.services.create');
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        //path
        $path = null;

        //check if image uploaded
        if ($request->hasFile('image')) {
           //move file to services/images
            $imageName = time().'.'.$request->image->extension();
            $path = $request->file('image')->move('services/images', $imageName);
        }
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path,
        ]);
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully');
    }

    //edit
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }
    //Update
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        //path
        $path = null;

        //check if image uploaded
        if ($request->hasFile('image')) {
            //move file to services/images
            $imageName = time().'.'.$request->image->extension();

            //get the service image path
            $serviceImage = $service->image;
            $path = $request->file('image')->move('services/images', $imageName);
        }
        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path,
        ]);

        //unlink the old image
        if ($request->hasFile('image')) {
            unlink($serviceImage);
        }

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully');
    }


    //destroy
    public function destroy(Service $service)
    {
        //get the service image path
        $serviceImage = $service->image;
        $service->delete();

        //unlink the image
        unlink($serviceImage);

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully');
    }



}
