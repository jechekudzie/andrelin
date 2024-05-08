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
    <form class="mb-9" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add a Service</h2>
                <h5 class="text-700 fw-semi-bold">Fill in the details below to add a new product</h5>
            </div>
            <div class="col-auto">
                <a href="{{route('products.index')}}" class="btn btn-primary mb-2 mb-sm-0" type="submit"><i class="fa-solid fa-caret-left me-2"></i> Back</a>
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit"><i class="fa-solid fa-plus me-2"></i> Publish Service</button>
            </div>

        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="mb-3">
                    <label for="productName" class="form-label"><h4 class="mb-3">Service Name</h4></label>
                    <input class="form-control mb-5" id="productName" type="text" name="name" placeholder="Service name..." required>
                </div>

                <div class="mb-3">
                    <label for="productImage" class="form-label">
                        <h4 class="mb-3">Service Image</h4>
                    </label>
                    <input class="form-control mb-5" id="productImage" type="file" name="image">
                </div>

                <div class="mb-3">
                    <label for="productDescription" class="form-label"><h4 class="mb-3">Service Description</h4></label>
                    <textarea class="tinymce" name="description" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'></textarea>
                </div>
            </div>

        </div>
    </form>

@endsection

@push('scripts')

    <!-- TinyMCE Editor -->

    <script src="{{ asset('vendors/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            $('#on_discount').change(function () {
                if (this.checked) {
                    // When checked, show the discount field and disable the hidden input
                    $('#discount-field').show();
                    $('input[type="hidden"][name="on_discount"]').prop('disabled', true);
                } else {
                    // When unchecked, hide the discount field, clear the discount input, and enable the hidden input
                    $('#discount-field').hide();
                    $('#discount').val('');
                    $('input[type="hidden"][name="on_discount"]').prop('disabled', false);
                }
            });

            // Optionally, trigger the change event on page load in case the checkbox is pre-checked (e.g., during edit)
            $('#on_discount').trigger('change');

            setTimeout(function() {
                $('.alert').fadeOut('slow', function() {
                    $(this).remove(); // Remove the alert from the DOM after fading out
                });
            }, 5000);
        });

    </script>

@endpush
