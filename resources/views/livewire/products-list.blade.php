<div>

    <div style="margin-top: 10px;" class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input wire:model.live="search" type="text" class="form-control" placeholder="Search products...">
                </div>
            </div>

            <div class="col-md-4">
                <select wire:model="selectedStatus" class="form-control mb-3">
                    <option value="">Select Status</option>
                    <option value="in_stock">In Stock</option>
                    <option value="out_of_stock">Out of Stock</option>
                </select>
            </div>

            <div class="col-md-4">
                <select wire:model="selectedCategory" class="form-control mb-3">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <section style="margin-top: -45px;" class="shop" id="shop">
        <div class="container-fluid">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="product-item" data-hover="">
                            <div class="product-img-wrap">
                                <div class="product-img">
                                    <img style="height: 250px;" src="{{ asset($product->image) }}" alt="Product"/>
                                    <!-- Modal Trigger Button -->
                                    <button type="button" wire:click="openModal({{ $product->id }})"
                                            class="add-to-cart btn btn-primary">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </button>
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
    <!-- Livewire Managed Modal -->
    @if ($modalProduct)
        <div class="modal fade show" tabindex="-1" style="display: block;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $modalProduct->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <div class="container single-product" id="single-product">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{ asset($modalProduct->image) }}" alt="product image">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h3>{{ $modalProduct->name }}</h3>
                                        </div>
                                        <div class="product-price">
                                            <span>${{ $modalProduct->customer_price }}</span>
                                        </div>
                                        <div class="product-desc">
                                            <p>{!! $modalProduct->description ?? 'No description available.' !!}  </p>
                                            <p>@if($modalProduct->cost_per_unit == 1){{'This Product Is Charged per unit'}} @endif</p>
                                        </div>
                                        <div class="product-action">

                                            <br/>
                                            <br/>
                                            <div class="product-quantity">
                                                <input wire:model="quantities.{{ $modalProduct->id }}" wire:change="updateCartQuantity({{ $modalProduct->id }}, $event.target.value)"
                                                       type="number" name="quantity" id="quantity-{{ $modalProduct->id }}" min="1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" wire:click="closeModal">
                          Close
                        </button>
                        <button type="button" wire:click="addToCart({{ $modalProduct->id }})"
                                class="btn {{ array_key_exists($modalProduct->id, $cart) ? 'btn-danger' : 'btn-primary' }}">
                            {{ array_key_exists($modalProduct->id, $cart) ? 'Remove from' : 'Add to'}} <i class="fas fa-shopping-cart"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif

    <div style="margin-bottom: 20px;margin-top: -20px;" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! $products->links() !!}
            </div>
        </div>
    </div>
</div>
