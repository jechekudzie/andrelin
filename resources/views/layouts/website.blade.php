<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>ANDRELIN ENTERPRISES</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Rubik:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav css -->
    <link href="{{ asset('website/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper css -->
    <link rel="stylesheet" href="{{ asset('website/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome icon css-->
    <link href="{{ asset('website/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated css -->
    <link href="{{ asset('website/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific css -->
    <link href="{{ asset('website/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main custom css -->
    <link href="{{ asset('website/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('head')
</head>

<body class="tt-magic-cursor">

<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="{{asset('logo.png')}}" alt=""></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Magic Cursor Start -->
<div id="magic-cursor">
    <div id="ball"></div>
</div>
<!-- Magic Cursor End -->

<!-- Topbar Section Start -->
<div class="topbar wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Topbar Contact Information Start -->
                <div class="topbar-contact-info">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-envelope"></i> info@andrelin.enterprise</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone"></i> 0242 307 362</a></li>
                    </ul>
                </div>
                <!-- Topbar Contact Information End -->
            </div>

            <div class="col-md-4">
                <!-- Topbar Social Links Start -->
                <div class="header-social-links">
                    <ul>
                        <li><a style="color: white;" href="https://www.facebook.com/andrelin.zim" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a style="color: white;" href="https://twitter.com/AndrelinEnterp1" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a style="color: white;" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a style="color: white;" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Topbar Social Links End -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->

<!-- Header Start -->
<header class="main-header" style="height: 100px;">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('logo.png')}}" style="width: 65px" alt="Logo">
                </a>
                <!-- Logo End -->
                <!-- Main Menu start -->
                <div class="collapse navbar-collapse main-menu">
                    <ul class="navbar-nav mr-auto" id="menu">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Andrelin Enterprises</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/shop')}}">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item highlighted-menu"><a style="color: white;" class="nav-link" href="{{ url('/cart') }}">Cart <span
                                    id="cartCount"></span> </a></li>
                    </ul>
                </div>
                <!-- Main Menu End -->

                <div class="navbar-toggle"></div>
            </div>
        </nav>

        <div class="responsive-menu"></div>
    </div>
</header>

<!-- Header End -->
@yield('content')

<!-- Footer Ticker Start -->
<div class="footer-ticker">
    <div class="scrolling-ticker">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span>Generate Your Own Power</span>
                <span>Reap the Returns</span>
                <span>Heal the World</span>
                <span>Efficiency & Power</span>
                <span>24*7 Support</span>
            </div>

            <div class="scrolling-content">
                <span>Generate Your Own Power</span>
                <span>Reap the Returns</span>
                <span>Heal the World</span>
                <span>Efficiency & Power</span>
                <span>24*7 Support</span>
            </div>
        </div>
    </div>
</div>
<!-- Footer Ticker End -->

<!-- Footer Start -->
<footer class="main-footer">
    <!-- Footer Contact Start -->
    <div class="footer-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Footer Contact Box Start -->
                    <div class="footer-contact-box wow fadeInUp" data-wow-delay="0.25s">
                        <div class="contact-icon-box">
                            <img src="images/icon-email.svg" alt="">
                        </div>

                        <div class="footer-contact-info">
                            <h3>Support & Email</h3>
                            <p>info@andrelin.enteprise</p>
                        </div>
                    </div>
                    <!-- Footer Contact Box End -->
                </div>

                <div class="col-lg-4">
                    <!-- Footer Contact Box Start -->
                    <div class="footer-contact-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-icon-box">
                            <img src="images/icon-phone.svg" alt="">
                        </div>

                        <div class="footer-contact-info">
                            <h3>Customer Support</h3>
                            <p>+0242 307 3628</p>
                        </div>
                    </div>
                    <!-- Footer Contact Box End -->
                </div>

                <div class="col-lg-4">
                    <!-- Footer Contact Box Start -->
                    <div class="footer-contact-box wow fadeInUp" data-wow-delay="0.75s">
                        <div class="footer-contact-info">
                            <h3>Our Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.892357329988!2d31.030370775830864!3d-17.796755383161862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a5fa2b62af71%3A0x23e0c485a346e2a0!2sAndrelin%20Solar%20-%20Avondale!5e0!3m2!1sen!2szw!4v1713155470854!5m2!1sen!2szw" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- Footer Contact Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Contact End -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Mega Footer Start -->
                <div class="mega-footer">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <!-- Footer About Start -->
                            <div class="footer-about">
                                <figure>
                                    <img src="images/footer-logo.svg" alt="">
                                </figure>
                                <p>
                                    We are committed to being relevant and becoming a premier
                                    enterprise to all our stakeholders through delivering result
                                    oriented projects, competent training to our personnel and
                                    sustainable green solutions.
                                </p>
                            </div>
                            <!-- Footer About End -->

                            <!-- Footer Social Link Start -->
                            <div class="footer-social-links">
                                <ul>
                                    <li><a style="color: white;" href="https://www.facebook.com/andrelin.zim" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a style="color: white;" href="https://twitter.com/AndrelinEnterp1" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a style="color: white;" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a style="color: white;" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Social Link End -->
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>Quick Links</h2>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">About Andrelin Enterprises</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>Services</h2>
                                <ul>
                                    <li><a href="#">Site Assessments</a></li>
                                    <li><a href="#">Consultancy</a></li>
                                    <li><a href="#">Installations</a></li>
                                    <li><a href="#">System Design & Re-Work</a></li>
                                    <li><a href="#">Maintenance</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>Useful Links</h2>
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Term & Conditions</a></li>
                                    <li><a href="#">Warranty</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Damage Policy</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>
                    </div>
                </div>
                <!-- Mega Footer End -->

                <!-- Copyright Footer Start -->
                <div style="background-color: white; color: black;" class="footer-copyright">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Footer Copyright Content Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © {{date('Y')}} Andrelin Enterprises.</p>
                            </div>
                            <!-- Footer Copyright Content End -->
                        </div>
                    </div>
                </div>
                <!-- Copyright Footer End -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Jquery Library File -->
<script src="{{ asset('website/js/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
<!-- Validator js file -->
<script src="{{ asset('website/js/validator.min.js') }}"></script>
<!-- SlickNav js file -->
<script src="{{ asset('website/js/jquery.slicknav.js') }}"></script>
<!-- Swiper js file -->
<script src="{{ asset('website/js/swiper-bundle.min.js') }}"></script>
<!-- Counter js file -->
<script src="{{ asset('website/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.counterup.min.js') }}"></script>
<!-- Magnific js file -->
<script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
<!-- SmoothScroll -->
<script src="{{ asset('website/js/SmoothScroll.js') }}"></script>
<!-- Parallax js -->
<script src="{{ asset('website/js/parallaxie.js') }}"></script>
<!-- MagicCursor js file -->
<script src="{{ asset('website/js/gsap.min.js') }}"></script>
<script src="{{ asset('website/js/magiccursor.js') }}"></script>
<!-- Text Effect js file -->
<script src="{{ asset('website/js/splitType.js') }}"></script>
<script src="{{ asset('website/js/ScrollTrigger.min.js') }}"></script>
<!-- Wow js file -->
<script src="{{ asset('website/js/wow.js') }}"></script>
<!-- Main Custom js file -->
<script src="{{ asset('website/js/function.js') }}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/66163f121ec1082f04e0bcfb/1hr3ecor7';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
@stack('scripts')
</body>
</html>
