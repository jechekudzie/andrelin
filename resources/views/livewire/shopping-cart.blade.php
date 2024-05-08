<!-- livewire/shopping-cart.blade.php -->
<div>
    <ul class="cart-overview">
        @foreach($cartItems as $item)
            <li wire:key="cart-item-{{ $item['id'] }}">
                <img src="{{ asset($item['image']) ?? 'website/assets/images/shop/thumb/default.png' }}" alt="{{ $item['name'] }}"/>
                <div class="product-meta">
                    <h5 style="color: black;">{{ $item['name'] }}</h5>
                    <p style="color: black;font-size: 14px;">Price: ${{ number_format($item['price'], 2) }}</p>
                    <p style="color: black;font-size: 14px;">Quantity: {{ $item['quantity'] }}</p>
                    <p>Subtotal: ${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                </div>
                <a class="cart-cancel" href="#" wire:click.prevent="removeFromCart('{{ $item['id'] }}')"><i class="fas fa-times"></i></a>
            </li>
        @endforeach
    </ul>
    <span>Grand total: <i class="total-price">${{ number_format($total, 2) }}</i></span>
    <div class="cart--control">
        <a class="btn btn-checkout" href="{{url('website/cart-page')}}">checkout</a>
    </div>
</div>
