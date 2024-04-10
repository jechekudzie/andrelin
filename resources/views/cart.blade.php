@extends('layouts.website');

@push('head')
    <style>
        .project-content {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .vertical-center {
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime">Our Shop</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Projects Page Start -->
    <div class="our-projects">
        <div class="container" style="margin-bottom: 65px">
            <table style="width: 100%;" class="table table-condensed">
                <thead class="bg-neutral-50 border-b border-neutral-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                        Image
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                        Description
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                        Quantity
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                        Price
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                        Total
                    </th>
                    <th style="text-align: right"
                        class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-neutral-200" id="cartContainer">

                </tbody>
            </table>
            <div id="checkout" style="float: right; text-align: right">
                <div style="font-size: 14pt;  margin-top: 5px">
                    Subtotal: <span id="subtotal">$0.00</span>
                </div>
                <div style="font-size: 16pt; font-weight: bold; margin-top: 5px">
                    Grand Total: <span id="grandTotal">$0.00</span>
                </div>

                <div style="margin-top: 15px">
                    <form method="post" action="{{url('/cart-data')}}">
                        @csrf
                        <input type="hidden" id="cartData" name="cartData">
                        <button type="submit" class="btn btn-success">Proceed to Payment</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Our Projects Page End -->

@endsection

@push('scripts')

    <script>

        // Retrieve cart data from sessionStorage
        const cartData = sessionStorage.getItem('cart');

        // Parse cart data into an object
        const cart = JSON.parse(cartData);

        // Reference to the element where you want to display the cart items
        const cartContainer = document.getElementById('cartContainer');


        // Event listener for remove from cart button
        cartContainer.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-from-cart')) {
                const productId = event.target.dataset.id;
                // Remove item from cart object
                delete cart[productId];
                // Update sessionStorage with updated cart
                sessionStorage.setItem('cart', JSON.stringify(cart));
                // Re-render cart view
                renderCart();
            }
        });

        function updateTotals() {
            let subtotal = 0;
            Object.values(cart).forEach(product => {
                const quantity = parseInt(product.quantity);
                const price = parseFloat(product.customer_price);
                subtotal += quantity * price;
            });
            const grandTotal = subtotal;

            // Update subtotal and grand total on the page
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('grandTotal').textContent = `$${grandTotal.toFixed(2)}`;
        }

        // Function to handle quantity change
        function handleQuantityChange(event, productId) {
            const newQuantity = event.target.value;
            // Update the quantity in the cart
            cart[productId].quantity = newQuantity;
            // Update the sessionStorage with updated cart data
            sessionStorage.setItem('cart', JSON.stringify(cart));
            // Update the totals
            renderCart();
        }

        // Generate HTML for cart item with quantity input
        function generateCartItemHTML(product) {
            return `
        <tr class="cart-item">
            <td class="vertical-center"><img class="img-thumbnail" style="width: 200px; padding: 5px" src="${product.image}"></td>
            <td class="vertical-center">${product.name}</td>
            <td class="vertical-center">${product.description}</td>
            <td class="vertical-center" style="width: 35px"><input class="form-control" type="number" value="${product.quantity}" onchange="handleQuantityChange(event, '${product.id}')"></td>
            <td class="vertical-center">$${product.customer_price}</td>
            <td class="vertical-center">$${(product.quantity * parseFloat(product.customer_price)).toFixed(2)}</td>
            <td class="vertical-center" style="text-align: right"><button class="remove-from-cart btn btn-danger" data-id="${product.id}">Remove</button></td>
        </tr>
    `;
        }

        // Function to render cart view
        function renderCart() {
            // Clear previous cart items
            cartContainer.innerHTML = '';

            // Check if cart is not empty
            if (cart) {
                // Iterate over each item in the cart and generate HTML
                Object.values(cart).forEach(product => {
                    // Generate HTML for each cart item
                    const cartItemHTML = generateCartItemHTML(product);
                    // Append cart item HTML to cart container
                    cartContainer.innerHTML += cartItemHTML;
                });
            }

            // Update the totals
            updateTotals();
            const cartData = sessionStorage.getItem('cart');
            $('#cartData').val(cartData);


        }

        // Call renderCart function to initially render the cart view
        renderCart();


    </script>

@endpush
