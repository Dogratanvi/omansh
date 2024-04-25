@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section about-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">About Us</h1>
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                    <p class="text-center" data-aos="fade-right">At Omansh, we're dedicated to nurturing
                                        holistic well-being through personalised Women's Health, Yog, and Physiotherapy
                                        services, empowering you to lead a balanced and healthy life.</p>
                                </div>
                            </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span">
                                    About</span>
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="aboutpage_aboutus_image">
                    <figure class="mb-0">
                        <img src="{{asset($about_omanshes[0]->featured_image)}}" alt="optimal-health" class="img-fluid">
                    </figure>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <h6>
                                Dr. GARIMA BISWAS (PT)<br> Founder Director - OMANSH</h6>
                        </div>
                        <div class="col-md-6 ">
                            <div
                                class="social-icons d-flex justify-content-start justify-content-xs-start justify-content-sm-start justify-content-xl-center justify-content-md-center justify-content-lg-center align-items-center h-100 w-100">
                                <a href=""> <img src="{{ asset('img/facebook.png') }}"></a>
                                <a href=""> <img class="ps-3" src="{{ asset('img/instagram.png') }}"></a>
                                <a href=""> <img class="ps-3" src="{{ asset('img/linkedin.png') }}"></a>
                            </div>
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " data-aos="fade-right">
                <div class="aboutpage_aboutus_content  ">
                    <h5>About us</h5>

                    <h2> {!! $about_omanshes[0]->name!!}</h2>
                    <div> {!! $about_omanshes[0]->content!!} </div>

                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-md-6 pt-3">
                <h2> {!! $about_omanshes[2]->name!!}</h2>
                <div> {!! $about_omanshes[2]->content!!} </div>

            </div>
            <div class="col-md-6 pt-3">
                <h2> {!! $about_omanshes[1]->name!!}</h2>
                <div> {!! $about_omanshes[1]->content!!} </div>

            </div>
        </div>
    </div>
</section>


<!-- OUR MISSION SECTION -->
<section class="mission_section">
    <div class="container">
        <div class="mission_box">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center" data-aos="fade-up">
                    <div class="mission_content">
                        <h2> {!! $about_omanshes[3]->name!!}</h2>
                        <div> {!! $about_omanshes[3]->content!!} </div>
                        <div class="btn_wrapper">
                            <a href="contact" class="text-decoration-none read_more_btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div
                        class="mission_image text-center text-xs-center text-sm-center text-md-end text-lg-end text-xl-end">
                        <img src="{{asset($about_omanshes[3]->featured_image)}}" alt="our-mission" class="img-fluid">
                        </figure>
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
                        <img src="{{asset($about_omanshes[4]->featured_image)}}" alt="our-vission" class="img-fluid">
                        </figure>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center" data-aos="fade-up">
                    <div class="vision_content">
                        <h2> {!! $about_omanshes[4]->name!!}</h2>
                        <div> {!! $about_omanshes[4]->content!!} </div>

                        <div class="btn_wrapper">
                            <a href="" class="text-decoration-none read_more_btn">Contact Us</a>
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
                    <h2>Achievements</h2>
                    <div class="row justify-content-sm-start justify-content-xs-start justify-content-start justify-content-md-center justify-content-lg-center justify-content-xxl-center justify-content-xl-center">
                        <div class="col-md-10 col-lg-8 col-xl-8 col-sm-12 col-xs-12 col-12">
                            <p class="pb-3">Pioneering wellness and holistic health innovations through prestigious
                                partnerships,
                                widespread media recognition, and impactful community engagements.</p>
                        </div></div>
                    </div>
                </div>
            </div>
            <div class="logo-container" data-aos="fade-up">
                <div class="logo-box">
                    <div class="logo_wrapper craft">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_1.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_2.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper q-power">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_3.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper logo">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_4.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper minimum">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_5.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>

            </div>

            <div class="logo-container mt-3" data-aos="fade-up">
                <div class="logo-box">
                    <div class="logo_wrapper craft">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_1.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_2.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper q-power">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_3.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper logo">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_4.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper minimum">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_5.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
</section>
<!-- Instagram SECTION -->
<section class="insta_posts_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog_posts_content">

                    <h2>Instagram Feeds</h2>
                    <p>Discover daily doses of wellness inspiration, transformative health tips, and
                        behind-the-scenes glimpses.</p>
                </div>
            </div>
        </div>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-af74a9e2-7ad5-4fe5-b3bb-147a7376bd59" data-elfsight-app-lazy></div>
        <div class="row" data-aos="fade-up">



        </div>

    </div>
</section>

<figure class="blog_posts_left_shape left_shape mb-0">
    <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="" class="img-fluid">
</figure>
<figure class="blog_posts_right_shape right_shape mb-0">
    <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="" class="img-fluid">
</figure>



@endsection