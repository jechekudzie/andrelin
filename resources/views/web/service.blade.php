@extends('layouts.web')

@section('content')
    <section class="page-title page-title-11" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section"><img src=" {{ asset('web/Banner/6.jpg') }}" alt="Background"/></div>
            <div class="container">
                <div class="title">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h1 class="title-heading">{{ $service->name }}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <p class="title-desc">We offer products, solutions, and services across the entire energy
                                value chain. We support our customers on their way to a more sustainable future.</p>
                            <div class="title-action">
                                <a class="btn btn--primary btn--inversed" href="">Request service
                                    <i class="energia-arrow-right"></i>
                                </a>
                                <a class="btn btn--bordered btn--white" href="{{url('website/shop')}}">Shop With Us  <i class="fa fa-shopping-cart"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->
    <!--
    ============================
    Services Single Section
    ============================
    -->
    <section class="service-single" id="service-single">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 order-1">
                    <!--
                    ============================
                    Services Sidebar
                    ============================
                    -->
                    <div class="sidebar sidebar-service">
                        <!-- Services-->
                        <div class="widget widget-services">
                            <div class="widget-title">
                                <h5>our services</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    @foreach(\App\Models\Service::all() as $otherService)
                                        <li><a href="{{route('website.service',$otherService->slug)}}">
                                                <span>{{ $otherService->name }}</span><i
                                                    class="energia-arrow-right"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End .widget-services -->
                        <!-- Reservation-->
                        <div class="widget widget-reservation">
                            <img src="website/assets/images/blog/sidebar/reservation.jpg" alt="img"/>
                            <div class="widget-content"><i class="flaticon-040-green-energy"></i>
                                <p>Please feel free to contact our friendly specialists staff to request this service</p>
                                <a class="btn btn--bordered btn--white" href="#" data-bs-toggle="modal" data-bs-target="#requestModal">
                                    schedule an appointment or request quote
                                </a>
                                <a href="tel:+263 242 307 362"><span class="energia-phone-Icon"></span> +263 242 307 362</a>
                                <a href="tel:+263 719 215 274"><span class="energia-phone-Icon"></span> +263 719 215 274</a>
                            </div>
                        </div>
                        <!-- End .widget-reservation-->
                    </div>
                    <!-- End .sidebar-->
                </div>
                <div class="col-12 col-lg-8 order-0 order-lg-2">
                    <!-- Start .service-entry-->
                    <div class="service-entry">
                        <div class="entry-content">
                            <div class="entry-introduction entry-infos">
                                <h5 class="entry-heading">overview</h5>
                                <p class="entry-desc">
                                    {!! $service->description !!}
                                </p>
                                <p class="entry-desc">One assessment claimed that, as of 2009, wind had the “lowest
                                    relative greenhouse gas emissions, the least water consumption demands and… the most
                                    favourable social impacts” compared to photovoltaic, hydro, geothermal, coal and
                                    gas.[1]</p>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <img src="{{ asset($service->image) }}" alt="image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .service-entry-->

                </div>
                <div class="modal fade" id="requestModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Request quote or Enquire for {{ $service->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="contact-card">
                                    <div class="contact-body">
                                        <h5 class="card-heading">get in touch</h5>
                                        <p class="card-desc">We take great pride in everything that we do, control over products
                                            allows us to ensure our customers receive the best quality service.</p>
                                        <form class="contactForm" method="post" action="assets/php/contact.php">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <input class="form-control" type="text" id="contact-name"
                                                           name="contact-name" placeholder="Name" required=""/>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input class="form-control" type="text" id="contact-email"
                                                           name="contact-email" placeholder="Email" required=""/>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input class="form-control" type="text" id="contact-phone"
                                                           name="contact-phone" placeholder="Phone" required=""/>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <select name="service_id" class="form-control" id="select-1">
                                                        <option value="">select your services</option>
                                                        <option value="{{ $service->id }}">{{ $service->name }} </option>

                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="contact-message">Message</label>
                                                    <textarea class="form-control" placeholder="additional information"
                                                              name="contact-message" id="contact-message"
                                                              cols="30" rows="40">
                                    </textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn--secondary">submit request <i
                                                            class="energia-arrow-right"></i></button>
                                                </div>
                                                <div class="col-12">
                                                    <div class="contact-result"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End .contact-body -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn--primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End .col-lg-8-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

@endsection

