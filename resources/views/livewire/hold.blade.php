<div>
    <section class="shop" id="shop">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="product-item" data-hover="">
                            <div class="product-img-wrap">
                                <div class="product-img">
                                    <img style="height: 250px;" src="{{ asset($product->image) }}"
                                         alt="Product"/>
                                    <!-- Modal Trigger Button -->
                                    <button type="button" wire:click="openModal({{ $product->id }})"
                                            data-bs-toggle="modal"
                                            data-bs-target="#productModal-{{ $product->id }}"
                                            class="add-to-cart btn btn-primary">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
                                    <span class="badge d-none"></span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-title">
                                    <a style="font-size: 15px;" href="#">{{ $product->name }}</a>
                                </div>
                                <div class="product-price">
                                    <span>${{ $product->customer_price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
</div>

<!-- Modal with Dynamic Content -->
<div class="modal fade" id="productModal-{{ $product->id }}" data-bs-backdrop="static"
     data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $product->name }}</h5>
                <div>
                    <div id="messageContainer"></div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <div class="container single-product" id="single-product">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="product-img">
                                    <img class="img-fluid"
                                         src="{{ asset($product->image) }}"
                                         alt="product image">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h3>{{ $product->name }}</h3>
                                    </div>
                                    <div class="product-price">
                                        <span>${{ $product->customer_price }}</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>Description</p>
                                    </div>
                                    <div class="product-action">
                                        <div class="product-quantity">
                                            <input wire:model="quantity" type="number" name="quantity" id="quantity" value="1" min="1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm"
                        data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
