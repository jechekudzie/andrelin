@extends('layouts.website');

@push('head ')
    <style>
        .product_view .modal-dialog {
            max-width: 800px;
            width: 100%;
        }

        .pre-cost {
            text-decoration: line-through;
            color: #a5a5a5;
        }

        .space-ten {
            padding: 10px 0;
        }

        #popupImage {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
@endpush

@section('content')

    <!-- Page Header Start -->

    {{--<div class="page-header background-image: url(&quot;https://placehold.co/1920/1080/red?text=Andrelin&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 16.2844px;">--}}
    <div class="page-header" style="background-image: url('1.png');
background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 16.2844px;"
    >
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

    <div class="contact-form wow fadeInUp my-5">
        <div class="container">
            <form>
                <div class="row">
                    <div class="form-group col-md-3">
                        <input type="text" id="searchBox" name="filter" class="form-control" placeholder="Search Items"
                               required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- HTML -->
                    <div class="form-group col-md-3">
                        <select class="form-control" id="shopFilter">
                            <option value="">Select Shop</option>
                            @foreach($shops as $shop)
                                <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <select class="form-control" id="categoryFilter">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <select class="form-control" id="priceRangeFilter">
                            <option value="">All</option>
                            @foreach($priceRanges as $range)
                                <option value="{{ $range }}">{{ $range }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- Our Projects Page Start -->
    <div class="our-projects" style="padding: 0px 0px 50px">
        <div class="container">
            <div class="row" id="productList">
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Post Pagination Start -->
                    <div class="post-pagination wow fadeInUp" data-wow-delay="1.5s">
                        <ul class="pagination" id="pagination"></ul>
                    </div>
                    <!-- Post Pagination End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Our Projects Page End -->

    <div class="modal modal-lg fade product_view" id="product_view">
        <div class="modal-dialog" style="width: 60%">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"></h3>
                    <a href="#" data-dismiss="modal" class="class pull-right"><span
                            class="glyphicon glyphicon-remove">X</span></a>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding: 5px">
                        <div style="border-radius: 10px;" class="col-md-6 product_img" id="popupImage">
                        </div>
                        <div class="col-md-6 product_content">
                            <h4>Product Id: <span></span></h4>
                            <p class="descripto"></p>
                            <h3 class="cost"><span class="glyphicon glyphicon-usd"></span></h3>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <input type="number" class="form-control" value="1" name="quantity">
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="space-ten"></div>
                            <div class="btn-ground row" style="padding: 10px">
                                <button id="popAddToCart" type="button" class="btn btn-primary p-2"><span
                                        class="glyphicon glyphicon-shopping-cart"></span> Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            const productList = $('#productList');
            const pagination = $('#pagination');
            const productsPerPage = 8;
            let currentPage = 1;

            // Function to render products for a specific page
            function renderProductsForPage(products, page) {
                const startIndex = (page - 1) * productsPerPage;
                const endIndex = startIndex + productsPerPage;
                const productsForPage = products.slice(startIndex, endIndex);

                productList.empty();
                productsForPage.forEach(function (product) {
                    //set quantity to product object as 1
                    product.quantity = 1;
                    productList.append(`
                    <div class="col-lg-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="project-image">
                            <figure>
                                <img src="` + product.image + `" alt="">
                            </figure>
                        </div>

                        <div class="project-content">
                            <h2><a href="#">` + product.name + `</a></h2>
                            $` + product.customer_price + `
                        </div>
                        <div class="project-link">
                            <a style="margin: 4px; height: 35px; width: 35px" class="quickView" data-product='${JSON.stringify(product)}' data-id="` + product.id + `"href="#"><img style="width: 50%" src="website/images/add-to-cart.png" alt=""></a>
                            <a style="margin: 4px; height: 35px; width: 35px" class="addToCart" id="linkme` + product.id + `" data-product='${JSON.stringify(product)}' data-id="` + product.id + `"href="#"><img style="width: 50%" src="website/images/add-to-cart.png" alt=""></a>
                        </div>
                        </div>
                        <!-- Project Item End -->
                    </div>
                    `);
                });
            }

            // Function to render pagination links
            function renderPagination(products) {
                pagination.empty();
                const totalPages = Math.ceil(products.length / productsPerPage);
                pagination.append('<li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>')
                for (let i = 1; i <= totalPages; i++) {
                    const liClass = (i === currentPage) ? 'active' : '';
                    pagination.append('<li class="' + liClass + '"><a href="#">' + i + '</a></li>');
                }
                pagination.append('<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>')
            }

            // Function to fetch and filter products
            function fetchAndFilterProducts(searchTerm = '', shopId = '', categoryId = '', priceRange = '') {
                // Modify the URL to include query parameters for filtering
                let url = '/api/products?search=' + searchTerm;
                if (shopId !== '') url += '&shop_id=' + shopId;
                if (categoryId !== '') url += '&category_id=' + categoryId;
                if (priceRange !== '') url += '&price_range=' + priceRange;

                $.ajax({
                    url: url,
                    method: 'GET',
                    dataType: 'json',
                    success: function (products) {
                        if (Array.isArray(products)) {
                            const filteredProducts = products.filter(function (product) {
                                return product.name.toLowerCase().includes(searchTerm.toLowerCase());
                            });
                            renderPagination(filteredProducts);
                            renderProductsForPage(filteredProducts, currentPage);
                        } else {
                            console.error('Error: Expected products to be an array but got', products);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching products:', error);
                    }
                });
            }

            // Initial fetching of products
            fetchAndFilterProducts();

            // Filter change event handlers
            $('#shopFilter, #categoryFilter, #priceRangeFilter').on('change', function () {
                const searchTerm = $('#searchBox').val().trim();
                const shopId = $('#shopFilter').val();
                const categoryId = $('#categoryFilter').val();
                const priceRange = $('#priceRangeFilter').val();
                fetchAndFilterProducts(searchTerm, shopId, categoryId, priceRange);
            });

            // Search box event handler
            $('#searchBox').on('input', function () {
                const searchTerm = $(this).val().trim();
                fetchAndFilterProducts(searchTerm);
            });

            // Pagination click event handler
            pagination.on('click', 'li', function () {
                currentPage = parseInt($(this).text());
                fetchAndFilterProducts($('#searchBox').val().trim());
            });

            // Function to handle adding/removing items from the cart
            function handleCartClick(product) {
                const cart = JSON.parse(sessionStorage.getItem('cart')) || {};
                const productId = product.id;

                if (cart[productId]) {
                    // If the product is already in the cart, remove it
                    delete cart[productId];
                    // Update button text to "Add to Cart"
                    $(`button[data-id="${productId}"]`).text('Add to Cart');
                    $('#linkme' + productId).css('background-color', '#89EA5F');
                } else {
                    // If the product is not in the cart, add it
                    cart[productId] = product;
                    // Update button text to "Remove from Cart"

                    //change background colour to red
                    $('#linkme' + productId).css('background-color', 'red');
                }
                // Update session storage with the updated cart
                sessionStorage.setItem('cart', JSON.stringify(cart));

                // Update cart count
                updateCartCount();
            }

            // Add event listener to handle "Add to Cart" button clicks
            $(document).on('click', '.addToCart', function (event) {
                event.preventDefault();
                const product = $(this).data('product');
                if (product) {
                    handleCartClick(product);
                }
            });

            // Event listener for Quick View button clicks
            $(document).on('click', '.quickView', function (event) {
                event.preventDefault();
                const product = $(this).data('product');
                if (product) {
                    // Populate the modal with the selected product's details
                    populateModal(product);
                    // Show the modal
                    $('#product_view').modal('show');
                }
            });

            // Function to populate the modal with product details
            function populateModal(product) {
                // Populate the modal content with the selected product's details
                $('#product_view .modal-title').text(product.name);
                $('#product_view .product_img').css('background-image', 'url("' + product.image + '")');
                $('#product_view .product_content h4 span').text(product.id);
                $('#product_view .descripto').text(product.description);
                $('#product_view .glyphicon-usd').text(product.customer_price);
            }


            // Function to update cart count
            function updateCartCount() {
                const cart = JSON.parse(sessionStorage.getItem('cart')) || {};
                const itemCount = Object.keys(cart).length;
                $('#cartCount').text('(' + itemCount + ')');
            }

            // Update cart count initially
            updateCartCount();
        });
    </script>
@endpush
