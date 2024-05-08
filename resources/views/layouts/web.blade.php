<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose energy html5 template"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Andrelin Enterprises</title>
    <link href="{{ asset('logo.jpg') }}" rel="icon"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet"/>
    <!-- Stylesheets -->
    <link href="{{ asset('web/assets/css/vendor.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet"/>

    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        p {
            color: black;
        }

        .ul > li {
            color: black;
        }
    </style>
    @stack('styles')
</head>


<body>
{{--<div class="preloader">
    <div class="dual-ring"></div>
</div>--}}
<!-- Document Wrapper-->
<div class="wrapper clearfix" id="wrapperParallax">
    <!--
    ============================
    Header #3
    ============================
    -->
    <header class="header header-light header-topbar header-topbar2 header-shadow" id="navbar-spy">
        <div class="top-bar top-bar-2">

            <div class="block-right">
                <div class="top-contact">
                    <div class="contact-infos"><i class="energia-email--icon"></i>
                        <div class="contact-body">
                            <p>email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises </a></p>
                        </div>
                    </div>
                    <div class="contact-infos"><i class="energia-clock-Icon"></i>
                        <div class="contact-body">
                            <p>hours: Mon-Sat: 8am – 5pm </p>
                        </div>
                    </div>
                </div>
                <!-- Start .social-links-->
                <div class="social-links">
                    <a class="share-whatsapp" href="https://wa.me/263774299888" target="_blank"><i
                            class="fa-brands fa-whatsapp"></i></a>
                    <a class="share-facebook" href="https://www.facebook.com/andrelin.zim" target="_blank"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a class="share-twitter" href="https://twitter.com/AndrelinEnterp1" target="_blank"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a class="share-instagram" href="https://instagram.com/andrelin_enterprises?igshid=1l8w8ar99mkq2"
                       target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a class="share-tiktok" href="https://tiktok.com/@andrelinsola" target="_blank"><i
                            class="fa-brands fa-tiktok"></i></a>
                </div>
                <!-- End .social-links-->
            </div>
        </div>
        <nav style="height: 120px;" class="navbar navbar-expand-lg navbar-sticky" id="primary-menu">
            <a class="navbar-brand" href="{{url('/website/index')}}">
                <img style="width: 100px;height: 105px" class="logo logo-dark" src="{{asset('logo.jpg')}}" alt="Andrelin Enterprises"/>
                <img style="width: 100px;height: 105px" class="logo logo-mobile" src="{{asset('logo.jpg')}}" alt="Andrelin Enterprises"/>
            </a>
            <div class="module-holder module-holder-phone">
                <div class="module module-search">
                    <div class="module-icon module-icon-search">
                        <i class="energia-search-Icon"></i>
                    </div>
                </div>
                <div class="module module-cart">
                    <div class="module-icon module-icon-cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="title">shop cart</span>
                        @livewire('cart-item-counter')
                    </div>
                    <div class="module-cart-warp">

                        @livewire('shopping-cart')

                    </div>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item" id="contact" data-hover=""><a
                            href="{{url('/website/index')}}"><span>Home</span></a>
                    </li>
                    <li class="nav-item has-dropdown" data-hover="">
                        <a class="dropdown-toggle" href="#"
                           data-toggle="dropdown"><span>Andrelin Enterprises</span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a
                                    href="{{url('website/about')}}"><span>About Andrelin Enterprises</span></a></li>
                            <li class="nav-item"><a href="#"><span>Our Team</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-item" id="contact" data-hover=""><a
                            href="{{url('/website/shop')}}"><span>Online Shop </span> <i
                                class="fas fa-shopping-cart"></i></a></li>
                    <li class="nav-item has-dropdown" data-hover="">
                        <a class="dropdown-toggle" href="#"
                           data-toggle="dropdown"><span>Services</span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#"><span>Site Assessment</span></a></li>
                            <li class="nav-item"><a href="#"><span>Consultancy</span></a></li>
                            <li class="nav-item"><a href="#"><span>Installations</span></a></li>
                            <li class="nav-item"><a href="#"><span>System Design & Re-Work</span></a></li>
                            <li class="nav-item"><a href="#"><span>Maintenance</span></a></li>

                        </ul>
                    </li>
                    <li class="nav-item" id="contact" data-hover=""><a href=""><span>Projects</span></a></li>
                    <li class="nav-item" id="contact" data-hover=""><a href=""><span>News & Update</span></a></li>
                    <li class="nav-item" id="contact" data-hover=""><a
                            href="{{url('/website/contact')}}"><span>Contact</span></a></li>
                </ul>
                <div class="module-holder">
                    <div class="module-call"><i class="icons-energiaphone-call"> </i>
                        <div>
                            <p>call us now:</p><a href="tel:+263 242 307 362">+263 242 307 362</a>
                            <p>call us now:</p><a href="tel:+263 719 215 274">+263 719 215 274</a>
                        </div>
                    </div>
                    <div class="module module-search">
                        <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                    </div>
                   {{-- <div class="module-contact module-contact-2"><a class="btn btn--primary" href="{{url('/contact')}}">
                            Request Quote <i class="energia-arrow-right"></i></a>
                    </div>--}}

                    <div class="module module-cart">
                        <div class="module-icon module-icon-cart"><i class="fas fa-shopping-cart"></i><span
                                class="title">shop cart</span>
                            @livewire('cart-item-counter')
                        </div>
                        <div class="module-cart-warp">

                            @livewire('shopping-cart')

                        </div>
                    </div>
                </div>
                <!--  End .module-holder-->
            </div>
            <!--  End .navbar-collapse-->
        </nav>
        <!--  End .navbar-->
    </header>
    <!-- End .header-->
    <!--
    ============================
    Module Search
    ============================
    -->
    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="type words then enter"/>
                            <button></button>
                        </form>
                        <!-- End .form-search -->
                    </div>
                    <!-- End .col-lg-8 -->
                </div>
                <!--  End .row-->
            </div>
            <!--  End .container-->
        </div>
        <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
        <!-- End .module-cancel-->
    </div>
    <!--
    ============================
    Slider #2 Section
    ============================
    -->


    @yield('content')

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

    <!-- Andrelin Solar -->
    <div class="modal fade" id="solarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Andrelin Solar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="color: black;text-align: justify;">
                        Welcome to Andrelin Solar, your trusted partner in harnessing the power of the sun. We
                        specialize in providing innovative and sustainable solar energy solutions for homes, businesses,
                        and communities. Our expert team designs, installs, and maintains top-quality solar systems that
                        reduce your carbon footprint and energy costs. With a focus on reliability, efficiency, and
                        customer satisfaction, we empower you to take control of your energy future. Join the clean
                        energy revolution with Andrelin Solar."
                        <br/>
                        <br/>
                        Andrelin Solar is a leading provider of solar energy solutions, offering a comprehensive range
                        of high-quality products and expert services to facilitate the transition to renewable energy.
                        Our extensive product portfolio includes solar panels, inverters, batteries, charge controllers,
                        and mounting systems, catering to the diverse needs of residential, commercial, and industrial
                        clients.
                        <br/>
                        <br/>
                        Our mission is to empower individuals and organizations to reduce their carbon footprint,
                        minimize energy costs, and maximize energy independence. Our team of experienced professionals
                        is dedicated to delivering exceptional customer service, expert guidance, and competitive
                        pricing to ensure a seamless transition to solar energy.
                        <br/>
                        <br/>
                        At Andrelin Solar, we are committed to excellence, sustainability, and customer satisfaction.
                        Browse our products and services today and join the clean energy revolution."
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--primary" data-bs-dismiss="modal">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Andrelin Hardware -->
    <div class="modal fade" id="hardwareModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Andrelin Hardware</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="color: black;text-align: justify;">
                        Welcome to Andrelin Hardware, your one-stop shop for all your hardware needs. We are a trusted
                        supplier of high-quality products, dedicated to providing excellent customer service and expert
                        advice. Our extensive range of hardware solutions includes tools, building materials, and solar
                        equipment, catering to the needs of professionals and DIY enthusiasts alike.

                        At Andrelin Hardware, we pride ourselves on our:
                    </p>
                    <ul style=" color: black;margin: 5px;">
                        <li>Competitive prices</li>
                        <li>Wide product selection</li>
                        <li>Knowledgeable staff</li>
                        <li>Fast and reliable delivery</li>
                    </ul>
                    <p style="color: black;text-align: justify;">
                        Whether you are a contractor, builder, or homeowner, we have the products and expertise to help
                        you complete your project on time and on budget. Visit us today and experience the Andrelin
                        Hardware difference.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--primary" data-bs-dismiss="modal">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Andrelin Logistics -->
    <div class="modal fade" id="logisticsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Andrelin Logistics</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="color: black;text-align: justify;">
                        Welcome to Andrelin Logistics, your trusted partner in transportation and logistics. We
                        specialize in providing efficient, reliable, and cost-effective solutions for all your shipping
                        and delivery needs. Our experienced team and extensive network enable us to handle a wide range
                        of logistics services, including:</p>

                    <ul style=" color: black;margin: 5px;">
                        <li>Warehousing and Storage</li>
                        <li>Transportation and Delivery</li>
                        <li>Supply Chain Management</li>
                    </ul>

                    <p>At Andrelin Logistics, we prioritize:</p>

                    <ul style=" color: black;margin: 5px;">
                        <li>Timely and accurate delivery</li>
                        <li>Secure and safe handling of goods</li>
                        <li>Clear communication and tracking</li>
                        <li>Competitive pricing and flexible solutions</li>
                    </ul>

                    <p>Whether you're a business or individual, we strive to exceed your expectations and build
                        long-lasting relationships. Trust us to move your goods with care and precision.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--primary" data-bs-dismiss="modal">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Andrelin Electrical -->
    <div class="modal fade" id="electricalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Andrelin Electrical</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="color: black;text-align: justify;">
                        Welcome to Andrelin Electrical, your trusted experts in electrical solutions. We design,
                        install,
                        and maintain innovative electrical systems for homes, businesses, and industries. Our team of
                        licensed electricians and engineers deliver top-notch services, ensuring safety, efficiency, and
                        reliability.</p>

                    <p>Our expertise includes:</p>
                    <ul style=" color: black;margin: 5px;">
                        <li>Electrical Installations and Upgrades</li>
                        <li>Maintenance and Repairs</li>
                        <li>Solar and Renewable Energy Systems</li>
                        <li>Electrical Testing and Inspections</li>
                        <li>Data and Communication Cabling</li>
                    </ul>

                    <p>At Andrelin Electrical, we prioritize:</p>
                    <ul style=" color: black;margin: 5px;">
                        <li>Safety and Compliance</li>
                        <li>Energy Efficiency and Sustainability</li>
                        <li>Quality Workmanship and Materials</li>
                        <li>Timely and Budget-Friendly Solutions</li>
                        <li>Exceptional Customer Service</li>
                    </ul>

                    <p>Trust us to power your home, business, or project with expertise and care. Contact us today to
                        learn more!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--primary" data-bs-dismiss="modal">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!--
   ============================
   Footer #1
   ============================
   -->
    <footer class="footer footer-1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <!--  End .col-lg-5-->
                    <div class="col-12 col-lg-4 col-md-4 col-lg-3 mb-3">
                        <div class="footer-widget widget-contact">
                            <div class="widget-content">
                                <ul>
                                    <li class="phone"><a href="tel:+263 774299888">HARARE CBD</a></li>
                                    <li class="email">Email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Office: <a
                                            href="tel:+263 242 307 362">+263
                                            242 307 362</a>
                                    </li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Office WhatsApp: <a
                                            href="tel:+263 71 921 5274">+263 71 921 5274</a></li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Tatenda Net: <a
                                            href="tel:+263 717835648">
                                            +263 78 747 0629</a>
                                    </li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Tatenda: <a
                                            href="tel:+263 78 722 3255">
                                            +263 78 722 3255</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Vincent: <a
                                            href="tel:+263 078 727 2702">
                                            +263 78 727 2702</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Andrew: <a
                                            href="tel:+263 774299888">+263
                                            774299888</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Linsey: <a
                                            href="tel:+263 774 189 886">+263
                                            774189886</a>
                                    </li>

                                    <li class="address" style="margin-bottom: 50px;">
                                        <p style="color: white;height: 80px;">Harare CBD
                                            Leopold Takawira/Jason Moyo
                                            Phoenix Mall 🏬 Shop C12,Second Floor
                                            <br/>
                                            Corner Building Next To NOCZIM / NOIC
                                        </p>
                                    </li>
                                    <div class="mb-3">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d279.43311842472133!2d31.04392604385414!3d-17.823997400438795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a547c44acb4b%3A0x6c7ec4e7663c9cce!2sCorner%20takawira%20and%20Jason%20moyo!5e1!3m2!1sen!2szw!4v1715172043160!5m2!1sen!2szw"
                                            width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-lg-3 mb-3">
                        <div class="footer-widget widget-contact">
                            <div class="widget-content">
                                <ul>
                                    <li class="phone"><a href="tel:+263 242 307 362">AVONDALE, HARARE</a></li>
                                    <li class="email">Email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Office: <a
                                            href="tel:+263 242 307 362">+263
                                            242 307 362</a>
                                    </li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Office WhatsApp: <a
                                            href="tel:+263 71 921 5274">+263 71 921 5274</a></li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Tatenda: <a
                                            href="tel:+263 078 747 0629">
                                            +263 078 747 0629</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Kudakwashe: <a
                                            href="tel:+263 717835648">
                                            +263 787 227 364</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Redemption: <a
                                            href="tel:+263 774 189 886">+263 078 722 835</a></li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Andrew: <a
                                            href="tel:+263 774299888">+263
                                            774299888</a>
                                    </li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Linsey: <a
                                            href="tel:+263 774 189 886">+263
                                            774189886</a>
                                    </li>

                                    <li class="address" style="margin-bottom: 50px;">
                                        <p style="color: white;height: 80px;">64A Connaught Rd, Harare,Zimbabwe. <br/>
                                            Close To King George Rd / Connaught Rd TRAFFIC LIGHTS ( Roughly 10m - 15m
                                            From the Traffic Lights, Cream Durawall With Maroon Skirting ), Where There
                                            Is An ECONET WIRELESS TRANSMITTER / TOWER / BOOSTER
                                        </p>
                                    </li>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.4756936184568!2d31.032929508722127!3d-17.796826475736435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a59d8504c329%3A0x343dd98d65ed9eb3!2s64A%20Connaught%20Rd%2C%20Harare!5e1!3m2!1sen!2szw!4v1715171791693!5m2!1sen!2szw"
                                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-lg-3 mb-3">
                        <div class="footer-widget widget-contact">
                            <div class="widget-content">
                                <ul>
                                    <li class="phone"><a href="tel:+263 242 307 362"> MASVINGO</a></li>
                                    <li class="email">Email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Office: <a
                                            href="tel:+263 242 307 362">+263
                                            242 307 362</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Office WhatsApp: <a
                                            href="tel:+263 71 921 5274">+263 71 921 5274</a></li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Daina: <a
                                            href="tel:+263 71 783 5640">
                                            +263 71 783 5640</a>
                                    </li>

                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Daina: <a
                                            href="tel:+263 077 902 2647">
                                            +263 077 902 2647</a></li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Joseph:
                                        <a href="tel:+26378 727 6796">
                                            +263 78 727 6796
                                        </a></li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Andrew: <a
                                            href="tel:+263 774299888">+263
                                            774299888</a>
                                    </li>
                                    <li style="margin-top: -40px;font-weight: normal;" class="email">Linsey: <a
                                            href="tel:+263 774 189 886">+263
                                            774189886</a>
                                    </li>


                                    <li class="address" style="margin-bottom: 50px;">
                                        <p style="color: white;height: 80px;">
                                            56 Mugabe Road
                                            Opposite Metro-Peach Downtown Next To MUSA HARDWARE, Neighbors To GREEN
                                            LIGHT DRIVING SCHOOL
                                            ALONG MUTARE ROAD

                                        </p>
                                    </li>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4411.0928864748275!2d30.831598275878495!3d-20.07233168134839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ecce11c391c2a99%3A0x1a92a593397b49e1!2s56%20A4%2C%20Masvingo!5e1!3m2!1sen!2szw!4v1715171645479!5m2!1sen!2szw"
                                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  End .col-lg-3-->
                </div>
                <!-- End .row-->
            </div>
            <!--  End .container-->
        </div>
        <!--  End .footer-top-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-copyright">
                            <div class="copyright"><span>&copy; {{date('Y')}} Andrelin Enterprises - Designed by
                                    <a style="text-transform: capitalize;color: #3ff806;"
                                       href="https://leadingdigital.africa" target="_blank"> Leading Digital</a> </span>
                                <ul class="list-unstyled social-icons">
                                    <li>
                                        <a class="share-facebook" href="https://www.facebook.com/andrelin.zim"
                                           target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
                                    </li>
                                    <li>
                                        <a class="share-twitter" href="https://twitter.com/AndrelinEnterp1"
                                           target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a>
                                    </li>
                                    <li>
                                        <a class="share-instagram" href="https://instagram.com/andrelin_enterprises"
                                           target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
                                    </li>
                                    <li>
                                        <a class="share-tiktok" href="https://tiktok.com/@andrelinsola" target="_blank"><i
                                                class="fa-brands fa-tiktok"></i> TikTok</a>
                                    </li>
                                    <li>
                                        <a class="share-whatsapp" href="https://wa.me/263774299888" target="_blank"><i
                                                class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  End .row-->
        </div>
        <!--  End .footer-bottom-->
    </footer>
    <!--
    ============================
    BackToTop #1
    ============================
    -->
    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
<!--  Footer Scripts==
-->
<script src="{{ asset('web/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('web/assets/js/vendor.js') }}"></script>
<script src="{{ asset('web/assets/js/functions.js') }}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/66163f121ec1082f04e0bcfb/1hr3ecor7';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

@stack('scripts')
</body>
</html>
