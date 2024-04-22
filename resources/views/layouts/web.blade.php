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
    <link href="{{ asset('logo.png') }}" rel="icon"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet"/>
    <!-- Stylesheets -->
    <link href="{{ asset('web/assets/css/vendor.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet"/>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
            <div class="block-left">
                <p class="headline"><i class="energia-alert-Icon"></i> now hiring: <a href="{{url('#')}}">Senior Design
                        & Sales technician</a></p>
            </div>
            <div class="block-right">
                <div class="top-contact">
                    <div class="contact-infos"><i class="energia-email--icon"></i>
                        <div class="contact-body">
                            <p>email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises </a></p>
                        </div>
                    </div>
                    <div class="contact-infos"><i class="energia-clock-Icon"></i>
                        <div class="contact-body">
                            <p>hours: Mon-Sat: 8am – 7pm </p>
                        </div>
                    </div>
                </div>
                <!-- Start .social-links-->
                <div class="social-links">
                    <a class="share-facebook" href="https://www.facebook.com/andrelin.zim" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a class="share-twitter" href="https://twitter.com/AndrelinEnterp1" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a class="share-instagram" href="javascript:void(0)" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
                <!-- End .social-links-->
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu">
            <a class="navbar-brand" href="{{url('/website/index')}}">
                <img class="logo logo-dark" src="{{asset('logo.png')}}" alt="Andrelin Enterprises"/>
                <img class="logo logo-mobile" src="{{asset('logo.png')}}" alt="Andrelin Enterprises"/></a>
            <div class="module-holder module-holder-phone">
                <div class="module module-search">
                    <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                </div>
                <div class="module module-cart">
                    <div class="module-icon module-icon-cart"><i class="fas fa-shopping-cart"></i><span class="title">shop cart</span>
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

                    <li class="nav-item" id="contact" data-hover=""><a href="{{url('/website/index')}}"><span>Home</span></a></li>
                    <li class="nav-item" id="contact" data-hover=""><a href=""><span>Andrelin Enterprises</span></a></li>
                    <li class="nav-item" id="contact" data-hover=""><a href="{{url('/website/shop')}}"><span>Online Shop </span> <i class="fas fa-shopping-cart"></i></a></li>
                    <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Services</span></a>
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
                    <li class="nav-item" id="contact" data-hover=""><a href="{{url('/website/contact')}}"><span>Contact</span></a></li>
                </ul>
                <div class="module-holder">
                    <div class="module-call"><i class="icons-energiaphone-call"> </i>
                        <div>
                            <p>call us now:</p><a href="tel:+263 242 307 362">+263 242 307 362</a>
                        </div>
                    </div>
                    <div class="module module-search">
                        <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                    </div>
                    <div class="module-contact module-contact-2"><a class="btn btn--primary" href="request-quote.html">
                            Request Quote <i class="energia-arrow-right"></i></a>
                    </div>

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

    <!--
   ============================
   Footer #1
   ============================
   -->
    <footer class="footer footer-1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="footer-widget widget-links">
                            <div class="footer-widget-title">
                                <h5>company</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Andrelin Enterprises</a></li>
                                    <li><a href="#" style="color: white;">Shop</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="">Projects</a></li>
                                    <li><a href="">New & Updates</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  End .col-lg-2-->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                        <div class="footer-widget widget-links">
                            <div class="footer-widget-title">
                                <h5>Services</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="">Site Assessment</a></li>
                                    <li><a href="">Consultancy</a></li>
                                    <li><a href="">Installations</a></li>
                                    <li><a href="">System Design & Re-Work</a></li>
                                    <li><a href="">Maintenance</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  End .col-lg-2-->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                        <div class="footer-widget widget-links ">
                            <div class="footer-widget-title">
                                <h5>support</h5>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="">Terms & Conditions</a></li>
                                    <li><a href="">Shipping Policy</a></li>
                                    <li><a href="">Delivery Tips</a></li>
                                    <li><a href="">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  End .col-lg-5-->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-widget widget-contact">
                            <div class="widget-content">
                                <ul>
                                    <li class="phone"><a href="tel:+263 242 307 362">+263 242 307 362</a></li>
                                    <li class="email">Email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises</a>
                                    </li>
                                    <li class="address">
                                        <p style="color: white;">64A Connaught Rd, Harare,Zimbabwe.</p>
                                    </li>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.892357329988!2d31.030370775830864!3d-17.796755383161862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a5fa2b62af71%3A0x23e0c485a346e2a0!2sAndrelin%20Solar%20-%20Avondale!5e0!3m2!1sen!2szw!4v1713155470854!5m2!1sen!2szw"
                                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
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
                                    <a style="text-transform: capitalize;color: #3ff806;" href="https://leadingdigital.africa" target="_blank"> Leading Digital</a> </span>
                                <ul class="list-unstyled social-icons">
                                    <li>
                                        <a class="share-facebook" href="https://www.facebook.com/andrelin.zim" target="_blank"><i class="fa fa-facebook"></i> facebook</a>
                                    </li>
                                    <li>
                                        <a class="share-twitter" href="https://twitter.com/AndrelinEnterp1" target="_blank"><i class="fa fa-twitter"></i> twitter</a>
                                    </li>
                                    <li>
                                        <a class="share-instagram" href="javascript:void(0)" target="_blank"><i class="fa fa-instagram"></i> instagram</a>
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

@stack('scripts')
</body>
</html>
