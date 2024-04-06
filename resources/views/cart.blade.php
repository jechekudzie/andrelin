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
    <title>Solor - Solar & Renewable Energy HTML Template</title>
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
    <style>
        .project-content {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .vertical-center {
            vertical-align: middle !important;
        }
    </style>
</head>

<body class="tt-magic-cursor">

<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
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
                        <li><a href="#"><i class="fa-solid fa-envelope"></i> info@domain.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone"></i> +01 248 248 2481</a></li>
                    </ul>
                </div>
                <!-- Topbar Contact Information End -->
            </div>

            <div class="col-md-4">
                <!-- Topbar Social Links Start -->
                <div class="header-social-links">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Topbar Social Links End -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.svg" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu start -->
                <div class="collapse navbar-collapse main-menu">
                    <ul class="navbar-nav mr-auto" id="menu">
                        <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                        <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="service-single.html">Service Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="project-single.html">Project Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Single</a></li>
                                <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                <li class="nav-item"><a class="nav-link" href="team-single.html">Team Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="faq.html">FAQs</a></li>
                                <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item highlighted-menu"><a class="nav-link" href="#">Cart <span
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

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime">Our Shop</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Our Projects Page Start -->
<div class="our-projects">
    <div class="container">
        <table style="width: 100%;" class="table table-condensed" >
            <thead class="bg-neutral-50 border-b border-neutral-200">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                    Image
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                    Name
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                    Description
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                    Quantity
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                    Price
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-neutral-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-neutral-200" id="cartContainer">

            </tbody>
        </table>
    </div>
</div>
<!-- Our Projects Page End -->

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
                            <p>info@domainname.com</p>
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
                            <p>+01 547 547 5478</p>
                        </div>
                    </div>
                    <!-- Footer Contact Box End -->
                </div>

                <div class="col-lg-4">
                    <!-- Footer Contact Box Start -->
                    <div class="footer-contact-box wow fadeInUp" data-wow-delay="0.75s">
                        <div class="contact-icon-box">
                            <img src="images/icon-location.svg" alt="">
                        </div>

                        <div class="footer-contact-info">
                            <h3>Our Location</h3>
                            <p>Street no, City, Country 123456</p>
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
                                <p>Green Energy is a long established fact that a reader will be distracted by the
                                    readable content of a page when.</p>
                            </div>
                            <!-- Footer About End -->

                            <!-- Footer Social Link Start -->
                            <div class="footer-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
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
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
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
                                    <li><a href="#">Consultancy</a></li>
                                    <li><a href="#">Solar System</a></li>
                                    <li><a href="#">Solar Panel</a></li>
                                    <li><a href="#">Style Guide</a></li>
                                    <li><a href="#">License</a></li>
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
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Footer Copyright Content Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © 2024 Solor. All rights reserved.</p>
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
<script>

    // Retrieve cart data from sessionStorage
    const cartData = sessionStorage.getItem('cart');

    // Parse cart data into an object
    const cart = JSON.parse(cartData);

    // Reference to the element where you want to display the cart items
    const cartContainer = document.getElementById('cartContainer');

    function generateCartItemHTML(product) {
        return `
        <tr class="cart-item">
            <td class="vertical-center"><img style="width: 200px; padding: 5px" src="${product.image}"></td>
            <td class="vertical-center">${product.name}</td>
            <td class="vertical-center">${product.description}</td>
            <td class="vertical-center" style="width: 35px"><input type="number" value="1"></td>
            <td class="vertical-center">$${product.customer_price}</td>
            <td class="vertical-center"><button class="remove-from-cart btn btn-danger" data-id="${product.id}">Remove</button></td>
        </tr>
    `;
    }


    // Function to render cart view
    function renderCart() {
        // Clear previous cart items
        cartContainer.innerHTML = '';

        // Check if cart is not empty
        if (cart) {
            // Iterate over each item in the cart and generate HTML
            Object.values(cart).forEach(product => {
                // Generate HTML for each cart item
                const cartItemHTML = generateCartItemHTML(product);
                // Append cart item HTML to cart container
                cartContainer.innerHTML += cartItemHTML;
            });
        }
    }

    // Call renderCart function to initially render the cart view
    renderCart();

    // Event listener for remove from cart button
    cartContainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-from-cart')) {
            const productId = event.target.dataset.id;
            // Remove item from cart object
            delete cart[productId];
            // Update sessionStorage with updated cart
            sessionStorage.setItem('cart', JSON.stringify(cart));
            // Re-render cart view
            renderCart();
        }
    });


</script>
</body>
</html>
