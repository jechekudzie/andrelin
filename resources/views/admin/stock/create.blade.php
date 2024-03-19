@extends('layouts.admin')

@push('head')

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <link href="{{asset('vendors/choices/choices.min.css')}}" rel="stylesheet"/>


    <style>
        #downward-chart {
            transform: rotate(180deg); /* Rotate the icon 180 degrees to face down */
            display: inline-block; /* This makes the transform property work */
        }
    </style>

@endpush

@section('title', $product->name . ' Inventory Records')


@section('content')

    <div class="pb-5">
        <div class="row g-4">
            <div class="col-12 col-xxl-12">
                <div class="mb-8">
                    <h2 class="mb-2">Andrelin Enterprises - {{$product->name}} Inventory Records</h2>

                </div>
                <div class="col-auto">
                    <a class="btn btn-primary px-5" href="{{route('stock.index',$product->slug)}}">
                        <i class="fa-solid fa-caret-left me-2"></i>
                        Back to Products
                    </a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#verticallyCentered"><i class="fa-solid fa-plus me-2"></i> Add New Batch
                        Stock
                    </button>

                    @if($product->inventoryBatches->count() > 0)
                        <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                data-bs-target="#stockTrack"><i class="fa-solid fa-plus me-2"></i> Update Stock Re-Order
                            Level
                        </button>
                    @endif

                </div>
                <div class="row justify-content-between p-5">
                    <div
                        class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 ">
                        <span class="uil fs-3 lh-1 fa-solid fa-cubes text-primary"></span>
                        <h1 class="fs-3 pt-3" id="stock_tracking_quantity_display"></h1>
                        <p class="fs--1 mb-0">Quantity Last Balance</p>
                    </div>

                    <div
                        class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 ">
                        <span class="uil fs-3 lh-1 fa-solid fa-check text-primary"></span>
                        <h1 class="fs-3 pt-3" id="quantity_available_display">0</h1>
                        <p class="fs--1 mb-0">Quantity Available</p>
                    </div>

                    <div
                        class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 ">
                        <span id="downward-chart" class="uil fs-3 lh-1 fa fa-line-chart text-primary"></span>
                        <h1 class="fs-3 pt-3" id="reorder_level_value_display">0</h1>
                        <p class="fs--1 mb-0">Threshold Number</p>
                    </div>
                    <div
                        class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end-md border-bottom pb-4 pb-xxl-0">
                        <span class="uil fs-3 lh-1 fa-solid fa-chart-line text-info"></span>
                        <h1 class="fs-3 pt-3" id="reorder_level_display">0 %</h1>
                        <p class="fs--1 mb-0">Re-order threshold</p>
                    </div>

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
                                                Enterprises - {{$product->name}} Inventory Records </h4>
                                            <input type="hidden" id="product-slug" value="{{$product->slug}}">

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
                                                        <th class="sort border-top ps-3" data-sort="name">Supplier</th>
                                                        <th class="sort border-top ps-3" data-sort="name">Batch Number
                                                        </th>
                                                        <th class="sort border-top ps-3" data-sort="name">Price Per
                                                            Unit
                                                        </th>
                                                        <th class="sort border-top ps-3" data-sort="name">Batch Cost
                                                        </th>
                                                        <th class="sort border-top ps-3" data-sort="name">
                                                            Ordered
                                                        </th>
                                                        <th class="sort border-top ps-3" data-sort="name">
                                                            Available
                                                        </th>
                                                        <th class="sort border-top ps-3" data-sort="name">
                                                            Active Batch
                                                        </th>

                                                        <th class="sort border-top ps-3" data-sort="name">Dated
                                                            Ordered
                                                        </th>
                                                        <th class="sort border-top ps-3" data-sort="name">Dated
                                                            Received
                                                        </th>

                                                        <th class="border-top">Action
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="list">
                                                    @foreach($product->inventoryBatches as $inveryBatch)
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
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->supplier->name}}</td>
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->batch_number}}</td>
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->cost_price_per_unit}}</td>
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->landing_cost}}</td>
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->quantity_ordered}}</td>
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->quantity_available}}</td>
                                                            <td class="align-middle ps-3 ">
                                                                @if($inveryBatch->is_active)
                                                                    <span class="badge bg-success">Yes</span>
                                                                @else
                                                                    <span class="badge bg-danger">No</span>
                                                                @endif
                                                            </td>
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->ordered_date}}</td>
                                                            <td class="align-middle ps-3 ">{{$inveryBatch->received_date}}</td>
                                                            <td class="align-middle ps-3">
                                                                <!-- Edit Button -->
                                                                <a style="display: inline-block;"
                                                                   href="javascript:void(0);"
                                                                   class="edit-button btn btn-outline-primary btn-sm me-1 mb-1"
                                                                   title="Edit">
                                                                    <i class="fa fa-pencil"></i> Edit
                                                                </a>
                                                                <!-- Delete Button -->
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                                <div class="modal fade" id="verticallyCentered" tabindex="-1"
                                                     aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true"
                                                     style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="verticallyCenteredModalLabel">Add New Stock
                                                                    For {{$product->name}}</h5>
                                                                <button class="btn p-1" type="button"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    <svg class="svg-inline--fa fa-xmark fs--1"
                                                                         aria-hidden="true" focusable="false"
                                                                         data-prefix="fas" data-icon="xmark" role="img"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 320 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                              d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path>
                                                                    </svg>
                                                                    <!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com -->
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form action="{{route('stock.store',$product->slug)}}"
                                                                      method="POST" class="row g-3">
                                                                    @csrf <!-- Include this for Laravel's CSRF protection -->

                                                                    <div class="col-md-3">
                                                                        <label for="supplier_id" class="form-label">Supplier:</label>
                                                                        <select class="form-select" id="supplier_id"
                                                                                name="supplier_id"
                                                                                data-choices="data-choices"
                                                                                data-options='{"removeItemButton":true,"placeholder":true}'
                                                                                required>
                                                                            <!-- Populate with options -->
                                                                            <option value="">Select Supplier</option>
                                                                            @foreach($suppliers as $supplier)
                                                                                <option
                                                                                    value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>


                                                                    <div class="col-md-3">
                                                                        <label for="quantity_available"
                                                                               class="form-label">Quantity
                                                                            Available:</label>
                                                                        <input type="number" id="quantity_available"
                                                                               name="quantity_available"
                                                                               class="form-control">
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="quantity_ordered"
                                                                               class="form-label">Quantity
                                                                            Ordered:</label>
                                                                        <input type="number" id="quantity_ordered"
                                                                               name="quantity_ordered"
                                                                               class="form-control" value="0" required>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="is_active" class="form-label">Is
                                                                            Active:</label>
                                                                        <select name="is_active" id="is_active" class="form-select">
                                                                            <option value="1">Yes</option>

                                                                        </select>
                                                                    </div>


                                                                    <div class="col-md-3">
                                                                        <label for="ordered_date" class="form-label">Ordered
                                                                            Date:</label>
                                                                        <input type="date" id="ordered_date"
                                                                               name="ordered_date" class="form-control">
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="received_date" class="form-label">Received
                                                                            Date:</label>
                                                                        <input type="date" id="received_date"
                                                                               name="received_date"
                                                                               class="form-control">
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="cost_price_per_unit"
                                                                               class="form-label">Cost Price Per
                                                                            Unit:</label>
                                                                        <input type="number" step="any"
                                                                               id="cost_price_per_unit"
                                                                               name="cost_price_per_unit"
                                                                               class="form-control" required>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="landing_cost" class="form-label">Landing
                                                                            Cost:</label>
                                                                        <input type="number" step="any"
                                                                               id="landing_cost"
                                                                               name="landing_cost" class="form-control"
                                                                               required>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </form>


                                                            </div>
                                                            <div class="modal-footer">
                                                                {{--<button class="btn btn-primary" type="button">Okay</button>--}}
                                                                <button class="btn btn-outline-primary" type="button"
                                                                        data-bs-dismiss="modal">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="stockTrack" tabindex="-1"
                                                     aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true"
                                                     style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="verticallyCenteredModalLabel">Update Stock
                                                                    Re-Order Level
                                                                    For {{$product->name}}</h5>
                                                                <button class="btn p-1" type="button"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                    <svg class="svg-inline--fa fa-xmark fs--1"
                                                                         aria-hidden="true" focusable="false"
                                                                         data-prefix="fas" data-icon="xmark" role="img"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 320 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                              d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path>
                                                                    </svg>
                                                                    <!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com -->
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form
                                                                    action="{{route('stock.track.update',$product->slug)}}"
                                                                    method="POST" class="row g-3">
                                                                    @method('PATCH')
                                                                    @csrf <!-- Include this for Laravel's CSRF protection -->

                                                                    <div class="col-md-3">
                                                                        <label for="quantity-available-field'"
                                                                               class="form-label">Quantity
                                                                            Available:</label>
                                                                        <input type="number"
                                                                               id="quantity_available_field"
                                                                               name="quantity_available"
                                                                               class="form-control">
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="reorder_level"
                                                                               class="form-label">Re-order level % of
                                                                            Quantity Available:</label>
                                                                        <input type="number" id="reorder_level_field"
                                                                               name="reorder_level"
                                                                               class="form-control" value="" required>
                                                                    </div>


                                                                    <div class="col-12">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Update Stock Re-order level
                                                                        </button>
                                                                    </div>
                                                                </form>


                                                            </div>
                                                            <div class="modal-footer">
                                                                {{--<button class="btn btn-primary" type="button">Okay</button>--}}
                                                                <button class="btn btn-outline-primary" type="button"
                                                                        data-bs-dismiss="modal">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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

    <script src="{{asset('assets/js/crm-dashboard.js')}}"></script>
    <script>
        <!-- datatable js -->
        document.addEventListener("DOMContentLoaded", function () {
            $('#buttons-datatables').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'print', 'pdf']
            });
        });

        // Fade out alerts after 5 seconds
        setTimeout(function () {
            $('.alert').fadeOut('slow', function () {
                $(this).remove();
            });
        }, 5000);


    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var productSlug = document.getElementById('product-slug').value;
            var url = `/admin/stock/${productSlug}/track`;

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Set the value of the input field
                    document.getElementById('quantity_available_field').value = data.quantity_available;
                    document.getElementById('reorder_level_field').value = data.reorder_level;

                    // Also update the text content of the 'quantity-available-display' element
                    document.getElementById('stock_tracking_quantity_display').textContent = data.stock_tracking_quantity;
                    document.getElementById('quantity_available_display').textContent = data.quantity_available;
                    document.getElementById('reorder_level_display').textContent = data.reorder_level + '%';
                    document.getElementById('reorder_level_value_display').textContent = data.reorder_level_value;

                })
                .catch(error => {
                    console.error('Error fetching quantity available:', error);
                });
        });

    </script>


    <script src="{{asset('vendors/choices/choices.min.js')}}"></script>

@endpush
