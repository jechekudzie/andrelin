<?php

namespace App\Livewire;

use Livewire\Component;

class CartItemCounter extends Component
{
    public $count = 0;

    protected $listeners = ['cartUpdated' => 'updateCount'];

    public function mount()
    {
        $this->updateCount();
    }

    public function updateCount()
    {
        // This assumes each product, regardless of quantity, is a unique entry in the cart.
        $this->count = count(session()->get('cart', []));
    }


    public function render()
    {
        return view('livewire.cart-item-counter', ['count' => $this->count]);
    }
}

