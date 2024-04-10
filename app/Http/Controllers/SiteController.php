<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Organisation;
use App\Models\Payment;
use App\Models\Sale;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Paynow\Payments\Paynow;

class SiteController extends Controller
{
    //paymentOptions
    public function cartData(Request $request)
    {
        // Decode the JSON cart data from the request into objects
        $cart = json_decode($request->input('cartData'));

        // Check if $cart is null which means json_decode failed
        if (is_null($cart)) {
            // Handle the error, maybe log it or set an error message in the session
            // Log::error('Failed to decode cart data');
            session()->flash('error', 'Failed to decode cart data.');
            return redirect()->back();
        }

        // Store the cart data in the session
        session(['cart' => $cart]);

        // Redirect to the 'payment.options' route
        return redirect()->route('payment.options');
    }


    public function paymentOptions(Request $request)
    {
        // Retrieve the cart data from the session
        $cart = session('cart', []); // Default to an empty array if not set

        $totalDealer = 0;
        $totalCustomer = 0;

        // Iterate through the cart items if it's an array
        foreach ($cart as $product) {
            // Ensure $product is an object and has all required properties
            if (is_object($product) && isset($product->quantity, $product->dealer_price, $product->customer_price)) {
                $totalDealer += $product->quantity * $product->dealer_price;
                $totalCustomer += $product->quantity * $product->customer_price;
            } else {
                // Log or handle the case where $product does not have the expected structure
            }
        }

        return view('payment_options', compact('cart', 'totalDealer', 'totalCustomer'));
    }


    public function initiatePayment(Request $request)
    {

        $validatedData = $request->validate([
            'amount' => 'required',
        ]);
        $orderData = $validatedData;

        $user = Auth::user();

        if (!Auth::check()) {
            return back()->with('error', 'Please login to continue');
        }

        //user role
        $role = $user->hasRole('dealer') ? 'dealer' : 'customer';


        $orderData['role'] = $role;
        $orderData['user'] = $user;
        //generate unique reference
        $orderData['reference'] = 'INV' . strtoupper(uniqid());

        // Initiate the payment and redirect the user
        $payNow = $this->payNow($orderData['reference']);

        // Create a new payment
        $payment = $payNow->createPayment($orderData['reference'], $user->email);

        // Add items to the payment
        $payment->add('Purchase Order', $orderData['amount']);

        // Set the payment to be paid using payment methods
        $response = $payNow->send($payment);

        if ($response->success()) {
            $pollUrl = $response->pollUrl();
            $orderData['pollUrl'] = $pollUrl;

            //store order data in the session
            session(['orderData' => $orderData]);


            return redirect($response->redirectUrl());
        } else {
            throw new Exception('Failed to initiate payment');
        }


    }

    //checkPayment
    public function checkPayment($reference)
    {

        $orderData = session('orderData');
        $cartData = session('cart');

        $user = Auth::user();

        $payNow = $this->payNow($reference);

        $response = $payNow->pollTransaction($orderData['pollUrl']);
        $status = $response->status();
        $payNowReference = $response->paynowReference();
        $reference = $response->reference();

        if ($status == 'paid' || $status == 'awaitingDelivery' || $status == 'delivered') {
            $sale = Sale::create([
                'customer_id' => $orderData['user']->id,
                'total' => $orderData['amount'],
                'purchase_date' => now(),
                'customer_type' => $orderData['role'],
                'reference' => $reference,
                'organisation_id' => 1,
            ]);

            foreach ($cartData as $product) {
                $customer_price = $product->customer_price;
                $dealer_price = $product->dealer_price;
                $on_discount = $product->on_discount;

                $sale->saleProducts()->create([
                    'product_id' => $product->id,
                    'quantity' => $product->quantity,
                    'customer_price' => $customer_price,
                    'dealer_price' => $dealer_price,
                    'on_discount' => $on_discount,
                ]);
            }

            // Payment has been paid create a payment record
            $payment = Payment::create([
                'sale_id' => $sale->id,
                'amount_invoiced' => $orderData['amount'],
                'amount_paid' => $orderData['amount'],
                'balance' => 0,
                'payment_method_id' => 1,
                'reference' => $reference,
                'paynow_reference' => $payNowReference,
                'customer_id' => $user->customer->id,
                'user_id' => $orderData['user']->id,
                'organisation_id' => 1,
            ]);

            return redirect()->route('notify-payment',$payment->id)->with('success', 'Payment successful');

        } else {
            // Payment has not been paid
            // Return a failed response
            return redirect('/igc');
        }
    }

    public function notifyPayment(Payment $payment)
    {

        return view('payment_success', compact('payment'));
    }


    public function payNow($reference)
    {
        $payNow = new Paynow(
            '5865',
            '23962222-9610-4f7c-bbd5-7e12f19cdfc6',
            'http://localhost:8000/paynow/return/' . $reference,
            'http://localhost:8000/paynow/return/' . $reference,
        );

        return $payNow;

    }


    //login and authenticate
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return back()->with('success', 'Login successful.');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {

        Auth::guard('web')->logout();

        $request->session()->regenerateToken();

        return redirect()->route('payment.options');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'min:8'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'customer_type' => ['required'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->customer()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        event(new Registered($user));

        Auth::login($user);

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
