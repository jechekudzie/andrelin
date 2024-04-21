<div>
    <section class="shop shop-cart bg-white" id="shopcart">
        <div class="container">
            <div class="table-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr class="cart-product">
                                    <th class="cart-product-item">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartItems as $index => $item)
                                    <tr class="cart-product">
                                        <td class="cart-product-item">
                                            <div class="cart-product-img">
                                                <img class="w-100 h-100" src="{{ asset($item['image']) }}" alt="product">
                                            </div>
                                            <div class="cart-product-name">
                                                <h6>{{ $item['name'] }}</h6>
                                            </div>
                                        </td>
                                        <td class="cart-product-price">$ {{ number_format($item['price'], 2) }}</td>
                                        <td class="cart-product-quantity">
                                            <div class="product-quantity">
                                                <input type="number"
                                                       wire:model="cartItems.{{ $index }}.quantity"
                                                       wire:change="saveCart"
                                                       min="1"
                                                       id="quantity-{{ $item['id'] }}" />
                                            </div>
                                        </td>
                                        <td class="cart-product-total">$ {{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-5 justify-content-center">
                        @if ($message !== '')
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Info!</strong> {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                    </div>

                    <div class="col-12">
                        <div class="cart-product-action">
                            <form class="form-inline" wire:submit.prevent="applyCoupon">
                                <input class="form-control" wire:model="couponCode" id="coupon" type="text" placeholder="Coupon Code">
                                <button  class="btn btn--secondary justify-content-center">Apply Coupon</button>
                            </form>
                            <div>
                              {{--  <a class="btn btn--secondary justify-content-center" href="#" wire:click.prevent="saveCart">Update Cart</a>--}}
                                <a class="btn btn--secondary justify-content-center" href="#">Checkout</a>
                            </div>
                        </div>
                        <div class="cart-total-amount">
                            <h5>Cart totals :</h5>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="head">Subtotal</td>
                                    <td>$ {{ number_format($subtotal, 2) }}</td>
                                </tr>
                                <tr>
                                    <td class="head">Total</td>
                                    <td class="amount">$ {{ number_format($total, 2) }}</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
