<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Organisation;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CustomerController extends Controller
{
    //index
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'customer_type' => ['required'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('Incorrect@123!xx'),
        ]);

        $user->customer()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        event(new Registered($user));

        $organisation = Organisation::where('slug', 'customer')->first();

        // find organisation roles
        if ($request->customer_type == 'dealer') {
            $role = Role::where('name', 'dealer')->first();
        } else {
            $role = Role::where('name', 'customer')->first();
        }

        // Assign the role to the user
        $user->roles()->attach($role->id, [
            'model_type' => get_class($user),
            'organisation_id' => $organisation->id
        ]);

        // Attach the user to the organisation with the specified role
        $organisation->users()->attach($user->id, ['role_id' => $role->id]);

        return back()->with('success', 'Registration successful.');
    }

}
