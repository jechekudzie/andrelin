@extends('layouts.web')

@section('content')

    <style>
        .contact-info {
            background-color: #f7f7f7; /* Light grey background for better readability */
            padding: 20px;
            border-radius: 8px; /* Rounded corners for a modern look */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        .contact-info h3 {
            color: #333; /* Dark grey color for text */
            margin-bottom: 15px; /* Space below headings */
        }

        .contact-info ul {
            list-style: none; /* Remove default list styling */
            padding: 0;
            margin: 0;
        }

        .contact-info li {
            margin-bottom: 10px; /* Space between list items */
            color: #555; /* Medium grey color for text */
            font-size: 16px; /* Larger font for readability */
        }

        .contact-info li a {
            color: #0067d2; /* Brand color for links */
            text-decoration: none; /* No underline */
            transition: color 0.3s; /* Smooth transition for hover effect */
        }

        .contact-info li a:hover {
            color: #004899; /* Darker blue on hover for better interaction */
        }

        .contact-info iframe {
            margin-top: 20px; /* Space above the map */
            border-radius: 8px; /* Rounded corners for the map */
        }

        .address-description {
            color: #666; /* Dark gray for the address for better readability */
            line-height: 1.6; /* Increased line-height for legibility */
        }

    </style>
    <div class="container mt-4">
        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="contact-info">
                    <h3>HARARE CBD</h3>
                    <ul class="list-unstyled">
                        <li><a href="tel:+263774299888">+263 774 299 888</a></li>
                        <li>Email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises</a></li>
                        <li class="email">Office: <a href="tel:+263 242 307 362">+263
                                242 307 362</a>
                        </li>

                        <li class="email">Office WhatsApp: <a href="tel:+263 71 921 5274">+263 71 921 5274</a></li>

                        <li class="email">Tatenda Net: <a href="tel:+263 717835648">
                                +263 78 747 0629</a>
                        </li>

                        <li class="email">Tatenda: <a href="tel:+263 78 722 3255">
                                +263 78 722 3255</a>
                        </li>
                        <li class="email">Vincent: <a href="tel:+263 078 727 2702">
                                +263 78 727 2702</a>
                        </li>
                        <li class="email">Andrew: <a href="tel:+263 774299888">+263
                                774299888</a>
                        </li>
                        <li class="email">Linsey: <a href="tel:+263 774 189 886">+263
                                774189886</a>
                        </li>
                        <li style="height: 80px;margin-bottom: 20px">Address: Harare CBD, Leopold Takawira/Jason Moyo,
                            Phoenix Mall Shop C12, Second Floor, Corner
                            Building Next To NOCZIM / NOIC
                        </li>
                        <li>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d279.43311842472133!2d31.04392604385414!3d-17.823997400438795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a547c44acb4b%3A0x6c7ec4e7663c9cce!2sCorner%20takawira%20and%20Jason%20moyo!5e1!3m2!1sen!2szw!4v1715172043160!5m2!1sen!2szw"
                                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="contact-info">
                    <h3>AVONDALE, HARARE</h3>
                    <ul class="list-unstyled">
                        <li><a href="tel:+263242307362">+263 242 307 362</a></li>
                        <li>Email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises</a></li>
                        <li class="email">Office: <a href="tel:+263 242 307 362">+263
                                242 307 362</a>
                        </li>

                        <li class="email">Office WhatsApp: <a href="tel:+263 71 921 5274">+263 71 921 5274</a></li>

                        <li class="email">Tatenda: <a href="tel:+263 078 747 0629">
                                +263 078 747 0629</a>
                        </li>
                        <li class="email">Kudakwashe: <a href="tel:+263 717835648">
                                +263 787 227 364</a>
                        </li>
                        <li class="email">Redemption: <a href="tel:+263 774 189 886">+263 078 722 835</a></li>

                        <li class="email">Andrew: <a href="tel:+263 774299888">+263
                                774299888</a>
                        </li>

                        <li class="email">Linsey: <a href="tel:+263 774 189 886">+263
                                774189886</a>
                        </li>

                        <li style="height: 80px;margin-bottom: 20px">Address: 64A Connaught Rd, Harare, Zimbabwe. Near
                            King
                            George Rd/Connaught Rd Traffic Lights,
                            next to Econet Wireless Transmitter/Tower.
                        </li>
                        <li>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.4756936184568!2d31.032929508722127!3d-17.796826475736435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a59d8504c329%3A0x343dd98d65ed9eb3!2s64A%20Connaught%20Rd%2C%20Harare!5e1!3m2!1sen!2szw!4v1715171791693!5m2!1sen!2szw"
                                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="contact-info">
                    <h3>MASVINGO</h3>
                    <ul class="list-unstyled">
                        <li><a href="tel:+263242307362">+263 242 307 362</a></li>
                        <li>Email: <a href="mailto:info@andrelin.enterprises">info@andrelin.enterprises</a></li>
                        <li class="email">Office: <a href="tel:+263 242 307 362">+263
                                242 307 362</a>
                        </li>
                        <li class="email">Office WhatsApp: <a href="tel:+263 71 921 5274">+263 71 921 5274</a></li>

                        <li class="email">Daina: <a href="tel:+263 71 783 5640">
                                +263 71 783 5640</a>
                        </li>

                        <li class="email">Daina: <a href="tel:+263 077 902 2647">
                                +263 077 902 2647</a></li>
                        <li class="email">Joseph:
                            <a href="tel:+26378 727 6796">
                                +263 78 727 6796
                            </a></li>
                        <li class="email">Andrew: <a href="tel:+263 774299888">+263
                                774299888</a>
                        </li>
                        <li class="email">Linsey: <a href="tel:+263 774 189 886">+263
                                774189886</a>
                        </li>
                        <li style="height: 80px;margin-bottom: 20px">Address: 56 Mugabe Road, Opposite Metro-Peach
                            Downtown,
                            Next to Musa Hardware, Neighbors to
                            Green Light Driving School along Mutare Road, Masvingo.
                        </li>
                        <li>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4411.0928864748275!2d30.831598275878495!3d-20.07233168134839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ecce11c391c2a99%3A0x1a92a593397b49e1!2s56%20A4%2C%20Masvingo!5e1!3m2!1sen!2szw!4v1715171645479!5m2!1sen!2szw"
                                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="container mb-4">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
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
        </div>

    </div>
    <!-- End .container-->

@endsection
