@extends('layouts.admin')

@push('head')

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush

@section('content')

    <div class="pb-5">
        <div class="row g-4">
            <div class="col-12 col-xxl-12">
                <div class="mb-8">
                    <h2 class="mb-2">Andrelin Enterprises - Product Categories</h2>

                </div>
                <div class="col-auto">
                    <a class="btn btn-primary px-5" href="{{route('product-categories.index')}}">
                        <i class="fa-solid fa-plus me-2"></i>
                        Refresh
                    </a>
                </div>

                <br/>
                <div id="messageContainer"></div>
                <div id="errorContainer"></div>
                <!-- Start custom content -->
                <div class="row g-4">
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
                    <div class="col-12 col-xl-12">
                        <div class="mb-9">
                            <div class="card shadow-none border border-300 my-4"
                                 data-component-card="data-component-card">
                                <div class="card-header p-4 border-bottom border-300 bg-soft">
                                    <div class="row g-3 justify-content-between align-items-center">
                                        <div class="col-12 col-md">
                                            <h4 class="text-900 mb-0 card-title" data-anchor="data-anchor">Andrelin
                                                Enterprises - Product Categories </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-4 code-to-copy">
                                        <div>
                                            <div class="table-responsive">
                                                <table id="buttons-datatables"
                                                       class="table table-striped flex-wrap table-sm fs--1 mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th class="sort border-top ps-3" data-sort="id">Id</th>
                                                        <th class="sort border-top ps-3" data-sort="name">Image</th>
                                                        <th class="sort border-top ps-3" data-sort="name">Product</th>
                                                        <th class="sort border-top ps-3" data-sort="name">Category</th>
                                                        <th class="sort border-top ps-3" data-sort="name">Customer Price</th>
                                                        <th class="sort border-top ps-3" data-sort="name">Dealer Price
                                                        </th>
                                                        <th class="sort border-top ps-3" data-sort="name">In-Stock</th>
                                                        <th class="sort border-top ps-3" data-sort="name">Re-Order
                                                            level
                                                        </th>
                                                        <th class="border-top">Action
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="list">
                                                    @foreach($products as $product)
                                                        <tr>
                                                            <td class="align-middle ps-3 ">{{$product->id}}</td>
                                                            <td>
                                                                <!-- Product Image -->
                                                                <a class="d-block border rounded-2" href="#!">
                                                                    <img src="{{ asset($product->image)  }}"
                                                                         alt="Product Image" width="53"/>
                                                                </a>
                                                            </td>
                                                            <td class="align-middle ps-3 ">{{$product->name}}</td>
                                                            <td class="align-middle ps-3">{{$product->category->name ?? ''}}</td>
                                                            <td class="align-middle ps-3 ">{{$product->customer_price}}</td>
                                                            <td class="align-middle ps-3 ">{{$product->dealer_price}}</td>
                                                            <td class="align-middle ps-3 ">
                                                                {{$product->inventoryBatches->sum('quantity_available')}}
                                                            </td>

                                                            <td class="align-middle ps-3 ">
                                                                @if($product->stockTracking)
                                                                    {{$product->stockTracking->reorder_level_value}}
                                                                @endif
                                                            </td>
                                                            <td class="align-middle ps-3">
                                                                <!-- Edit Button -->
                                                                <a style="display: inline-block;"
                                                                   href="{{route('stock.create', $product->slug)}}"
                                                                   class="edit-button btn btn-outline-primary btn-sm me-1 mb-1" title="Edit">
                                                                    <i class="fa fa-gear"></i> Manage Stock
                                                                </a>
                                                                <!-- Delete Button -->
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end custom content -->

            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>

    <script>
        <!-- datatable js -->
        document.addEventListener("DOMContentLoaded", function () {
            $('#buttons-datatables').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'print', 'pdf']
            });
        });

    </script>

@endpush
