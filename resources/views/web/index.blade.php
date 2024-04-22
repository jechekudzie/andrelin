@extends('layouts.web')

@section('content')

    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pe-0 ps-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1"
                 data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                <!--  Start .slide-->
                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section"><img src="{{asset('web/Banner/2.jpg')}}" alt="Background"/></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">sustainable &amp; reliable energy!</h1>
                                    <p class="slide-desc">Empowering Tomorrow: Affordable, Reliable Renewable Energy
                                        Solutions for Zimbabwe and Beyond</p>
                                    <div class="slide-action"><a class="btn btn--primary" href="page-services.html">
                                            <span>our services</span><i class="energia-arrow-right"></i></a><a
                                            class="btn btn--white justify-content-center" href="page-about.html">more
                                            about us!</a></div>
                                </div>
                                <!-- End .slide-content -->
                            </div>
                        </div>
                        <!--  End .row-->
                    </div>
                    <!-- End .container-->
                </div>
                <!-- End .slide-->
                <!--  Start .slide-->
                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section"><img src="{{asset('web/Banner/6.jpg')}}" alt="Background"/></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">shaping future of solar energy!</h1>
                                    <p class="slide-desc">Illuminate Your World with Andrelin Solar: Excellence in Every
                                        Beam.</p>
                                    <div class="slide-action"><a class="btn btn--primary" href="page-services.html">
                                            <span>our services</span><i class="energia-arrow-right"></i></a><a
                                            class="btn btn--white justify-content-center" href="page-about.html">more
                                            about us!</a></div>
                                </div>
                                <!-- End .slide-content -->
                            </div>
                        </div>
                        <!--  End .row-->
                    </div>
                    <!-- End .container-->
                </div>
                <!-- End .slide-->
            </div>
            <!-- End .slider-carousel-->
        </div>
        <!--  End .container-fluid-->
    </section>
    <!--
    ============================
    FeaturesBar #1 Section
    ============================
    -->
    <section class="features-bar bg-overlay bg-overlay-theme3" id="featuresBar-1">
        <div class="bg-section"><img src="assets/images/background/3.jpg" alt="background"/></div>
        <div class="container">
            <div class="row g-0 features-holder">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content"><i class="fa fa-lightbulb"></i>
                            <h5>Innovation</h5>
                            <p>We continually innovate from concept to completion</p>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content"><i class="fa fa-handshake"></i>
                            <h5>Integrity</h5>
                            <p>We perform our duties with integrity; 'Hatisi vana masiyandaita!</p>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content"><i class="fa fa-eye"></i>
                            <h5>Transparency</h5>
                            <p>We maintain transparency throughout all stages of our projects, ensuring client
                                satisfaction.</p>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
            </div>
            <div class="row">
                <div class="more-features more-features-2">
                    <p style="color: black;font-size: 16px;">Join the Renewable Revolution: Quality, Integrity, and
                        Innovation at the Heart of Every Projecr</p>
                    <a class="btn btn--primary btn--white" href="{{url('website/shop')}}">Online Shop</a>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    ============================
    services #2 Section
    ============================
    -->
    <section class="services services-2 bg-grey" id="services-2">
        <div class="container">
            <div class="heading heading-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="heading-title">A Leading Supplier Of Solar Materials For Installers &
                            Customers.
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p style="color: black;text-align: justify;" class="heading-desc text-black">We employ a
                            time-tested, well-trained,
                            and motivated workforce to uphold
                            quality standards in all aspects of the construction and energy industries. Our network of
                            qualified tradesmen and specialist subcontractors ensures we adhere to our commitment to
                            client satisfaction and high-quality, comprehensive service that is uniquely tailored to
                            meet the needs of our clients in every market we serve.
                            <br/>
                            <br/>
                            Andrelin Solar is affiliated with notable organizations such as the Zimbabwe Institute of
                            Engineers, Engineering Council of Zimbabwe, Scientific and Industrial Research and
                            Development Centre (SIRDC), and the Zimbabwe Energy Regulatory Authority (ZERA). We
                            collaborate on synergizing operations, talent development, skills transfer, and participate
                            in the National Social Security Authority's Occupational Safety and Health classes to
                            promote a 'zero casualty' engineering environment.
                        </p>
                        <div class="actions-holder">
                            <a class="btn btn--primary" href="">read more <i class="fa fa-caret-right"></i></a>
                            <a style="color: black;" class="btn btn--white" href="{{url('website/shop')}}">Shop With Us <i
                                    class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .heading-->
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
                 data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="fas fa-solar-panel"></i></div>
                        <div class="service-content">
                            <h4><a href="">Andrelin<br/> Solar</a></h4>
                            <p>Intro goes here Intro goes here Intro goes here Intro goes here Intro goes here Intro
                                goes here Intro goes here Intro goes here Intro goes here Intro goes here Intro goes
                                here Intro goes here Intro goes here Intro goes here
                                Intro goes here
                            </p>
                            <ul class="list-unstyled advantages-list">
                            </ul>
                            <a class="btn btn--secondary" href="">read more <i
                                    class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="fas fa-tools"></i></div>
                        <div class="service-content">
                            <h4><a href="">Andrelin<br/>Hardware</a></h4>
                            <p>Intro goes here Intro goes here Intro goes here Intro goes here Intro goes here Intro
                                goes here Intro goes here Intro goes here Intro goes here Intro goes here Intro goes
                                here Intro goes here Intro goes here Intro goes here
                                Intro goes here
                            </p>
                            <ul class="list-unstyled advantages-list">
                            </ul>
                            <a class="btn btn--secondary" href="">read more <i
                                    class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="fa fa-truck"></i></div>
                        <div class="service-content">
                            <h4><a href="">Andrelin<br/>Logistics</a></h4>
                            < <p>Intro goes here Intro goes here Intro goes here Intro goes here Intro goes here Intro
                                goes here Intro goes here Intro goes here Intro goes here Intro goes here Intro goes
                                here Intro goes here Intro goes here Intro goes here
                                Intro goes here
                            </p>
                            <ul class="list-unstyled advantages-list">
                            </ul>
                            <a class="btn btn--secondary" href="">read more <i
                                    class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>

            </div>
            <!-- End .carousel-->

            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    ============================
    About #2 Section
    ============================
    -->
    <section style="margin-top: 40px;" class="about about-2" id="about-2">
        <div class="about-wrapper">
            <!--
            ============================
            Video #2 Section
            ============================
            -->
            <div class="video-wrapper">
                <div class="video video-2" id="video-2">
                    <div class="bg-section"><img src="{{asset('/web/Banner/5.jpg')}}" alt="background"/></div>
                    {{-- <a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i
                             class="fas fa-play"></i></a>--}}
                    <!-- End .popup-video-->
                </div>
                <!-- End .video-->
            </div>

            <!-- End .video-wrapper-->
            <div class="about-block-wrapper">
                <div class="about-block">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">Complete Commercial And Residential Solar
                            Systems</p>
                        <h2 class="heading-title">Director's Foreword!</h2>
                        <p style="color: black;text-align: justify;" class="heading-desc">
                            Andrelin SOLAR is dedicated to providing exceptional, custom-tailored renewable energy
                            services, ensuring complete client satisfaction and problem resolution. The company is
                            integral to the development of rural and urban areas in Zimbabwe and beyond, utilizing an
                            innovative approach that goes beyond conventional thinking by removing limitations
                            altogether.
                            <br/>
                            <br/>
                            Andrelin SOLAR emphasizes quality and safety in its workmanship, treating every
                            project with full dedication. Their operations embody the philosophy that 'the customer is
                            king,' promising guaranteed quality, satisfaction, and excellent service. The commitment to
                            excellence is consistent in every endeavor, affirming their slogan in ChiKaranga: 'HATISI
                            VANA MASIYA NDAITA.'
                        </p>
                        <div class="signature-block">
                            <div class="signature-body">
                                <h6>Andrew Hlatywayo</h6>
                                <p>Director - Andrelin Enterprises Private Limited</p>
                            </div>

                            <a class="btn btn--secondary m-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">read
                                more
                                <i class="energia-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .about-block-wrapper-->
        </div>
        <!-- End .about-wrapper -->
    </section>

    <!-- Director's Foreword Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Director's Foreword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="color: black;text-align: justify;">
                        From the inception of the idea to its realization as Andrelin SOLAR, our vision, mission, and
                        mantra have always been crystal clear. We are committed to delivering top-notch, custom-tailored
                        services to you, our clients, ensuring every query is settled, every problem is solved, and
                        every client is satisfied.
                        <br/>
                        <br/>
                        We firmly believe that ANDRELIN SOLAR plays a crucial role in the development of our rural
                        communities, growth points, towns, cities, and the nation at large—and even beyond. Our unique
                        approach to business sets us apart. While some businesses confine their thinking within a box,
                        and others think outside the box, our innovative team recognized that the box itself was the
                        limitation. By discarding it, they freed their imagination and pioneered numerous ways to make
                        renewable energy affordable, accessible, and bankable.
                        <br/>
                        <br/>

                        Choosing to do business with us means opting for excellence. Our 'modus operandi' is deeply
                        rooted in the philosophy that 'the customer is king.' Quality and safe workmanship are ingrained
                        in our culture and have become our second nature. We approach every project with full
                        dedication, regardless of its size. Our commitment is uniform across the board, and in the
                        ChiKaranga language we say, 'HATISI VANA MASIYA NDAITA.'
                        <br/>
                        <br/>
                        By choosing ANDRELIN SOLAR, you choose guaranteed quality, satisfaction, and unparalleled
                        service. We look forward to doing business with you.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--primary" data-bs-dismiss="modal">Understood</button>
                </div>
            </div>
        </div>
    </div>


    <!--
    ============================
    Testimonials #2 Section
    ============================
    -->
    <section class="testimonial testimonial-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="heading heading-9">
                        <h2 class="heading-title">success stories</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="img-hotspot img-hotspot-2">
                        <div class="img-hotspot-wrap">
                            <div class="img-hotspot-bg"><img src="assets/images/background/world-map.png" alt="image"/>
                            </div>
                            <div class="img-hotspot-pointers">
                                <div class="img-hotspot-pointer" data-spot-x="12%" data-spot-y="25%"><img
                                        src="assets/images/testimonial/thumbs/1.jpg" alt="pointer"/>
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%"><img
                                        src="assets/images/testimonial/thumbs/2.jpg" alt="pointer"/>
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="79%" data-spot-y="15%"><img
                                        src="assets/images/testimonial/thumbs/3.jpg" alt="pointer"/>
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="21%" data-spot-y="36%"><img
                                        src="assets/images/testimonial/thumbs/4.jpg" alt="pointer"/>
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="70%" data-spot-y="39%"><img
                                        src="assets/images/testimonial/thumbs/5.jpg" alt="pointer"/>
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <div class="cta-holder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="height: 300px;" class="cta">
                        <div class="cta-body">
                            <h5 style="font-size: 30px;">SAFETY! <i style="color:#3ff806; " class="fa fa-shield"></i>
                            </h5>

                            <div class="cta-content">
                                <p style="color:black;">Our commitment to safety is a cornerstone of our operations,
                                    with a robust management system in place to manage risks and hazards. By adhering to
                                    the 'Four Es' of accident prevention—Elimination, Substitution, Engineering, and
                                    Enforcement—we aim for 'zero harm.' Our active participation in safety
                                    boards and organizations underscores our commitment to the health and safety of all
                                    stakeholders.
                                    We are a proudly NSSA registered company [SSR: 02084 27Z].</p>
                                <a
                                    class="btn btn--bordered btn--white" href="">Shop with us <i
                                        class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="more-actions">
                        <p>Sustainable, reliable & affordable energy systems,
                            <a href="">Find Your Solution Now! </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </div>
    <!--
    ============================
    Contact #2 Section
    ============================
    -->
    <section class="contact contact-2" id="contact-2">
        <div class="contact-overlay bg-overlay bg-overlay-theme5">
            <div class="bg-section"><img src="assets/images/background/4.jpg" alt="background"/></div>
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-light heading-10">
                    <h2 class="heading-title">Provide Value To Our Clients Through Ongoing Product & Innovation.</h2>
                    <p style="color: black;" class="text-black heading-desc">We offer products, solutions, and services
                        across the entire energy value
                        chain,Electrical Hardware and Logistics solutions. We support our customers on their way to a
                        more sustainable future.</p>
                    <div class="contact-action contact-action-2">
                        <a class="btn btn--white" href="">learn more <i class="energia-arrow-right"></i></a>
                    </div>

                </div>
                <div class="contact-card">
                    <div class="contact-body">
                        <h5 class="card-heading">Request A Quote</h5>
                        <p style="color: black;" class="card-desc">We take great pride in everything that we do, control
                            over products allows
                            us to ensure our customers receive the best quality service.</p>
                        <form class="contactForm" method="post" action="assets/php/contact.php">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-usage">Monthly electric usage in kWh?</label>
                                    <input class="form-control" type="text" id="contact-usage" name="contact-usage"
                                           placeholder="1254 KWH" required=""/>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-3">Solar system type?</label>
                                    <select class="form-control" id="select-3">
                                        <option value="default">OffGrid</option>
                                        <option value="AL">OnGrid</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-4">Solar panels place?</label>
                                    <select class="form-control" id="select-4">
                                        <option value="default">Commercial</option>
                                        <option value="AL"> Residential</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-5">Materials on your roof?</label>
                                    <select class="form-control" id="select-5">
                                        <option value="">Choose Roof-Top Type</option>
                                        <option value="comp_shingle">Composite Shingle</option>
                                        <option value="roof_shingle">Asphalt Shingle</option>
                                        <option value="metal">Metal</option>
                                        <option value="tile">Tile</option>
                                        <option value="slate">Slate</option>
                                        <option value="wood_shake">Wood Shake</option>
                                        <option value="rubber">Rubber</option>
                                        <option value="tar_and_gravel">Tar and Gravel</option>
                                        <option value="green_roof">Green Roof</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="description">Solar panels place?</label>
                                    <textarea class="form-control" name="description" id="description"
                                              placeholder="Please describe your project in detail" rows="50"></textarea>

                                </div>

                                <div class="col-12">
                                    <label class="form-label">Preferred Contact Method</label>
                                    <div class="custom-radio-group" id="custom-radio-group">
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline1"
                                                   name="customRadioInline1"/>
                                            <label for="customRadioInline1">all</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline2"
                                                   name="customRadioInline1"/>
                                            <label for="customRadioInline2">email</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline3"
                                                   name="customRadioInline1"/>
                                            <label for="customRadioInline3">phone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn--secondary w-100">submit request <i
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
            <!-- End .contact-panel-->
        </div>
        <!-- End .container-->
    </section>
    <!--
    ============================
    Blog #2 Section
    ============================
    -->
    <section class="blog blog-2 blog-grid" id="blog-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-11 text-center">
                        <p class="heading-subtitle">news & updates</p>
                        <h2 class="heading-title">recent articles</h2>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">{{date('F m')}}</span><span
                                        class="year">{{date('Y')}}</span>
                                </div>
                                <!-- End .entry-date		-->
                                <div class="entry-author">
                                    <p>By Darozvi</p>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h4><a href="">Title Comes Here</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="blog-single.html"><img
                                            src="{{asset('web/assets/images/blog/grid/1.jpg')}}"
                                            alt="Filing Solar Power Permits in 2020? Consider Following Important Factors"/></a>
                                </div>
                                <div class="entry-category"><a href="">solar</a>
                                    <a href="">insights</a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>Introduction for the blog comes here.</p>
                            </div>
                            <div class="entry-more"><a class="btn btn--white btn-bordered" href="">read
                                    more <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">{{date('F m')}}</span><span
                                        class="year">{{date('Y')}}</span>
                                </div>
                                <!-- End .entry-date		-->
                                <div class="entry-author">
                                    <p>By Darozvi</p>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h4><a href="">Title Comes Here</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="blog-single.html"><img
                                            src="{{asset('web/assets/images/blog/grid/1.jpg')}}"
                                            alt="Filing Solar Power Permits in 2020? Consider Following Important Factors"/></a>
                                </div>
                                <div class="entry-category"><a href="">solar</a>
                                    <a href="">insights</a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>Introduction for the blog comes here.</p>
                            </div>
                            <div class="entry-more"><a class="btn btn--white btn-bordered" href="">read
                                    more <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">{{date('F m')}}</span><span
                                        class="year">{{date('Y')}}</span>
                                </div>
                                <!-- End .entry-date		-->
                                <div class="entry-author">
                                    <p>By Darozvi</p>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h4><a href="">Title Comes Here</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="blog-single.html"><img
                                            src="{{asset('web/assets/images/blog/grid/1.jpg')}}"
                                            alt="Filing Solar Power Permits in 2020? Consider Following Important Factors"/></a>
                                </div>
                                <div class="entry-category"><a href="">solar</a>
                                    <a href="">insights</a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>Introduction for the blog comes here.</p>
                            </div>
                            <div class="entry-more"><a class="btn btn--white btn-bordered" href="">read
                                    more <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>

            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

@endsection
