@extends('layouts.web')

@section('content')

    <section class="map map-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="d-none">our office map</h3>
                </div>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237.43077131306268!2d31.03286183372955!3d-17.796756150000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a5fa2b62af71%3A0x23e0c485a346e2a0!2sAndrelin%20Solar%20-%20Avondale!5e0!3m2!1sen!2szw!4v1713623302644!5m2!1sen!2szw"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--
    ============================
    Testimonials #5 Section
    ============================
    -->
    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
        <div class="bg-section"><img src="assets/images/background/wavy-pattern.png" alt="background"/></div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div style="background-color: #43be1d" class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2">

                            <div style="background-color: #43be1d" class="card-content">
                                <div class="content-top">
                                    <p >
                                        We are dedicated to remaining relevant and becoming the premier enterprise for
                                        all our stakeholders by delivering results-oriented projects, providing
                                        competent training to our personnel, and offering sustainable green solutions .
                                    </p>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info"><i class="energia-phone-Icon"></i>
                                            <p >Emergency Line: <a  href="tel:+263 242 307 3620">+263 242 307 362</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p >Location: <a   href="mailto:info@andrelin.enterprises">
                                                    64A Connaught Rd, Avondale, Harare</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-clock-Icon"></i>
                                            <p >Mon - Fri: 8:00 am - 7:00 pm </p>
                                        </li>
                                    </ul>
                                    <a class="btn btn--white" href="{{url('/website/about')}}">About us <i
                                            class="energia-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
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
                                            <select class="form-control" id="select-1">
                                                <option value="default">select your services</option>
                                                <option value="s1">service 1</option>
                                                <option value="s2">service 2</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" id="contact-infos"
                                                      placeholder="additional information" name="contact-infos"
                                                      cols="30" rows="10"></textarea>
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
                </div>
                <!-- End .row-->
            </div>
            <!-- End .contact-panel-->

            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
@endsection
