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
                    <div class="col-9 col-xl-9">
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
                                                        <th class="sort border-top ps-3" data-sort="name">Name</th>
                                                        <th class="sort border-top" data-sort="type">Category Type</th>
                                                        <th class="border-top">Action
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="list">
                                                    @foreach($categories as $category)
                                                        <tr>
                                                            <td class="align-middle ps-3 ">{{$category->id}}</td>
                                                            <td class="align-middle ps-3 ">{{$category->name}}</td>
                                                            <td class="align-middle ps-3">{{$category->description ?? ''}}</td>

                                                            <td class="align-middle ps-3">
                                                                <!-- Edit Button -->
                                                                <a style="display: inline-block;" href="javascript:void(0);"
                                                                   class="edit-button btn btn-outline-primary btn-sm me-1 mb-1"
                                                                   data-name="{{ $category->name }}"
                                                                   data-description="{{ $category->description }}"
                                                                   data-slug="{{ $category->slug }}" title="Edit">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <!-- Delete Button -->
                                                                <form
                                                                    action="{{ route('product-categories.destroy', $category->slug) }}"
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

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-xl-3">
                        <div class="mb-9">
                            <div class="card shadow-none border border-300 my-4"
                                 data-component-card="data-component-card">
                                <div class="card-header p-4 border-bottom border-300 bg-soft">
                                    <div class="row g-3 justify-content-between align-items-center">
                                        <div class="col-12 col-md">
                                            <h4 class="text-900 mb-0" data-anchor="data-anchor">Add New Category</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-4 code-to-copy">
                                        <form id="edit-form" action="/admin/product-categories/store" method="post"
                                              enctype="multipart/form-data">
                                            <input type="hidden" name="_method" value="POST">
                                            @csrf
                                            <div class="mb-3">

                                                <label class="form-label" for="exampleFormControlInput">Category</label>
                                                <input class="form-control" name="name" id="name" type="text"
                                                       placeholder="Enter name"/>
                                            </div>
                                            <div class="mb-0">
                                                <label class="form-label" for="exampleTextarea">Description</label>
                                                <textarea name="description" class="form-control" id="description"
                                                          rows="4"></textarea>
                                            </div>

                                            <hr/>

                                            <div class="col-12">
                                                <div class="row ">
                                                    <div >
                                                        <button id="submit-button" class="btn btn-primary btn-sm w-100">Add New Category</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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

    <script>

    </script>

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

    <script>
        <!-- datatable js -->
        document.addEventListener("DOMContentLoaded", function () {
            $('#buttons-datatables').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'print', 'pdf']
            });
        });

        // Assuming you have jQuery available
        $(document).ready(function () {
            // Define the submit button
            var submitButton = $('#submit-button'); // Replace with your actual button ID or class
            submitButton.text('Add New');
            //on load by default name field to be empty
            $('#name').val('');

            // Click event for the edit button
            $('.edit-button').on('click', function () {
                var name = $(this).data('name');
                var description = $(this).data('description');
                var slug = $(this).data('slug');

                // Set form action for update, method to PATCH, and button text to Update
                $('#edit-form').attr('action', '/admin/product-categories/' + slug + '/update');
                $('input[name="_method"]').val('PATCH');
                submitButton.text('Update Product Category');
                // Populate the form for editing
                $('#name').val(name);
                $('#description').val(description);
                $('#card-title').text('Edit - ' + name + ' Product Category');
                $('#page-title').text('Edit - ' + name + ' Product Category');
            });

            // Click event for adding a new item
            $('#new-button').on('click', function () {
                // Clear the form, set action for creation, method to POST, and button text to Add New
                $('#edit-form').attr('action', '/admin/product-categoriess/store');
                $('input[name="_method"]').val('POST');
                submitButton.text('Add New');
                $('#name').val('');
                $('#card-title').text('Add Product Category');
                $('#page-title').text('Add New Product Category');
            });

            setTimeout(function() {
                $('.alert').fadeOut('slow', function() {
                    $(this).remove(); // Remove the alert from the DOM after fading out
                });
            }, 5000);
        });

    </script>

@endpush
