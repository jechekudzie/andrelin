@extends('layouts.web')

@section('content')
    <section class="page-title page-title-blank bg-white" id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="d-none">High Efficiency Solar Cells For Manufacturers</h3>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('website/index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('website/shop')}}">shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </div>
                    <!-- End .title -->
                </div>
                <!-- End .col-lg-8-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>


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


                                </tbody>
                            </table>
                        </div>
                        <!-- .cart-table end-->
                    </div>
                    <!-- End .col-lg-12-->
                    <div class="col-12">
                        <div class="cart-product-action">
                            <form class="form-inline">
                                <input class="form-control" id="coupon" type="text" placeholder="Coupon Code">
                                <button class="btn btn--secondary justify-content-center" type="submit">Apply Coupon
                                </button>
                            </form>
                            <div><a class="btn btn--secondary justify-content-center" href="#">update cart</a><a
                                    class="btn btn--secondary justify-content-center" href="#">Checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            // Setup CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Fetch and render the initial state of the cart
            fetchCart();

            function fetchCart() {
                $.ajax({
                    url: '/cart/data',  // Ensure this URL correctly points to your server method that returns cart data
                    type: 'GET',
                    success: function (cartItems) {
                        renderCart(cartItems);
                    },
                    error: function () {
                        console.error('Failed to fetch cart data.');
                        alert('Could not fetch cart data. Please try again.');
                    }
                });
            }

            function renderCart(cartItems) {
                const $cartBody = $('.table tbody');
                $cartBody.empty(); // Clear existing cart entries

                cartItems.forEach(item => {
                    const itemHtml = `
                <tr class="cart-product">
                    <td class="cart-product-item">
                        <div class="cart-product-remove"><img class="w-75" src="${item.image}" alt="icon"></div>
                        <div class="cart-product-img"><img src="${item.image}" alt="product"></div>
                        <div class="cart-product-name"><h6>${item.name}</h6></div>
                    </td>
                    <td class="cart-product-price">$ ${item.price.toFixed(2)}</td>

                   <td class="cart-product-quantity product-action" data-product-id="${item.product_id}">
                          <div class="product-quantity">
                            <input class="pro-qunt" type="number" id="quantity-${item.product_id}" value="${item.quantity}" data-max="10" data-min="1" data-step="1">
                          </div>
                    </td>

                    <td class="cart-product-total">$ ${(item.price * item.quantity).toFixed(2)}</td>
                </tr>
            `;
                    $cartBody.append(itemHtml);
                });
            }

            $('body').on('input', '.pro-qunt', function () {
                var productId = $(this).closest('.product-action').data('product-id');
                var newQuantity = $(this).val();
                var action = 'update'; // Define 'update' as the default action for quantity changes

                updateCart(productId, newQuantity, action);
            });

            $('body').on('click', '.toggle-cart', function (event) {
                event.preventDefault();
                var productId = $(this).data('product-id');
                var action = $(this).data('action'); // 'add' or 'remove'
                var quantity = $('#quantity-' + productId).val(); // Get the current quantity from the input

                updateCart(productId, quantity, action);
            });

            $('body').on('change', '.pro-qunt', function() {
                var quantity = parseInt($(this).val(), 10);
                if (quantity < 1) {
                    $(this).val(1); // Reset to 1 if the value is less than 1
                    updateCart($(this).closest('.product-action').data('product-id'), 1, 'update');
                } else {
                    updateCart($(this).closest('.product-action').data('product-id'), quantity, 'update');
                }
            });

            function updateCart(productId, quantity, action) {
                var toggleButton = $('.toggle-cart[data-product-id="' + productId + '"]');
                toggleButton.prop('disabled', true).text('Processing...');

                $.ajax({
                    url: '/cart/update', // This URL should point to your server method for updating the cart
                    type: 'POST',
                    data: {
                        product_id: productId,
                        quantity: quantity,
                        action: action
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            if (action === 'add') {
                                toggleButton.text('Remove Product').data('action', 'remove');
                            } else if (action === 'remove') {
                                toggleButton.text('Add to Cart').data('action', 'add');
                                $('#quantity-' + productId).val(1);  // Reset quantity
                            }
                            fetchCart();  // Refresh the cart to reflect the changes
                        } else {
                            toggleButton.text(action === 'add' ? 'Add to Cart' : 'Remove Product');
                            alert('Error: ' + response.message);
                        }
                        toggleButton.prop('disabled', false);
                    },
                    error: function (xhr) {
                        toggleButton.prop('disabled', false).text(action === 'add' ? 'Add to Cart' : 'Remove Product');
                        alert('Failed to update the cart. Please try again. Error: ' + xhr.responseText);
                    }
                });
            }
        });


    </script>
@endsection
