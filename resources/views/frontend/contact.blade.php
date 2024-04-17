@extends('frontend.layouts.app')

@section('content')

<div class="sub-banner-section contact-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Contact Us</h1>
                            <p class="text-center" data-aos="fade-right">Suis aute irure dolor in reprehenderit in volurate velit cillum
                                nulla
                                pariatur nostrud exercitation.</p>
                            <div class="btn_wrapper">
                                <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span"> Contact</span>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
        </section>
    </div>
</div>
<!-- MESSAGE SECTION -->
<section class="message_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="message_content">
                    <h5>Get in Touch.</h5>
                    <h2>Send us a Message</h2>
                    <p>Guia voluptas sit aspernatur aut odit aut fugit, sed quia exercitationem ullam corporis
                        laboriosam</p>
                    <form id="contactpage" method="POST" action="{{ route('frontend.contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="first_name" id="fname" class="form-control"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="last_name" id="lname" class="form-control form_style"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="tel" name="phone" id="phonenum" class="form-control"
                                        placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="email" name="email" id="emailaddrs" value="email"
                                        class="form-control form_style" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                   
                                    <select name="service" id="service" class="form-select">
                                        <option selected disabled>Services</option>
                                        <option value="women_health">Women Health</option>
                                        <option value="physiotherapy">Physiotherapy</option>
                                        <option value="yoga">Yoga</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" form-group mb-0">
                                    <textarea rows="3" name="message" id="comment" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_wrapper">
                            <button type="submit" id="started">Get Started</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box box_padding">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('images/contact_location.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Location</h3>
                                <p class="mb-0">121 King Street, Melbourne Victoria 3000 Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('images/contact_phone.png ') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Phone</h3>
                                <p><a href="tel:(+61383766284)" class="text-decoration-none">(+61 3 8376 6284)</a></p>
                                <p class="mb-0"><a href="tel:(+80023456789)" class="text-decoration-none">(+800 2345
                                        6789)</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box mb-0">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('images/contact_mail.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Email</h3>
                                <p><a href="mailto:info@yogastic.com" class="text-decoration-none">info@yogastic.com</a>
                                </p>
                                <p class="mb-0"><a href="mailto:yogastic@gmail.com"
                                        class="text-decoration-none">yogastic@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT MAP SECTION -->
<div class="contact_map_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7002.747430236534!2d77.3425918!3d28.6485268!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390cfbc47d49c4a9%3A0xdd53c603f71f8207!2sOMANSH%20PHYSIOTHERAPY%20YOG%20AND%20PREGNANCY%20CLINIC%20Gate%20No-%201%20Shop%20no%20290%2C%20Basement%20Opposite%20Ramprastha%20Green%20No%20-1%20next%20to%20Rockers%20Pizza%2C%20near%20Ramprastha%20Greens%2C%20Sector%204%2C%20Vaishali%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201010!3m2!1d28.6485268!2d77.3425918!5e0!3m2!1sen!2sin!4v1712644738384!5m2!1sen!2sin"
                width="1920" height="728" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- SUBSCRIBE SECTION -->
<section class="subscribe_section contact_subscribe_section">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="subscribe_content">
                        <h5>Subscribe now</h5>
                        <h2>Get the Latest Updates With Our Newletter</h2>
                        <form method="POST">
                            <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="emailadd" class="form-control"
                                        placeholder="Enter You Email">
                                    <button type="submit" name="btnsubmit" id="submitbutton">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <figure class="subscribe_image mb-0">
                        <img src="{{ asset('images/subscribe_image.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER SECTION -->
<section class="footer-section">
    <div class="container">
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-lg-block d-none">
                    <div class="footer_logo">
                        <a href="./index.html" class="text-decoration-none">
                            <figure class="mb-0"><img
                                    src="{{ asset('images/logo.png') }}" alt=""
                                    class="img-fluid"></figure>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="about_col">
                        <h4>About Us</h4>
                        <ul class="list-unstyled">
                            <li>
                                <p>Quisuam est rui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sea...
                                </p>
                            </li>
                            <li class="icons"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                            </li>
                            <li class="icons"><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="icons"><a href="#"><i class="fa-brands fa-linkedin-in mr-0"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-md-block d-none">
                    <div class="links_col">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                        <li>
                                <a href="{{ route('frontend.index') }}l">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="./services.html">Services</a>
                            </li>
                            <li>
                                <a href="./team.html">Team</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.contact.create') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-sm-block d-none">
                    <div class="contact_col">
                        <h4>Contact Info</h4>
                        <ul class="list-unstyled">
                            <li class="contact_icons">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+61383766284" class="text-decoration-none">+61 3 8376 6284</a>
                            </li>
                            <li class="contact_icons">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                                <a href="mailto:Info@yogastic.om" class="text-decoration-none">Info@yogastic.om</a>
                            </li>
                            <li class="mb-0">
                                <i class="fa-solid fa-location-dot location"></i>
                                <span>21 King Street Melbourne, 3000, Australia</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-portion">
        <div class="copyright col-xl-12">
            <p>Copyright 2022, Yogastic.com All Rights Reserved.</p>
        </div>
    </div>
    <div class="footer_shape right_shape">
        <figure class="mb-0"><img src="{{ asset('images/footer_shape.png') }}"
                alt="" class="img-fluid"></figure>
    </div>
</section>


@endsection