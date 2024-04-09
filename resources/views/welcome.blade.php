@extends('layouts.website')

@push('head') @endpush

<!-- title -->
@section('title', 'Welcome')

<!-- content -->
@section('content')

    <!-- Hero Section Start -->
    <div class="hero parallaxie" style="background-image: url('solar_banner1.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 4.31719px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Hero Left Content Start -->
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Welcome to Solor</h3>
                            <h1 class="text-anime">Powering the Future With <span>Renewable.</span></h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <p>Duis ultricies, tortor a accumsan fermentum, purus diam mollis velit, eu bibendum ipsum erat quis leo. Vestibulum finibus, leo dapibus feugiat rutrum, augue lacus rhoncus velit, vel scelerisque odio est.</p>
                        </div>

                        <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="#" class="btn-default">Our Services</a>
                            <a href="#" class="btn-default btn-border">Contact Now</a>
                        </div>
                    </div>
                    <!-- Hero Left Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About us Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="reveal image-anime">
                                <img src="/website/images/about-1.jpg" alt="">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="reveal image-anime">
                                <img src="/website/images/about-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="text-anime">About Green Energy Solar</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About us Content Start -->
                    <div class="about-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                        <ul>
                            <li>Solar Inverter Setup</li>
                            <li>Battery Storage Solutions</li>
                            <li>Solar Material Financing</li>
                            <li>24 X 7 Call & Chat Support</li>
                        </ul>

                        <a href="#" class="btn-default">More About</a>
                    </div>
                    <!-- About us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime">Best Offer For Renewable Energy</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Services Slider Start -->
                    <div class="services-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-image">
                                            <figure>
                                                <img src="/website/images/service-1.jpg" alt="">
                                            </figure>

                                            <div class="service-icon">
                                                <img src="/website/images/icon-service-1.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="service-content">
                                            <h3>Solar Maintenance</h3>
                                            <p>Aenean mattis mauris turpis, quis porta magna aliquam eu. Nulla consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slide End -->

                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-image">
                                            <figure>
                                                <img src="/website/images/service-2.jpg" alt="">
                                            </figure>

                                            <div class="service-icon">
                                                <img src="/website/images/icon-service-2.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="service-content">
                                            <h3>Energy Saving Devices</h3>
                                            <p>Aenean mattis mauris turpis, quis porta magna aliquam eu. Nulla consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slide End -->

                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-image">
                                            <figure>
                                                <img src="/website/images/service-3.jpg" alt="">
                                            </figure>

                                            <div class="service-icon">
                                                <img src="/website/images/icon-service-3.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="service-content">
                                            <h3>Solar Solutions</h3>
                                            <p>Aenean mattis mauris turpis, quis porta magna aliquam eu. Nulla consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slide End -->

                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-image">
                                            <figure>
                                                <img src="/website/images/service-2.jpg" alt="">
                                            </figure>

                                            <div class="service-icon">
                                                <img src="/website/images/icon-service-2.svg" alt="">
                                            </div>
                                        </div>

                                        <div class="service-content">
                                            <h3>Energy Saving Devices</h3>
                                            <p>Aenean mattis mauris turpis, quis porta magna aliquam eu. Nulla consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slide End -->
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Services Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->



    <!-- Our Process Section Start -->
    <div class="our-process">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Latest Process</h3>
                        <h2 class="text-anime">Our Work Process</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Step Item Start -->
                    <div class="step-item step-1 wow fadeInUp" data-wow-delay="0.25s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="/website/images/icon-step-1.svg" alt="">
                                </figure>
                                <span class="step-no">01</span>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Project Planing</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Step Item Start -->
                    <div class="step-item step-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="/website/images/icon-step-2.svg" alt="">
                                </figure>
                                <span class="step-no">02</span>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Research & Analysis</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Step Item Start -->
                    <div class="step-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="step-header">
                            <div class="step-icon">
                                <figure>
                                    <img src="/website/images/icon-step-3.svg" alt="">
                                </figure>
                                <span class="step-no">03</span>
                            </div>
                        </div>

                        <div class="step-content">
                            <h3>Solar Installation</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <!-- Step Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Process Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <div class="video-image">
                            <img src="/website/images/video-bg.jpg" alt="">
                        </div>

                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=2JNMGesMC2Y" class="popup-video">
                                <img src="/website/images/play.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Sklii Section Start -->
    <div class="our-skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Energy Progress</h3>
                        <h2 class="text-anime">Best Solution For Your Solar Energy</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <div class="skills-box">
                        <!-- Skill Item Start -->
                        <div class="skillbar" data-percent="95%">
                            <div class="skill-data">
                                <div class="title">Solar Panels</div>
                                <div class="count">95%</div>
                            </div>
                            <div class="skill-progress">
                                <div class="count-bar"></div>
                            </div>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skillbar" data-percent="80%">
                            <div class="skill-data">
                                <div class="title">Hybrid Energy</div>
                                <div class="count">80%</div>
                            </div>
                            <div class="skill-progress">
                                <div class="count-bar"></div>
                            </div>
                        </div>
                        <!-- Skill Item End -->

                        <!-- Skill Item Start -->
                        <div class="skillbar" data-percent="70%">
                            <div class="skill-data">
                                <div class="title">Marketing</div>
                                <div class="count">70%</div>
                            </div>
                            <div class="skill-progress">
                                <div class="count-bar"></div>
                            </div>
                        </div>
                        <!-- Skill Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Sklii Section End -->

    <!-- Infobar Section Start -->
    <div class="infobar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-box">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <!-- CTA Image Start -->
                                <div class="cta-image">
                                    <figure class="image-anime">
                                        <img src="/website/images/cta-image.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- CTA Image End -->
                            </div>

                            <div class="col-lg-8">
                                <!-- CTA Content Start -->
                                <div class="cta-content">
                                    <div class="phone-icon">
                                        <figure>
                                            <img src="/website/images/icon-cta-phone.svg" alt="">
                                        </figure>
                                    </div>
                                    <h3 class="text-anime">Have Questions? <span>Call Us</span> 800-001-658</h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                                <!-- CTA Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Infobar Section End -->

    <!-- Why Choose us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Why Choose Us</h3>
                        <h2 class="text-anime">Providing Solar Energy Solutions</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="why-choose-image">
                            <img src="/website/images/whyus-1.jpg" alt="">
                        </div>

                        <div class="why-choose-content">
                            <div class="why-choose-icon">
                                <img src="/website/images/icon-whyus-1.svg" alt="">
                            </div>

                            <h3>Efficiency & Power</h3>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="why-choose-image">
                            <img src="/website/images/whyus-2.jpg" alt="">
                        </div>

                        <div class="why-choose-content">
                            <div class="why-choose-icon">
                                <img src="/website/images/icon-whyus-2.svg" alt="">
                            </div>

                            <h3>Trust & Warranty</h3>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="why-choose-image">
                            <img src="/website/images/whyus-3.jpg" alt="">
                        </div>

                        <div class="why-choose-content">
                            <div class="why-choose-icon">
                                <img src="/website/images/icon-whyus-3.svg" alt="">
                            </div>

                            <h3>High Quality Work</h3>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="1.0s">
                        <div class="why-choose-image">
                            <img src="/website/images/whyus-4.jpg" alt="">
                        </div>

                        <div class="why-choose-content">
                            <div class="why-choose-icon">
                                <img src="/website/images/icon-whyus-4.svg" alt="">
                            </div>

                            <h3>24*7 Support</h3>
                            <p>Ut ut eros risus. In luctus fringilla augue, eget ultricies purus. Sed mauris a nisl.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose us Section End -->

    <!-- Counter Section Start -->
    <div class="stat-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="/website/images/icon-project.svg" alt="">
                        </div>

                        <div class="counter-content">
                            <h3><span class="counter">1000</span>+</h3>
                            <p>Project Done</p>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="/website/images/icon-happy-clients.svg" alt="">
                        </div>

                        <div class="counter-content">
                            <h3><span class="counter">1200</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="/website/images/icon-award.svg" alt="">
                        </div>

                        <div class="counter-content">
                            <h3><span class="counter">850</span>+</h3>
                            <p>Award Winning</p>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <div class="counter-icon">
                            <img src="/website/images/icon-ratting.svg" alt="">
                        </div>

                        <div class="counter-content">
                            <h3><span class="counter">1100</span>+</h3>
                            <p>Rating Customer</p>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Solar Calculator Section Start -->
    <div class="solar-calculator">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Solar Calculator Form Start -->
                    <div class="calculator-box wow fadeInUp">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3>Solar Calculator</h3>
                                    <h2>Your Solar Savings Calculator</h2>
                                </div>
                                <!-- Section Title End -->
                            </div>

                            <div class="col-lg-7">
                                <!-- Solar Form Start -->
                                <div class="solar-form">
                                    <form id="solarForm" action="#" method="POST" data-toggle="validator">
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <select name="category" class="form-control" id="category" required >
                                                    <option value="">Category</option>
                                                    <option>Residential</option>
                                                    <option>Commercial</option>
                                                </select>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-6 mb-3">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required >
                                                <div class="help-block with-errors"></div>
                                            </div>


                                            <div class="form-group col-md-6 mb-3">
                                                <input type="email" name ="email" class="form-control" id="email" placeholder="Email" required >
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-6 mb-3">
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required >
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-6 mb-3">
                                                <input type="text" name="bill" class="form-control" id="bill" placeholder="our Average Monthly Bill?" required >
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-6 mb-3">
                                                <input type="text" name="capacity" class="form-control" id="capacity" placeholder="Required Solar Plant Capacity (in kW)" required >
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn-default">Calculate</button>
                                                <div id="msgSubmit" class="h3 text-left hidden"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Solar Form End -->
                            </div>
                        </div>
                    </div>
                    <!-- Solar Calculator Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Solar Calculator Section End -->

    <!-- Latest News Section Start -->
    <div class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Recent Articles</h3>
                        <h2 class="text-anime">Our Latest News</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="/website/images/post-1.jpg" alt="">
                            </figure>
                        </div>

                        <div class="post-item-body">
                            <h2><a href="#">Exploring the Latest Innovations in Solar Technology</a></h2>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-calendar-days"></i> 09 Feb 2024</a></li>
                                    <li><a href="#"><i class="fa-solid fa-tag"></i> Solar Panel</a></li>
                                </ul>
                            </div>

                            <div class="btn-readmore">
                                <a href="#" class="btn-default">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="/website/images/post-2.jpg" alt="">
                            </figure>
                        </div>

                        <div class="post-item-body">
                            <h2><a href="#">Solar Solutions for a Sustainable Tomorrow</a></h2>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-calendar-days"></i> 09 Feb 2024</a></li>
                                    <li><a href="#"><i class="fa-solid fa-tag"></i> Solar Panel</a></li>
                                </ul>
                            </div>

                            <div class="btn-readmore">
                                <a href="#" class="btn-default">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="/website/images/post-3.jpg" alt="">
                            </figure>
                        </div>

                        <div class="post-item-body">
                            <h2><a href="#">Advancements and Breakthroughs in Renewable Power</a></h2>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#"><i class="fa-regular fa-calendar-days"></i> 09 Feb 2024</a></li>
                                    <li><a href="#"><i class="fa-solid fa-tag"></i> Solar Panel</a></li>
                                </ul>
                            </div>

                            <div class="btn-readmore">
                                <a href="#" class="btn-default">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News Section End -->

@endsection

@push('scripts') @endpush
