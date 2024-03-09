@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/choices.css') }}" />
@endpush

@section('title', 'Admin Dashboard')

@section('content')
    <div class="col-8 col-xl-8">
        @if(session()->has('errors'))
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <!-- Success Alert -->
                    <div class="alert alert-outline-danger d-flex align-items-center" role="alert">
                        <span class="fas fa-times-circle text-danger fs-3 me-3"></span>
                        <p class="mb-0 flex-1"> {{ $error }}!</p>

                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                    </div>
                @endforeach

            @endif
        @endif
        @if(session('success'))
            <div class="alert alert-outline-success d-flex align-items-center" role="alert">
                <span class="fas fa-check-circle text-success fs-3 me-3"></span>
                <p class="mb-0 flex-1"> {{ session('success') }}</p>

                <button class="btn-close" type="button" data-bs-dismiss="alert"
                        aria-label="Close"></button>
            </div>
        @endif
    </div>

    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Products</h2>
            </div>
        </div>
        <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="d-flex flex-wrap gap-3">
                    <!-- Search box -->
                    <div class="search-box">
                        <form class="position-relative">
                            <input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div>
                    <!-- Export and Add Product Buttons -->
                    <div class="ms-xxl-auto">
                        <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button>
                        <a href="{{route('products.create')}}" class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</a>
                    </div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0">
                        <thead>
                        <tr>
                            <th class="align-middle fs--2" scope="col" style="width:70px;">IMAGE</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="product">PRODUCT</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="product">CATEGORY</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="customer_price">CUSTOMER PRICE</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="dealer_price">DEALER PRICE</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="category">AVAILABLE IN</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="vendor">ON-DISCOUNT</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="time">DISCOUNT %</th>
                            <th class="align-middle pe-0 ps-4" scope="col">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">
                        @foreach ($products as $product)
                            <tr class="position-static">
                                <td class="align-middle">
                                    <!-- Product Image -->
                                    <a class="d-block border rounded-2" href="#!">
                                        <img src="{{ asset($product->image)  }}" alt="Product Image" width="53" />
                                    </a>
                                </td>
                                <td class="product align-middle ps-4">{{ $product->name }}</td>
                                <td class="category align-middle ps-4">{{ $product->category->name }}</td>
                                <td class="customer_price align-middle ps-4 ">${{ $product->customer_price }}</td>
                                <td class="dealer_price align-middle ps-4">${{ $product->dealer_price }}</td>
                                <td class="align-middle ps-4">
                                    <!-- Shops Available In -->
                                    @foreach ($product->shops as $shop)
                                        <span class="badge badge-tag me-2 mb-2">{{ $shop->name }}</span>
                                    @endforeach
                                </td>
                                <td class="align-middle ps-4">{{ $product->on_discount ? 'Yes' : 'No' }}</td>
                                <td class="align-middle ps-4">{{ $product->on_discount ? $product->discount_percentage . '%' : 'N/A' }}</td>
                                <td class="align-middle text-end pe-0 ps-4">
                                    <!-- Actions Dropdown -->
                                    <a style="display: inline-block;" class="btn btn-outline-primary btn-sm me-1 mb-1" href="{{route('products.edit',$product->slug)}}" title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <!-- Delete Button -->
                                    <form
                                        action="{{ route('products.destroy', $product->slug) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure?');"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-outline-danger btn-sm me-1 mb-1"
                                                title="Delete">
                                            <i class="fa fa-trash"> </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- Pagination -->
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                        <!-- Pagination and View controls -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')

    <!-- TinyMCE Editor -->

    <script src="{{ asset('vendors/tinymce/tinymce.min.js') }}"></script>
    <script>

            $(document).ready(function() {
                setTimeout(function() {
                    $('.alert').fadeOut('slow', function() {
                        $(this).remove(); // Remove the alert from the DOM after fading out
                    });
                }, 5000);
            });



    </script>

@endpush
