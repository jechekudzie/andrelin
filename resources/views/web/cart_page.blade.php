@extends('layouts.web')

@push('styles')
    <!-- Include Bootstrap CSS -->

@endpush
@section('content')

    <section class="page-title page-title-blank bg-white" id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="d-none">High Efficiency Solar Cells For Manufacturers</h3>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="">shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </div>
                    <!-- End .title -->
                </div>
                <!-- End .col-lg-8-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>


   @livewire('cart-page')


@endsection
@push('scripts')

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    //make alert disappear in 5 seconds
    setTimeout(function() {
        $('.alert-dismissible').fadeOut('fast');
    }, 5000); // <-- time in milliseconds
</script>
@endpush
