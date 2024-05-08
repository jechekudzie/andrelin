@extends('layouts.web')

@section('content')
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="{{asset('web/Banner/6.jpg')}}" alt="Background"/></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">About Us</h1>
                            <p style="color: white;font-size: 30px;font-weight: bolder;width: 100%" class="title-desc">
                                Empowering Tomorrow: Affordable,
                                Reliable Renewable Energy Solutions for Zimbabwe and Beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="">company</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>

    <!--
     ============================
     About #1 Section
     ============================
     -->
    <section class="about about-1" id="about-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section">
                                <img style="margin-top: 50px;" src="{{asset('about.jpg')}}" alt="about Image"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">HATISI VANA MASIYA NDAITA</p>
                        <h2 class="heading-title">We Are Pioneers In The World Of Solar & Renewable Energy!</h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-md-12">
                                <div class="block-left">
                                    <p style="color: black;text-align: justify">
                                        Established in February 2019, Andrelin Enterprises P/L is an emerging force in
                                        the construction and energy sectors, specializing in electrical power
                                        engineering. The company is 100% indigenously owned, proudly Zimbabwean, and
                                        committed to delivering quality services and products across all provinces of
                                        Zimbabwe and beyond.
                                    </p>
                                    <p style="color: black;text-align: justify">
                                        With our expertise in system design, implementation, and commissioning, we
                                        deliver turnkey solutions to individuals, residential, commercial, and
                                        industrial clients throughout Zimbabwe, the SADC region, and beyond. We are
                                        aligned with Zimbabwe's National Development Strategy 1 (NDS1), Global Energy
                                        SDGs, and the Zimbabwe Presidential Vision 2030, ensuring our energy solutions
                                        are affordable and environmentally friendly.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-6-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

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
                        Innovation at the Heart of Every Project</p>
                    <a class="btn btn--primary btn--white" href="{{url('website/shop')}}">Online Shop</a>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="features features-1 bg-overlay bg-overlay-theme2" id="features-1">
        <div class="bg-section"><img src="assets/images/background/2.jpg" alt="Background"/></div>
        <div class="container">
            <div class="heading heading-2 heading-light heading-light2">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="heading-subtitle">Sustainable, Reliable & Affordable Energy!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">Discover the Andrelin Universe!</h2>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <p style="text-align: justify" class="heading-desc">
                            Welcome to Andrelin Enterprises, where innovation meets excellence across diverse
                            industries. As a multifaceted entity, we proudly present our four specialized divisions,
                            each tailored to meet distinct market needs while upholding our commitment to quality,
                            integrity, and sustainability. Whether you're looking to harness the power of the sun, need
                            top-tier logistical support, require premium electrical services, or are searching for
                            reliable construction materials, Andrelin has a solution tailored just for you.
                        </p>
                        <div class="actions-holder">
                            <a class="btn btn--primary btn--inversed" href="{{url('website/shop')}}">
                                get started<i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .heading-->
            <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true"
                 data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                <div>
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="fas fa-solar-panel"></i></div>
                            <div class="feature-content">
                                <h4>Andrelin Solar</h4>
                                <p style="text-align: justify;color:black;height: 200px;">Dive into the future of energy
                                    with Andrelin Solar. We provide cutting-edge renewable
                                    energy solutions that are not only eco-friendly but also cost-effective. From
                                    residential to commercial projects, our solar solutions light up lives while
                                    conserving the environment.</p>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#solarModal"><i class="energia-arrow-right"></i> <span>explore more</span> </a>
                        </div>
                        <!-- End .feature-panel-->
                    </div>
                </div>
                <div>
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="fas fa-tools"></i></div>
                            <div class="feature-content">
                                <h4>Andrelin Hardware</h4>
                                <p style="text-align: justify;color:black;height: 200px;">Your one-stop shop for all
                                    construction and building materials. At Andrelin Hardware,
                                    we offer a wide range of high-quality materials sourced to ensure durability and
                                    performance. Build with confidence; build with Andrelin.</p>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#hardwareModal"><i class="energia-arrow-right"></i> <span>explore more</span> </a>
                        </div>
                        <!-- End .feature-panel-->
                    </div>
                </div>
                <div>
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="fa fa-truck"></i></div>
                            <div class="feature-content">
                                <h4>Andrelin Logistics</h4>
                                <p style="text-align: justify;color:black;height: 200px;">Move with efficiency with
                                    Andrelin Logistics. Our logistics division ensures that
                                    your goods are transported safely, promptly, and efficiently, no matter the
                                    destination. Trust us to handle the complexities of transportation and logistics
                                    with ease.</p>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#logisticsModal"><i class="energia-arrow-right"></i> <span>explore more</span> </a>
                        </div>
                        <!-- End .feature-panel-->
                    </div>
                </div>
                <div>
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="fas fa-plug"></i></div>
                            <div class="feature-content">
                                <h4>Andrelin Electricals</h4>
                                <p style="text-align: justify;color:black;height: 200px;">Empowered by expertise,
                                    Andrelin Electrical offers professional electrical services
                                    from installations to maintenance. Our certified technicians are equipped to handle
                                    both Low Voltage (LV) and High Voltage (HV) systems, ensuring safety and optimal
                                    performance.</p>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#electricalModal"><i class="energia-arrow-right"></i> <span>explore more</span> </a>
                        </div>
                        <!-- End .feature-panel-->
                    </div>
                </div>
            </div>
            <!-- End .carousel-->
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

   {{-- <div class="container">
        <div class="row">
            <!-- End .video-wrapper-->
            <div class="about-block-wrapper">
                <div class="about-block">
                    <div class="col-md-6 col-lg-6">
                        <div class="heading heading-1">
                            <p class="heading-subtitle heading-subtitle-bg">Complete Commercial And Residential Solar
                                Systems</p>
                            <h2 class="heading-title">Director's Foreword!</h2>
                            <p style="color: black;text-align: justify;" class="heading-desc">
                                Andrelin SOLAR is dedicated to providing exceptional, custom-tailored renewable energy
                                services, ensuring complete client satisfaction and problem resolution. The company is
                                integral to the development of rural and urban areas in Zimbabwe and beyond, utilizing
                                an
                                innovative approach that goes beyond conventional thinking by removing limitations
                                altogether.
                                <br/>
                                <br/>
                                Andrelin SOLAR emphasizes quality and safety in its workmanship, treating every
                                project with full dedication. Their operations embody the philosophy that 'the customer
                                is
                                king,' promising guaranteed quality, satisfaction, and excellent service. The commitment
                                to
                                excellence is consistent in every endeavor, affirming their slogan in ChiKaranga:
                                'HATISI
                                VANA MASIYA NDAITA.'
                            </p>
                            <div class="signature-block">
                                <div class="signature-body">
                                    <h6>Andrew Hlatywayo</h6>
                                    <p>Director - Andrelin Enterprises Private Limited</p>
                                </div>

                                <a class="btn btn--secondary m-4" data-bs-toggle="modal"
                                   data-bs-target="#staticBackdrop">read
                                    more
                                    <i class="energia-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End .about-block-wrapper-->

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
                                From the inception of the idea to its realization as Andrelin SOLAR, our vision,
                                mission, and
                                mantra have always been crystal clear. We are committed to delivering top-notch,
                                custom-tailored
                                services to you, our clients, ensuring every query is settled, every problem is solved,
                                and
                                every client is satisfied.
                                <br/>
                                <br/>
                                We firmly believe that ANDRELIN SOLAR plays a crucial role in the development of our
                                rural
                                communities, growth points, towns, cities, and the nation at large—and even beyond. Our
                                unique
                                approach to business sets us apart. While some businesses confine their thinking within
                                a box,
                                and others think outside the box, our innovative team recognized that the box itself was
                                the
                                limitation. By discarding it, they freed their imagination and pioneered numerous ways
                                to make
                                renewable energy affordable, accessible, and bankable.
                                <br/>
                                <br/>

                                Choosing to do business with us means opting for excellence. Our 'modus operandi' is
                                deeply
                                rooted in the philosophy that 'the customer is king.' Quality and safe workmanship are
                                ingrained
                                in our culture and have become our second nature. We approach every project with full
                                dedication, regardless of its size. Our commitment is uniform across the board, and in
                                the
                                ChiKaranga language we say, 'HATISI VANA MASIYA NDAITA.'
                                <br/>
                                <br/>
                                By choosing ANDRELIN SOLAR, you choose guaranteed quality, satisfaction, and
                                unparalleled
                                service. We look forward to doing business with you.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn--primary" data-bs-dismiss="modal">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

@endsection
