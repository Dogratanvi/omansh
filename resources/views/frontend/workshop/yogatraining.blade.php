@extends('frontend.layouts.app')

@section('content')


<div class="sub-banner-section doctortraning-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Doctor Training</h1>
                            <p class="text-center" data-aos="fade-right">Duis aute irure dolor in reprehenderit in
                                volurate velit cillum nulla pariatur nostrud exercitation</p>
                            <div class="btn_wrapper">
                                <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span"> doctortraining</span>
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
                    <figure class="mb-0"><img src="{{ asset('img/better-life-yoga-traning.png') }}" alt=""
                            class="img-fluid">
                    </figure>

                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="ps-4 ">
                    <h5>YOGA TRAINING</h5>
                    <h2>Better Life With Yoga Trainig</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s
                    </p>
                    <p class="margin_bottom">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</p>

                    <div class="btn_wrapper main-btn">
                        <a href="./pricing.html" class="text-decoration-none read_more_btn">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>


<!-- gallary -->
<section class="pb-3 aboutus_content">
    <div class="container">
        <h2 class="text-center">Yoga Training Gallery</h2>
        <p class="text-center">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud
            exercitation
        </p>
        <div class="row pt-5">
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_1.png') }}" alt="gallary1">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_2.png') }}" alt="gallary2">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_3.png') }}" alt="gallary3">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_4.png') }}" alt="gallary4">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_5.png') }}" alt="gallary5">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_6.png') }}" alt="gallary6">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_6.png') }}" alt="gallary6">
                </div>
            </div>
        </div>
        <div class="btn_wrapper d-flex justify-content-center mt-5">
            <a href="#" id="loadMore" class="text-decoration-none get_started_btn"> Load More </a>
        </div>
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
                    <p class="text-center">Thank you for your trust and stories; we're truly humbled by your support</p>
                </div>
            </div>
        </div>

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
</section>
<!-- discount-section -->
<section class="aboutus_section discount-section">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="discount-box">
            <h2 class="text-center">Get 10% Discount For Yoga Training
            </h2>
            <p class="margin_bottom text-center">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur
                nostrud exercitation</p>
            <div class="btn_wrapper main-btn text-center">
                <a href="./pricing.html" class="text-decoration-none read_more_btn">Contact Us</a>
            </div>
        </div>
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