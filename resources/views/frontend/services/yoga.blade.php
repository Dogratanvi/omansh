@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section service-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up"> Yoga Trainig</h1>
                            <p data-aos="fade-right">Duis aute irure dolor in reprehenderit in volurate velit cillum
                                nulla pariatur nostrud exercitation</p>
                            <div class="btn_wrapper">
                              
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i> <span class="sub_home_span"><a href="{{ route('frontend.services') }}">Services
                                    </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                    class="sub_span">Yoga</span>
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


<!-- ABOUT US SECTION -->
<section class="aboutpage_aboutus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="servicepage_aboutus_image">
                    <figure class="mb-0"><img src="{{ asset('img/services/yoga-inner-page-image.png') }}"
                            alt="service_women_health.png" class="img-fluid">
                    </figure>

                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center" data-aos="fade-right">
                <div class="service_page_aboutus_content  ps-4 ">



                    <h2>Yoga Training</h2>
                    @foreach ($services as $service)
                    <div class="margin_bottom">{!! $services[2]->content!!}</div>
                    <!-- <p class="margin_bottom">A vast discipline and a science in itself which aimed at integrating mind,
                        body and spirit through the practice of asana, pranayama, mudra, bandha, shat-karma and
                        meditation to achieve a reach a stage of enlightenment or self-realization

                        We offer Physio-Yoga Therapy which is an innovative approach to physical rehabilitation which
                        combines Physiotherapy and Medical Therapeutic Yoga (MTY). What results is a healing experience
                        that blends the latest in medical science and the time-tested traditions of Yoga.</p>
                      @endforeach
                    <div class="btn_wrapper mt-3">
                        <a href="{{ route('frontend.about') }}" class="text-decoration-none get_started_btn">Get
                            Started</a>
                    </div> -->
                    <div class="btn_wrapper mt-3">
                        <a href="{{ route('frontend.contact') }}" class="text-decoration-none get_started_btn">Contact
                            Us
                        </a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>


<!-- women-health-issue -->
<section class="pb-5 mb-5">
    <div class="container">
        <h2 class="text-center"> Types of Yoga</h2>
        <p class="text-center">Explore the diverse world of yoga, where each style offers a unique path to balance,
            strength, and inner peace.</p>

        <div class="row pt-5">
            <div class="col-md-4 mt-4">
                <div class="card health-card border-0">
                    <img src="{{ asset('img/services/yoga/corporate-yoga.png') }}" alt="corporate-yoga">
                    <div class="card-content">
                        <h4>Corporate Yoga</h4>
                        <ul>
                            <li>Stress Management </li>
                            <li>Meditation</li>
                            <li>Chair Yoga</li>
                            <li>Posture Analysis</li>
                            <li>Muscle Strengthening</li>
                            <li>Ergonomics</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/yoga/pregnency-yoga.png') }}" alt="pregnency-yoga">
                    <div class="card-content">
                        <h4>Pregnancy Yoga</h4>
                        <ul>
                            <li>Pre Pregnancy Sessions </li>
                            <li>During Pregnancy Session</li>
                            <li>Post Pregnancy Session</li>
                         

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/yoga/medical-yoga.png') }}" alt="medical-yoga">
                    <div class="card-content">
                    <h4>Medical Yoga</h4>
                 
                    <li>Hormonal Imbalance</li>
                        <li>Infertility </li>
                        <li>Thyroid</li>
                        <li>Weight Loss</li>
                        <li> Disease Specific</li>
                       
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/yoga/general-yoga.png') }}" alt="general-yoga">
                    <div class="card-content">
                        <h4>General Yoga & Pilates</h4>
                        <li>Body Toning </li>
                        <li>Ergonomics</li>
                        <li>Face Yoga</li>
                        <li>Posture Analysis</li>
                    
                        </ul>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</section>

<!-- gallary -->
<section class="pb-5 mb-5 aboutus_content">
    <div class="container">
        <h2 class="text-center"> Gallery</h2>
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