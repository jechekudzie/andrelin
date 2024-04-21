<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsList extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap-custom';

    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1]
    ];
    public $selectedCategory;
    public $selectedStatus;

    public $cart = [];
    public $quantities = [];
    public $showModalForProductId = null;
    public $modalProduct = null;  // Add this line


    public function updatingSearch()
    {
        $this->resetPage();  // Reset pagination to the first page
    }

    public function mount()
    {
        $this->cart = session()->get('cart', []);
        $this->products = Product::all();
        $this->initializeQuantities($this->products);
    }

    public function openModal($productId)
    {
        $this->modalProduct = Product::find($productId);
        $this->showModalForProductId = $productId;
    }

    public function closeModal()
    {
        $this->modalProduct = null;
        $this->showModalForProductId = null;
    }

    private function initializeQuantities($products)
    {
        foreach ($products as $product) {
            $this->quantities[$product->id] = $this->cart[$product->id]['quantity'] ?? 1;
        }
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        if (!$product) {
            session()->flash('error', 'Product not found!');
            return;
        }

        if (array_key_exists($productId, $this->cart)) {
            // Remove the product from the cart if it's already there
            unset($this->cart[$productId]);

            //reset quantity to 1
            $this->quantities[$productId] = 1;
        } else {
            // Add or update the product in the cart
            $this->cart[$productId] = [
                'name' => $product->name,
                'price' => $product->customer_price,
                'quantity' => $this->quantities[$productId]
            ];
        }

        session()->put('cart', $this->cart);
        $this->dispatch('cartUpdated'); // Updated to use dispatch
    }

    public function updateCartQuantity($productId, $newQuantity)
    {
        if (array_key_exists($productId, $this->cart)) {
            $this->cart[$productId]['quantity'] = max(1, intval($newQuantity));
            session()->put('cart', $this->cart);
        }
    }

    public function render()
    {
        Log::info("Current search term: " . $this->search);

        if (strlen($this->search) >= 3) {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->paginate(12); // Using pagination
        } else {
            $products = Product::paginate(12); // Using pagination
        }

        $categories = Category::all();

        return view('livewire.products-list', compact('products','categories'));
    }



}
