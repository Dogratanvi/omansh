@extends('frontend.layouts.app')

@section('content')

<body>
    <div class="sub-banner-section">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content">
                                <h1 data-aos="fade-up">About Us</h1>
                                <p data-aos="fade-right">Duis aute irure dolor in reprehenderit in volurate velit cillum
                                    nulla pariatur nostrud exercitation.</p>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right"
                                        aria-hidden="true"></i><span class="sub_span"> About</span>
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
        </div>
        </section>
    </div>
    <!-- ABOUT US SECTION -->
    <section class="aboutpage_aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <div class="aboutpage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/optimal-health.png') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="row pt-5">
                            <div class="col-md-6">
                                <h6>
                            Dr. GARIMA BISWAS (PT)<br> Founder Director - OMANSH</h6>
                            </div>
                            <div class="col-md-6 ">
                                <div class="social-icons d-flex justify-content-center align-items-center h-100 w-100">
                                <a href=""> <img src="{{ asset('img/facebook.png') }}"></a>
                                <a href=""> <img class="ps-3" src="{{ asset('img/instagram.png') }}"></a>
                                <a href=""> <img class="ps-3" src="{{ asset('img/linkedin.png') }}"></a></div>
                            </div>
                        </div>
                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                    <div class="aboutpage_aboutus_content">
                        <h5>About us</h5>
                        <h2>Better Life With Optimal Health</h2>
                        <p>Every step towards health at Omansh Health & Fitness is based on care, knowledge, and a
                            strong desire to make people's lives better.</p>
                        <p>Our centre is more than just a health facility. It's a community committed to promoting
                            health and happiness. It was started by Dr. Garima Biswas, a leader in holistic health and
                            an expert in Pelvic Floor Rehabilitation. Through her 15+ years of deep knowledge of the
                            human body and their desire to spread the benefits of good health, we invite you to start a
                            personalised journey to becoming your best self.</p>
                        <p class="margin_bottom">At Omansh, we think that the best way to get the most out of your body
                            is to combine ancient methods with cutting-edge science.</p>
                        <div class="box_wrapper">
                            <div class="box">
                                <i class="fa-solid fa-check" aria-hidden="true"></i>
                                <span>Live classes twice a week</span>
                            </div>
                            <div class="box mr-0">
                                <i class="fa-solid fa-check" aria-hidden="true"></i>
                                <span>Personal care on phone</span>
                            </div>
                        </div>
                        <div class="box_wrapper">
                            <div class="box">
                                <i class="fa-solid fa-check" aria-hidden="true"></i>
                                <span>24 hours chat support</span>
                            </div>
                            <div class="box mr-0">
                                <i class="fa-solid fa-check" aria-hidden="true"></i>
                                <span>Free e-books for clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DISCOUNT SECTION -->
    <section class="discount_section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="discount_content">
                        <h2>Get <span>10%</span> Discount For All Yoga Classes</h2>
                        <p>Taciti fames lacinia orci finibus metus elit tempus faucibus urna nunc dui rhoncus vea
                            porttitor volutrat felis massa feugiat</p>
                        <div class="btn_wrapper">
                            <a href="./services.html" class="text-decoration-none get_started">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR MISSION SECTION -->
    <section class="mission_section">
        <div class="container">
            <div class="mission_box">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up">
                        <div class="mission_content">
                            <h5>incididunt</h5>
                            <h2>Our Mission</h2>
                            <p>Quis autem vel eum iure reprehenderit qui in eao voluptate velit esse quam nihil
                                molestiae consequatur vel illum.</p>
                            <div class="btn_wrapper">
                                <a href="./pricing.html" class="text-decoration-none read_more_btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mission_image">
                            <figure class="mb-0"><img src="{{ asset('images/our_mission_image.png') }}" alt=""
                                    class="img-fluid"></figure>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="mission_right_shape right_shape mb-0">
                <img src="{{ asset('images/our_mission_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- OUR VISION SECTION -->
    <section class="vision_section">
        <div class="container">
            <div class="vision_box">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="vision_image">
                            <figure class="mb-0"><img src="{{ asset('images/our_vision_image.png') }}" alt=""
                                    class="img-fluid"></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up">
                        <div class="vision_content">
                            <h5>tempora</h5>
                            <h2>Our Vision</h2>
                            <p>Ruis autem vel eum iure reprehenderit qui in eao voluptate velit esse quam nihil
                                molestiae consequatur vel illum.</p>
                            <div class="btn_wrapper">
                                <a href="./pricing.html" class="text-decoration-none read_more_btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="vision_left_shape left_shape mb-0">
                <img src="{{ asset('images/our_vision_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- ACHIEVEMENTS SECTION -->
    <section class="achievement_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="achievement_content">
                        <h5>Achievements</h5>
                        <h2>Our Honorable Awards</h2>
                        <p>Molestiae non recusandae itaque earum rerum hic teneaur a sapiente delectus, rae aut
                            reiciendis officia deserunt mollitia animi omnis dolor</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="logo_wrapper craft">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_1.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="logo_wrapper">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_2.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="logo_wrapper q-power">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_3.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="logo_wrapper logo">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_4.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="logo_wrapper minimum">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_5.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="logo_wrapper logoipsum">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_6.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG POSTS SECTION -->
    <section class="blog_posts_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_posts_content">
                        <h5>Blog Posts</h5>
                        <h2>Our News Feed</h2>
                        <p>Autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat</p>
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
                                <a href="./single-post.html" class="text-decoration-none"><i
                                        class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
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
                                <a href="./single-post.html" class="text-decoration-none"><i
                                        class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
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