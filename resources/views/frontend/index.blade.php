@extends('frontend.layouts.app')

@section('content')
<div class="banner-section-outer">


    <!-- BANNER SECTION -->
    <section class="banner-section">
        <div class="container-fluid">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-md-left text-center">
                    <div class="banner-section-content">
                        <h5>WELCOME TO</h5>
                        <h1 data-aos="fade-up">OMANSH <br> <span class="ityped"></span></h1>
                        <p data-aos="fade-right">Tailored Solutions for Total Wellness: Your Destination for
                            Personalized Physiotherapy, Yoga, and Women's Health Care! </p>
                        <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none getstarted_btn" href="./index.html">Contact Us</a>
                        </div>

                        <!-- <a class="top-btn"  href="{{ route('frontend.index') }}#footer_section">
                           <i class="fa-solid fa-arrow-down-long"></i>
                        </a> -->
                        <figure class="banner_left_top_shape_inner left_shape mb-0">
                            <img src="{{ asset('img/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="banner-section-image">
                        <figure class="banner_left_bottom_shape left_shape mb-0">
                            <img src="{{ asset('images/banner_right_image.png') }}" alt="">
                        </figure>
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
    <!-- SOCIAL ICONS -->
    <div class="left_icons float-right " data-aos="fade-down">
        <div class="icon_content d-table-cell align-middle">
            <ul class="list-unstyled p-0 m-0">
                <li>
                    <a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-google" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- OUR SERVICES SECTION -->
<section class="services_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="services_content">
                    <h5>Our Services</h5>

                    <p>Explore a spectrum of services dedicated to your health and well-being</p>
                </div>
            </div>
        </div>
        <div class="row pt-3" data-aos="fade-up">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="services_box_content">
                    <div class="services_box_upper_portion">
                        <figure class="mb-0"><img src="{{ asset('img/women-health.png') }}" alt=""
                                class="img-fluid w-100"></figure>
                    </div>
                    <div class="services_box_lower_portion">
                        <h3>Women Health</h3>
                        <p>Our pelvic floor therapy and pregnancy support programmes are tailored to women's health. Our
                            specialists empower women at every step with customised therapies and caring assistance.
                            Support your health and well-being with personalised treatment.</p>
                        <div class="btn_wrapper">
                            <a href="./services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"> </i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="services_box_content">
                    <div class="services_box_upper_portion">
                        <figure class="mb-0"><img src="{{ asset('img/Physiotherapy.png') }}" alt=""
                                class="img-fluid w-100"></figure>
                    </div>
                    <div class="services_box_lower_portion">
                        <h3>Physiotherapy</h3>
                        <p>Explore our experienced physiotherapy treatments to improve your health and mobility. Our
                            staff uses evidence-based approaches to treat a variety of physical issues, providing
                            personalised treatment. Experience the path of rehabilitation with our devoted specialists.
                        </p>
                        <div class="btn_wrapper">
                            <a href="./services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="services_box_content">
                    <div class="services_box_upper_portion">
                        <figure class="mb-0"><img src="{{ asset('img/yoga.png') }}" alt="" class="img-fluid w-100">
                        </figure>
                    </div>
                    <div class="services_box_lower_portion">
                        <h3>Yoga</h3>
                        <p>Experience the transformational power of Yoga, where ancient practices meet contemporary
                            therapies. Our workshops promote comprehensive well-being by harmonising body, mind, and
                            spirit. Discover inner calm and physical strength in a caring and compassionate atmosphere
                            for beginners to expert practitioners.
                        </p>
                        <div class="btn_wrapper">
                            <a href="./services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="services_left_shape left_shape mb-0">
            <img src="{{ asset('images/services_left_shape.png') }}" alt="" class="img-fluid w-100">
        </figure>
    </div>
</section>
<!-- ABOUT US SECTION -->
<section class="aboutus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
                <div class="aboutus_image">
                    <figure class="mb-0"><img src="{{ asset('img/better-life.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="aboutus_content">
                    <h5>About us</h5>
                    <h2>Better Life With Optimal Health</h2>
                    <p>Every step towards health at Omansh Health & Fitness is based on care, knowledge, and a strong
                        desire to make people's lives better.</p>
                    <p>Our centre is more than just a health facility. It's a community committed to promoting health
                        and happiness. It was started by Dr. Garima Biswas, a leader in holistic health and an expert in
                        Pelvic Floor Rehabilitation. Through her 15+ years of deep knowledge of the human body and their
                        desire to spread the benefits of good health, we invite you to start a personalised journey to
                        becoming your best self.</p>
                    <p>At Omansh, we think that the best way to get the most out of your body is to combine ancient
                        methods with cutting-edge science.</p>

                    <div class="btn_wrapper">
                        <a href="{{ route('frontend.about') }}" class="text-decoration-none get_started_btn">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- OUR SPECIALTIES SECTION -->
<section class="our_specialties_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="our_specialties_heading_content">

                    <h2>Why Choose Us</h2>
                    <p>Empowering Your Health Journey with Compassion and Expertise</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                <div class="specialties_content_wrapper">
                    <div class="specialties_content s1">
                        <p class="specialties_name">Vinyasa Yoga</p>
                        <p class="specialties_paragraph">Dolor reaellendus temorius maiores alia</p>
                    </div>
                    <div class="specialties_content s2">
                        <p class="specialties_name">Slow Yoga</p>
                        <p class="specialties_paragraph">Rabore et dolore maga eiusmo rute aliua</p>
                    </div>
                    <div class="specialties_content s3">
                        <p class="specialties_name">Intuitive Yoga</p>
                        <p class="specialties_paragraph">Earum rerum hic tene sapiente delectus</p>
                    </div>
                    <div class="specialties_content s4">
                        <p class="specialties_name">Aroma Yoga</p>
                        <p class="specialties_paragraph">Neque orro quisquam est raui dolorem</p>
                    </div>
                    <figure class="specialties_left_line mb-0">
                        <img src="{{ asset('images/specialties_left_line.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 d-md-block d-none">
                <figure class="specialties_image mb-0">
                    <img src="{{ asset('images/specialties_image.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                <div class="specialties_content_wrapper">
                    <div class="specialties_content specialties_content2 s5">
                        <p class="specialties_name">Kundalini Yoga</p>
                        <p class="specialties_paragraph">Dolor reaellendus temorius maiores alia</p>
                    </div>
                    <div class="specialties_content specialties_content2 s6">
                        <p class="specialties_name">Bikram Yoga</p>
                        <p class="specialties_paragraph">Rabore et dolore mae eiusmo rute aliua</p>
                    </div>
                    <div class="specialties_content specialties_content2 s7">
                        <p class="specialties_name">Mindfulness Training</p>
                        <p class="specialties_paragraph">Earum rerum hic tene sapiente delectus</p>
                    </div>
                    <div class="specialties_content specialties_content2 s8">
                        <p class="specialties_name">Workout Routines</p>
                        <p class="specialties_paragraph">Neque orro quisquam est raui dolorem</p>
                    </div>
                    <figure class="specialties_right_line mb-0">
                        <img src="{{ asset('images/specialties_right_line.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="our_specialties_right_shape right_shape mb-0">
            <img src="{{ asset('images/our_specialties_right_shape.png') }}" alt="" class="img-fluid">
        </figure>
    </div>
</section>
<!-- GET IN TOUCH SECTION -->
<section class="get_in_touch_section">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="get_in_touch_content">
                    <h5>Get in touch</h5>
                    <h2>Get a Free Consultation Now</h2>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="fname" id="fname" class="form-control"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="lname" id="lname" class="form-control form_style"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="tel" name="phonenum" id="phonenum" class="form-control"
                                        placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="email" name="emailaddrs" id="emailaddrs"
                                        class="form-control form_style" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" form-group mb-0">
                                    <textarea rows="3" name="comment" id="msg" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_wrapper">
                            <button type="submit" name="get_started" id="started">Get Started</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 d-md-block d-none"></div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="get_in_touch_video position-relative">
                    <a class="popup-vimeo"
                        href="https://previews.customer.envatousercontent.com/6720474d-ddc3-4b86-acf1-8d093cb37b6d/watermarked_preview/watermarked_preview.mp4">
                        <figure class="video_img mb-0">
                            <img class="thumb img-fluid" style="cursor: pointer"
                                src="{{ asset('img/play-icon.png') }}" alt="play-icon">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
        <figure class="get_in_touch_shape left_shape mb-0">
            <img src="{{ asset('images/get_in_touch_shape.png') }}" alt="get-in-touch-shape" class="img-fluid">
        </figure>
    </div>
</section>

<!-- Testimonial -->
<section class="our_specialties_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="our_specialties_heading_content">

                    <h2> Testimonial
                    </h2>
                    <p>Thank you for your trust and stories; we're truly humbled by your support</p>
                </div>
            </div>
        </div>

        <ul class="nav nav-pills justify-content-between mb-3 pt-3 " id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link custom-btn active border-0" id="pills-all-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                    aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom-btn border-0" id="pills-health-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health"
                    aria-selected="false">Women Health</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 custom-btn" id="pills-physiotherapy-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-physiotherapy" type="button" role="tab" aria-controls="pills-physiotherapy"
                    aria-selected="false">Physiotherapy</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 custom-btn" id="pills-yoga-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-yoga" type="button" role="tab" aria-controls="pills-yoga"
                    aria-selected="false">Yoga</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row pt-4">
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-3 pt-3">
                        <a href="">
                            <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>


                </div>
            </div>
            <div class="tab-pane fade" id="pills-health" role="tabpanel" aria-labelledby="pills-health-tab">

            </div>
            <div class="tab-pane fade" id="pills-physiotherapy" role="tabpanel"
                aria-labelledby="pills-physiotherapy-tab">...
            </div>
            <div class="tab-pane fade" id="pills-yoga" role="tabpanel" aria-labelledby="pills-yoga-tab">...</div>
        </div>
    </div>
</section>


<!-- google review section -->
<section class="google-review-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
    </div>

</section>

<!-- end google review section -->

<!-- BLOG POSTS SECTION -->
<section class="blog_posts_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog_posts_content">
         
                    <h2>Blog & News</h2>
                    <p>Stay Informed and Inspired - Our Latest Insights and Updates</p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog_posts_image position-relative">
                    <figure class="mb-0"><img src="{{ asset('images/blog_posts_1.png') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="blog_posts_image_content">
                        <span>YOGA</span>
                        <h4>Yoga Effects on Brain Health: A Systematic Review of the Current Literature</h4>
                        <div class="icon_wrapper">
                            <a href="./single-post.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog_posts_image position-relative">
                    <figure class="mb-0"><img src="{{ asset('images/blog_posts_2.png') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="blog_posts_image_content">
                        <span>FITNESS</span>
                        <h4>Maintaining a regular yoga practice can provide physical health</h4>
                        <div class="icon_wrapper">
                            <a href="./single-post.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_wrapper">
            <a href="./single-post.html" class="text-decoration-none view_blog">View All Blogs</a>
        </div>
        <figure class="blog_posts_left_shape left_shape mb-0">
            <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="" class="img-fluid">
        </figure>
        <figure class="blog_posts_right_shape right_shape mb-0">
            <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="" class="img-fluid">
        </figure>
    </div>
</section>
<!-- SUBSCRIBE SECTION -->
<section class="subscribe_section">
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





@endsection