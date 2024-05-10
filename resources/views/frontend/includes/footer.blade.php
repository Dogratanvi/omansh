<!-- FOOTER SECTION -->
<!-- SUBSCRIBE SECTION -->
<section class="subscribe_section contact_subscribe_section">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="subscribe_content">
                        <h5>Subscribe now</h5>
                        <h2>Get the Latest<br> Updates With Our Newsletter</h2>
                        <form action="{{ url('newsletter')  }}" method="POST" enctype="multipart/form-data"
                            id="newsletter_form">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="emailadd" class="form-control"
                                        placeholder="Enter You Email" required>
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
                                <a href="tel:{{$settings[12]->value}}"
                                    class="text-decoration-none">{{$settings[12]->value}}</a>
                            </li>
                            <li class="contact_icons">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                                <a href="mailto:{{$settings[1]->value}}" class="text-decoration-none">
                                    {{$settings[1]->value}}</a>
                            </li>
                            <li class="mb-0 about-addrsss">
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
                <div class="col-md-4 copyright">
                    <p
                        class=" text-white text-lg-start text-sm-start text-start text-md-start text-xl-start text-xs-start">
                        Copyright 2024 | Omansh.org
                    </p>
                </div>
                <div class="col-md-4  copyright">
                    <p
                        class="footer-text text-white text-lg-center text-sm-start text-start text-md-center text-xl-center text-xs-start">
                        Website designed and developed by<a href="https://pulseplaydigital.com/"
                            target="_blank"> PulsePlay Digital</a></p>
                </div>
                <div class="col-md-4  copyright">
                    <p
                        class="footer-text text-white text-lg-end text-sm-start text-start text-md-end text-xl-end text-xs-start">
                        <a class="pe-2" href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a>|<a class="ps-2"
                            href="{{ route('frontend.terms&condition') }}">Terms & Condition</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_shape right_shape">
        <figure class="mb-0"><img src="{{ asset('images/footer_shape.png') }}" alt="footer-shape" class="img-fluid">
        </figure>
    </div>

    <button class="arrow-top border-0" onclick="topFunction()" id="myBtn" title="Go to top"><i
            class="fas fa-chevron-up"></i></button>
    <a href="{{$settings[6]->value}}" target="_blank" class="whtsapp"><svg width="60" height="60"
            viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_138_756)">
                <path
                    d="M1.28773 29.6409C1.28633 34.6821 2.61349 39.6044 5.13707 43.943L1.04639 58.7667L16.3313 54.7891C20.5588 57.0733 25.2956 58.2702 30.109 58.2705H30.1217C46.0118 58.2705 58.9467 45.4372 58.9535 29.6635C58.9565 22.02 55.9601 14.8325 50.516 9.42511C45.0729 4.01813 37.8337 1.03883 30.1205 1.03534C14.2285 1.03534 1.29453 13.8679 1.28797 29.6409"
                    fill="url(#paint0_linear_138_756)" />
                <path
                    d="M0.25853 29.6316C0.25689 34.8542 1.63162 39.9526 4.24517 44.4465L0.0078125 59.8016L15.8407 55.6814C20.2032 58.0421 25.115 59.2867 30.1129 59.2886H30.1258C46.586 59.2886 59.9856 45.9937 59.9926 29.6553C59.9954 21.7372 56.8912 14.2914 51.2526 8.69023C45.6133 3.08977 38.1152 0.00325581 30.1258 0C13.6628 0 0.265091 13.293 0.25853 29.6316ZM9.68762 43.6726L9.09644 42.7412C6.61129 38.8193 5.29959 34.2872 5.30147 29.6335C5.30662 16.0533 16.4422 5.00465 30.1352 5.00465C36.7663 5.00744 42.9981 7.57302 47.6854 12.2279C52.3724 16.8833 54.9515 23.0716 54.9499 29.6535C54.9438 43.2337 43.8079 54.2837 30.1258 54.2837H30.116C25.6609 54.2814 21.2916 53.094 17.4812 50.85L16.5744 50.3163L7.1788 52.7612L9.68762 43.6726Z"
                    fill="url(#paint1_linear_138_756)" />
                <path
                    d="M22.6605 17.2437C22.1015 16.0105 21.5131 15.9856 20.9814 15.9639C20.5461 15.9453 20.0484 15.9467 19.5512 15.9467C19.0535 15.9467 18.2449 16.1326 17.5614 16.8733C16.8772 17.6146 14.9492 19.4063 14.9492 23.0502C14.9492 26.6944 17.6235 30.216 17.9963 30.7107C18.3695 31.2044 23.1589 38.9216 30.7442 41.8905C37.0482 44.3577 38.3311 43.867 39.6993 43.7433C41.0677 43.62 44.1147 41.9521 44.7363 40.2226C45.3584 38.4933 45.3585 37.0109 45.1719 36.7012C44.9854 36.3926 44.4877 36.2072 43.7414 35.837C42.9949 35.4665 39.326 33.6747 38.642 33.4274C37.9578 33.1805 37.4604 33.0572 36.9627 33.7988C36.465 34.5393 35.0359 36.2072 34.6003 36.7012C34.1652 37.1963 33.7296 37.2579 32.9835 36.8874C32.2368 36.5158 29.8334 35.7346 26.982 33.2116C24.7635 31.2484 23.2658 28.824 22.8304 28.0823C22.3951 27.3419 22.7838 26.9405 23.158 26.5714C23.4933 26.2395 23.9045 25.7065 24.278 25.2742C24.6501 24.8416 24.7743 24.533 25.0231 24.0391C25.2722 23.5446 25.1476 23.1121 24.9613 22.7416C24.7743 22.3712 23.3241 18.7081 22.6605 17.2437Z"
                    fill="white" />
            </g>
            <defs>
                <linearGradient id="paint0_linear_138_756" x1="2896.4" y1="5774.18" x2="2896.4" y2="1.03534"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#1FAF38" />
                    <stop offset="1" stop-color="#60D669" />
                </linearGradient>
                <linearGradient id="paint1_linear_138_756" x1="2999.25" y1="5980.16" x2="2999.25" y2="0"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F9F9F9" />
                    <stop offset="1" stop-color="white" />
                </linearGradient>
                <clipPath id="clip0_138_756">
                    <rect width="60" height="60" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </a>
</section>