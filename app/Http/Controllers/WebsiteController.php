<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
class WebsiteController extends Controller
{
    //index
    public function index(){
        return view('web.index');
    }

    public function shop(){
        return view('web.shop');
    }

    //cartPage
    public function cartPage(){
        return view('web.cart_page');
    }

    public function update(Request $request)
    {
        $productId = $request->product_id;
        $quantity = $request->quantity;
        $action = $request->action;

        $productId = $request->product_id;
        $quantity = max(1, $request->quantity); // Ensure quantity is at least 1

        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Product not found']);
        }

        $cart = session()->get('cart', []);

        switch ($action) {
            case 'add':
                if (isset($cart[$productId])) {
                    $cart[$productId]['quantity'] += $quantity;
                } else {
                    $cart[$productId] = [
                        'quantity' => $quantity,
                        'product_id' => $productId,
                        'name' => $product->name,
                        'customer_price' => $product->customer_price,
                        'dealer_price' => $product->dealer_price,
                    ];
                }
                break;

            case 'remove':
                if (isset($cart[$productId])) {
                    unset($cart[$productId]);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Product not in cart']);
                }
                break;

            case 'update':
                if (isset($cart[$productId])) {
                    $cart[$productId]['quantity'] = $quantity;
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Product not found in cart']);
                }
                break;

            default:
                return response()->json(['status' => 'error', 'message' => 'Invalid action']);
        }

        session()->put('cart', $cart);
        session()->save(); // Ensure session is saved

        // General success response
        return response()->json([
            'status' => 'success',
            'message' => ucfirst($action) . ' action completed',
            'cart' => $cart // Optionally include cart data in response
        ]);
    }


// In CartController
    public function getCartData()
    {
        $cart = session()->get('cart', []);
        $cartItems = [];

        foreach ($cart as $id => $details) {
            $product = Product::find($id);
            if ($product) {
                $cartItems[] = [
                    'product_id' => $id,
                    'name' => $product->name,
                    'price' => $product->customer_price,
                    'quantity' => $details['quantity'],
                    'image' => asset($product->image),
                    'total' => $product->customer_price * $details['quantity']
                ];
            }
        }

        return response()->json($cartItems);
    }

    public function cart(){

        $products = collect(session()->get('cart', []));

        return view('web.cart', compact('products'));
    }

    //contact
    public function contact(){
        return view('web.contact');
    }



}
