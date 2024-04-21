<?php

namespace App\Livewire;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart;

    // Listener definition is correct for Livewire 3.x.
    protected $listeners = ['cartUpdated' => 'onCartUpdate'];

    public function mount()
    {
        $this->updateCartFromSession();
    }

    // You may want to call this method after any action that would alter the cart.
    public function onCartUpdate()
    {
        $this->updateCartFromSession();

    }

    // Ensure you're using the right session management within Livewire.
    public function updateCartFromSession()
    {
        $this->cart = session()->get('cart', []);
        $this->dispatch('cart-refresh'); // Inform the browser for any DOM changes.

    }

    public function removeFromCart($productId)
    {
        $cart = collect($this->cart);
        $this->cart = $cart->reject(function ($item) use ($productId) {
            return $item['id'] == $productId;
        })->toArray();

        session()->put('cart', $this->cart);
        $this->updateCartFromSession(); // This will update the cart and trigger the listener

        // Notify all components listening for this event that the cart has been updated
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.shopping-cart', [
            'cartItems' => $this->cart,
            'total' => $this->calculateTotal(),
        ]);
    }

    private function calculateTotal()
    {
        // Ensure you sum the 'price' * 'quantity' if you have a quantity field.
        return array_sum(array_map(function ($item) {
            return $item['price'] * ($item['quantity'] ?? 1);
        }, $this->cart));
    }
}
