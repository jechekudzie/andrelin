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

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #f8f8f8;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        img {
            border-radius: 5px;
        }
    </style>

@endpush

@section('content')
    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime">Checkout</h1>
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


    <div class="container my-5">


        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <h2 class="text-center mb-4">Review Your Order & Complete Checkout</h2>
                <hr/>
                <a href="{{url('/cart')}}" class="btn btn-info btn-sm btn-block mb-4"> <i
                        class="fa fa-shopping-cart"></i>
                    Back To Cart</a>
                <a href="{{url('/shop')}}" class="btn btn-info btn-sm btn-block mb-4"> <i
                        class="fa fa-shopping-bag"></i>
                    Add More Products</a>

                <!-- Customer Information Form -->
                @if (!Auth::check())
                    <div id="customerInformationForm">
                        <form action="{{route('cart-checkout.register')}}" method="post">
                            @csrf <!-- Include CSRF Token -->
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Full Name" required="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                           required="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"
                                           required="">
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <input type="password" name="password" class="form-control" id="password"
                                           placeholder="Enter Password"
                                           required="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" name="address" class="form-control" id="address"
                                           placeholder="Billing Address">
                                </div>
                                <!-- Customer or Dealer -->
                                <div class="form-group col-md-6 mb-3">
                                    <select class="form-select" name="customer_type" id="customer_type" required="">
                                        <option value="">Select Customer Type</option>
                                        <option value="customer">General Customer</option>
                                        <option value="dealer">Installer</option>
                                    </select>
                                </div>
                                <br/>
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-warning btn-block">Register</button>

                            </div>
                        </form>
                    </div>
                @else
                    <div class="user-info mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Welcome back, {{ Auth::user()->name }}!</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->email }}</h6>
                                <h6 style="font-weight: bold;" class="card-subtitle mb-2 text-black"><span
                                        class="btn btn-warning btn-sm">{{Auth::user()->roles->first()->name ?? 'Default Name'}}</span>
                                </h6>

                                <p class="card-text">Your details are already filled in for your convenience. Feel free

                                    to review your order and proceed with the checkout.</p>
                                <a href="{{ route('cart-checkout.logout') }}" class="card-link"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </div>
                        </div>
                    </div>

                    <form id="logout-form" action="{{ route('cart-checkout.logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                        <input type="hidden" id="cartData" name="cartData">
                    </form>
                @endif

                @if (!Auth::check())
                    <!-- Login Modal Trigger -->
                    <div class="text-center">
                        Existing customer? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Click here to
                            login</a>
                    </div>
                @endif

                <!-- Order Summary & Cart Modal Trigger -->
                <div class="order-summary mt-4 mb-4">
                    <h4>Order Summary</h4>
                    @if(auth()->check() && auth()->user()->hasRole('dealer'))
                        <!-- If the user is logged in and has the 'dealer' role -->
                        <p style="color: black">Total Amount: <strong>${{ number_format($totalDealer, 2) }}</strong></p>
                    @else
                        <!-- If the user is not logged in, or doesn't have the 'dealer' role (defaulting to 'customer') -->
                        <p style="color: black">Total Amount: <strong>${{ number_format($totalCustomer, 2) }}</strong>
                        </p>
                    @endif


                    <button type="button" class="btn btn-info btn-sm btn-block" data-bs-toggle="modal"
                            data-bs-target="#cartModal">
                        <i class="fa fa-shopping-cart"></i>
                        View Cart Items
                    </button>
                    @if(auth()->check() && auth()->user())
                        <button type="submit" class="btn btn-warning btn-sm btn-block">Generate Quote</button>
                        <button type="submit" class="btn btn-danger btn-sm btn-block">Place Order</button>
                         </div>


                <!-- Submit Button -->
                <div class="order-summary mt-4 mb-4">
                    <form method="post" action="{{route('initiate-payment')}}">
                        @csrf
                        <input type="hidden" name="amount"
                               value="{{ (auth()->check() && auth()->user()->hasRole('dealer')) ? $totalDealer : $totalCustomer }}">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Pay Now</button>
                    </form>

                </div>

                @endif
            </div>
        </div>
    </div>

    <!-- Login Modal -->


    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Log In</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{url('cart-checkout/login')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="loginEmail">Email Address</label>
                            <input type="email" name="email" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="loginPassword" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cart Items</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                                Image
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                                Name
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
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($cart as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 50px;">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $product->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $product->quantity }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if(auth()->check() && auth()->user()->hasRole('dealer'))
                                        ${{ number_format($product->dealer_price, 2) }}
                                    @else
                                        ${{ number_format($product->customer_price, 2) }}
                                    @endif

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if(auth()->check() && auth()->user()->hasRole('dealer'))
                                        ${{ number_format($product->quantity * $product->dealer_price, 2) }}
                                    @else
                                        ${{ number_format($product->quantity * $product->customer_price, 2) }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

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
            <td class="vertical-center" style="width: 35px"><input type="number" value="${product.quantity}" onchange="handleQuantityChange(event, '${product.id}')"></td>
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
