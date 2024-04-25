<!-- FOOTER SECTION -->
<!-- SUBSCRIBE SECTION -->
<section class="subscribe_section contact_subscribe_section">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="subscribe_content">
                        <h5>Subscribe now</h5>
                        <h2>Get the Latest Updates With Our Newletter</h2>
                        <form action="{{ url('newsletter')  }}" method="POST" enctype="multipart/form-data"
                            id="newsletter_form">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="emailadd" class="form-control"
                                        placeholder="Enter You Email">
                                    <button type="submit" name="btnsubmit" id="submitbutton">Subscribe</button>
                                </div>
                            </div>
                        </form>
                        @if(session()->has('message'))
                        <p class="alert alert-success py-3 rounded-0 mt-1"> {{ session()->get('message') }}</p>
                        @endif
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

<section class="footer-section" id="footer_section">
    <div class="container">
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 d-lg-block">
                    <div class="footer_logo">
                        <a href="{{ route('frontend.index') }}"
                            class="text-decoration-none  text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">

                            <figure class="mb-0 img-fluid logo"><img src="{{ asset('img/footer-logo.png') }}"
                                    alt="logo">
                            </figure>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div
                        class="about_col  text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                        <h4>About Us</h4>
                        <ul
                            class="list-unstyled  text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                            <li>
                                <p>Omansh Health & Fitness: Empowering your journey towards optimal health with
                                    expertise and compassion. Discover wellness through our dedicated care - Yoga,
                                    Physiotherapy and Women Health.
                                </p>
                            </li>

                            <li class="icons">
                                <a href="{{$settings[2]->value}}" target="_blank"><i class="fa-brands fa-facebook-f"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href="{{$settings[9]->value}}" target="_blank"><i class="fa-brands fa-instagram"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href="{{$settings[4]->value}}" target="_blank"><i class="fa-brands fa-linkedin-in"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href="{{$settings[10]->value}}" target="_blank"><i class="fa-brands fa-google"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href="{{$settings[5]->value}}" target="_blank"><i class="fa-brands fa-youtube"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 d-md-block ">
                    <div
                        class="links_col  text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                        <h4>Quick Links</h4>
                        <ul
                            class="list-unstyled text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                      
                            <li>
                                <a href="{{ route('frontend.about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.services.womenhealth') }}">Women Health</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.services.physiotherapy') }}">Physiotherapy</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.services.yoga') }}">Yoga</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.blog.index') }}">Blog<a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.contact.create') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.feedback.form') }}">Feedback Form</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 d-sm-block ">
                    <div
                        class="contact_col  text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                        <h4>Contact Info</h4>
                        <ul
                            class="list-unstyled text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                            <li class="contact_icons">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:{{$settings[12]->value}}" class="text-decoration-none">{{$settings[12]->value}}</a>
                            </li>
                            <li class="contact_icons">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                                <a href="mailto:{{$settings[1]->value}}"
                                    class="text-decoration-none"> {{$settings[1]->value}}</a>
                            </li>
                            <li class="mb-0">
                                <i class="fa-solid fa-location-dot location"></i>
                                <span>
                                    {{$settings[11]->value}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-portion ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p
                        class=" text-white text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                        Copyright 2024 | Omansh.org
                    </p>
                </div>
                <div class="col-md-6  copyright">
                    <p
                        class="footer-text text-white text-lg-end text-sm-start text-start text-md-end text-xl-end text-xs-start">
                        Website designed and developed by<a href="https://pulseplaydigital.com/"
                            target="_blank"> PulsePlay Digital</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_shape right_shape">
        <figure class="mb-0"><img src="{{ asset('images/footer_shape.png') }}" alt="footer-shape" class="img-fluid">
        </figure>
    </div>
</section>