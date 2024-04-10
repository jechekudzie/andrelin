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


                <h2 class="text-center mb-4">Order Confirmation - REF: {{$payment->reference}}</h2>
                <hr/>
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
                                        <option value="customer">Customer</option>
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

                    <div class="card mt-3">
                        <div class="card-header bg-success text-white">
                            <i class="fas fa-check-circle"></i> Payment Successful
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Thank You for Your Purchase!</h5>
                            <p>Your payment has been processed successfully.</p>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Transaction ID: <strong>{{ $payment->reference }}</strong></li>
                                <li class="list-group-item">Total Paid: <strong>${{ number_format($payment->amount_paid, 2) }}</strong></li>
                                <li class="list-group-item">Payment Method: <strong>{{ $payment->paymentMethod->name }}</strong></li>
                            </ul>

                            <p class="mt-3">A detailed receipt has been sent to your email. If you have any questions, please contact our support team.</p>
                        </div>
                    </div>

            </div>
        </div>
    </div>

    <!-- Login Modal -->


@endsection

@push('scripts')

    <script>
        sessionStorage.removeItem('cart');

    </script>

@endpush
