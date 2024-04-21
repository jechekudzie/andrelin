<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Product;
use Livewire\Component;

class CartPage extends Component
{
    public $cartItems = [];
    public $subtotal = 0;
    public $total = 0;
    public $couponCode;
    public $useDealerPrice = false;

    public $message = '';

    protected $listeners = ['cartUpdated' => 'updateCartDisplay'];

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        $this->cartItems = session()->get('cart', []);
        $this->calculateTotals();

    }

    public function updateCartDisplay()
    {
        $this->loadCart(); // Reload or update component data
    }

    public function removeFromCart($productId)
    {
        $this->cartItems = array_filter($this->cartItems, function ($item) use ($productId) {
            return $item['id'] !== $productId;
        });
        $this->saveCart();
    }


    //apply coupon
    public function applyCoupon()
    {
        if (!empty($this->couponCode)) {
            $customer = Customer::where('dealer_id', trim($this->couponCode))->first();

            if ($customer) {
                $this->useDealerPrice = true;
                $this->message = 'Coupon code applied successfully.';
                $this->updateCartPrices();

            } else {
                $this->message = 'Invalid coupon code.';
                $this->couponCode = '';
                $this->updateCartPrices();
            }

        } else {
            if (empty($this->couponCode)) {
                $this->useDealerPrice = false;
                $this->message = 'Please enter a coupon code.';
            } else {
                $this->message = 'Invalid coupon code.';
            }


        }

    }

    //update cart prices after applying coupon
    private function updateCartPrices()
    {
        foreach ($this->cartItems as $index => $item) {
            $product = Product::find($item['id']);
            if (!$product) {
                continue; // Skip if product is not found
            }

            if ($this->useDealerPrice && isset($product->dealer_price)) {
                $this->cartItems[$index]['price'] = $product->dealer_price;
            } else {
                $this->cartItems[$index]['price'] = $product->customer_price;
            }
        }

        session()->put('cart', $this->cartItems);
        $this->dispatch('cartUpdated');

    }

    //destroy message
    public function destroyMessage()
    {
        $this->message = '';
        $this->couponCode = '';
        $this->useDealerPrice = false;

    }


    public function saveCart()
    {
        session()->put('cart', $this->cartItems); // Save the updated cart to the session
        $this->calculateTotals(); // Recalculate totals based on the current cart state
       $this->destroyMessage();
        $this->dispatch('cartUpdated'); // Notify other components of the update
    }

    private function calculateTotals()
    {
        $this->subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $this->cartItems));
        $this->total = $this->subtotal; // Recalculate the total, considering any discounts
    }

    public function render()
    {
        return view('livewire.cart-page', [
            'cartItems' => $this->cartItems,
            'subtotal' => $this->subtotal,
            'total' => $this->total
        ]);
    }
}
