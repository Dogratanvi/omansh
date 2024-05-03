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
                                    About Us</span>
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
                        <div class="col-md-8">
                            <h6>
                                Dr. GARIMA BISWAS (PT)</h6>
                            <h6>
                                Consultant Physiotherapist Founder of Omansh Health and Fitness Obstetrics and Pelvic
                                Floor Rehab Therapist Labor and Child Birth Educator
                            </h6>
                        </div>
                        <div class="col-md-4">
                            <div
                                class="social-icons d-flex justify-content-start justify-content-xs-start justify-content-sm-start justify-content-xl-center justify-content-md-center justify-content-lg-center align-items-center h-100 w-100">
                                <a href="https://www.facebook.com/profile.php?id=100018350377507" target="_blank"> <svg
                                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_804_2)">
                                            <path
                                                d="M20 10C20 4.47719 15.5228 0 10 0C4.47719 0 0 4.47719 0 10C0 14.9913 3.65687 19.1284 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2147 3.90625C13.3088 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.9499 6.5625 11.5625 7.33336 11.5625 8.12422V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3431 19.1284 20 14.9913 20 10Z"
                                                fill="#1877F2" />
                                            <path
                                                d="M13.8926 12.8906L14.3359 10H11.5625V8.12422C11.5625 7.33328 11.9499 6.5625 13.1922 6.5625H14.4531V4.10156C14.4531 4.10156 13.3088 3.90625 12.2146 3.90625C9.93047 3.90625 8.4375 5.29063 8.4375 7.79688V10H5.89844V12.8906H8.4375V19.8785C8.95439 19.9595 9.4768 20.0001 10 20C10.5232 20.0002 11.0456 19.9595 11.5625 19.8785V12.8906H13.8926Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_804_2">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/dr_garima_biswas?igsh=MmdtemZta29vMHZp"
                                    target="_blank"> <img class="ps-3  pe-3" src="{{ asset('img/instagram.png') }}"></a>
                                <a href="https://www.linkedin.com/in/dr-garima-biswas-aa415b235/" target="_blank"> <svg
                                        width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_804_5)">
                                            <path
                                                d="M10.4999 0.419983C4.93282 0.419983 0.419922 4.93288 0.419922 10.5C0.419922 16.0671 4.93282 20.58 10.4999 20.58C16.067 20.58 20.5799 16.0671 20.5799 10.5C20.5799 4.93288 16.067 0.419983 10.4999 0.419983ZM8.03242 14.6779H5.99122V8.10913H8.03242V14.6779ZM6.99922 7.30273C6.35452 7.30273 5.93767 6.84598 5.93767 6.28108C5.93767 5.70463 6.36712 5.26153 7.02547 5.26153C7.68382 5.26153 8.08702 5.70463 8.09962 6.28108C8.09962 6.84598 7.68382 7.30273 6.99922 7.30273ZM15.4874 14.6779H13.4462V11.0376C13.4462 10.1902 13.1501 9.61483 12.412 9.61483C11.8481 9.61483 11.5132 10.0044 11.3651 10.3792C11.3105 10.5126 11.2969 10.7016 11.2969 10.8895V14.6769H9.25462V10.2039C9.25462 9.38383 9.22837 8.69818 9.20107 8.10808H10.9745L11.068 9.02053H11.1089C11.3777 8.59213 12.0361 7.96003 13.1375 7.96003C14.4805 7.96003 15.4874 8.85988 15.4874 10.794V14.6779Z"
                                                fill="#0A66C2" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_804_5">
                                                <rect width="21" height="21" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
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
                <div
                    class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-2 order-sm-2 order-xs-2 order-lg-1 order-md-1 order-xl-1 order-xxl-1">
                    <div
                        class="vision_image  text-center text-xs-center text-sm-center text-md-start text-lg-start text-xl-start">
                        <img src="{{asset($about_omanshes[4]->featured_image)}}" alt="our-vission" class="img-fluid">
                        </figure>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center order-1 order-sm-1 order-xs-1 order-lg-2 order-md-2 order-xl-2 order-xxl-2"
                    data-aos="fade-up">
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
                    <div
                        class="row justify-content-sm-start justify-content-xs-start justify-content-start justify-content-md-center justify-content-lg-center justify-content-xxl-center justify-content-xl-center">
                        <div class="col-md-10 col-lg-8 col-xl-8 col-sm-12 col-xs-12 col-12">
                            <p class="pb-3">Pioneering wellness and holistic health innovations through prestigious
                                partnerships,
                                widespread media recognition, and impactful community engagements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo" data-aos="fade-up">
            <div class="owl-carousel autoplay owl-theme">
                @foreach ($sliderImages as $key=>$value )
                <div class="item">
                    <img src="{{ $value }}" alt="achievements">
                </div> @endforeach

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

                    <h2>Instagram Feed</h2>
                    <div
                        class="row justify-content-sm-start justify-content-xs-start justify-content-start justify-content-md-center justify-content-lg-center justify-content-xxl-center justify-content-xl-center">
                        <div class="col-md-10 col-lg-8 col-xl-8 col-sm-12 col-xs-12 col-12">
                            <p>Discover daily doses of wellness inspiration, transformative health tips, and
                                behind-the-scenes glimpses.</p>
                        </div>
                    </div>
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