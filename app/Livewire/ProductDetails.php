<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetails extends Component
{
    public $productId;

    public $showModal = false;

    public function mount($productId)
    {
        $this->productId = $productId;
    }


    public function addToCart()
    {
        $product = Product::find($this->productId);

        if (!$product) {
            session()->flash('error', 'Product not found!');
            return;
        }

        $cart = session()->get('cart', []);
        if (isset($cart[$this->productId])) {
            $cart[$this->productId]['quantity'] += $this->quantity;
        } else {
            $cart[$this->productId] = [
                'name' => $product->name,
                'price' => $product->customer_price,
                'quantity' => $this->quantity
            ];
        }

        session()->put('cart', $cart);
        $this->emit('cartUpdated');  // Notify other components or the same component
        session()->flash('success', 'Product added to cart successfully!');
    }

    public function render()
    {
        $product = Product::find($this->productId);
        return view('livewire.product-details', ['product' => $product]);
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
}
