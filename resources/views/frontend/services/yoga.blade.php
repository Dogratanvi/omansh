@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section yoga-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up"> Yoga</h1>
                            <div class="row justify-content-center ">

                                <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                    <p data-aos="fade-right">A journey of transformation and harmony, connecting body,
                                        mind, and
                                        spirit for holistic well-being.</p>
                                </div>
                            </div>
                            <div class="btn_wrapper">

                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                    class="sub_home_span"><a>Services
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
                    <figure class="mb-0"><img src="{{ asset('img/services/yoga-left.png') }}"
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
                <div class="service_page_aboutus_content ">



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
                        <a href="{{ route('frontend.contact.create') }}"
                            class="text-decoration-none get_started_btn">Contact
                            Us
                        </a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>


<!-- women-health-issue -->
<section class="women-health">
    <div class="container">
        <h2 class="text-center"> Types of Yoga</h2>
        <p class="text-center">Explore the diverse world of yoga, where each style offers a unique path to balance,
            strength, and inner peace.</p>

        <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
            <div class="col-md-4 mt-4">
                <div class="card health-card border-0">
                    <img src="{{ asset('img/services/yoga/corporate-yoga.png') }}" alt="corporate-yoga">
                    <div class="card-content">
                        <h4>Corporate Yoga</h4>

                        <li>Stress Management </li>
                        <li>Meditation</li>
                        <li>Chair Yoga</li>
                        <li>Posture Analysis</li>
                        <li>Muscle Strengthening</li>
                        <li>Ergonomics</li>


                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/yoga/pregnency-yoga.png') }}" alt="pregnency-yoga">
                    <div class="card-content">
                        <h4>Pregnancy Yoga</h4>

                        <li>Pre Pregnancy Sessions </li>
                        <li>During Pregnancy Session</li>
                        <li>Post Pregnancy Session</li>



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
        <div class="d-flex justify-content-center mt-lg-5 mt-xl-5 mt-md-4 mt-sm-3 mt-xs-3 mt-3 mt-xxl-5">

            @include("frontend.bookingform")

        </div>
    </div>
</section>

<!-- gallary -->

<section class="pb-5 mb-5 service-gallary aboutus_content">
    <div class="container">
        <h2 class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start">
            Gallery</h2>
        <div class="women-health">
            <div class="row">
                @csrf
                @foreach ($galleryImages as $gallery )

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ $gallery }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{$gallery }}" alt="gallery">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn_wrapper d-flex justify-content-center mt-5">
                <a href="#" id="loadMor" class="text-decoration-none get_started_btn"> Load More </a>
            </div>
        </div>
</section>

<div class="modal fade modalDialogBox galleryModal" id="image-gallery" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog galleryDialog">
        <div class="modal-content galleryModal-content">
            <div class="modal-header p-0">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close m-0 pb-0 pt-0 pe-0 border-0 bg-transparent"
                    data-dismiss="modal"><span aria-hidden="true" class="text-dark"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body p-0">
                <img id="image-gallery-image" class="img-responsive border-0 rounded-0" src="">
            </div>
            <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-secondary float-left bg-transparent border-0 py-0 shadow-none"
                    id="show-previous-image"><i class="fas fa-caret-left"></i>
                </button>
                <button type="button" id="show-next-image"
                    class="btn btn-secondary float-right bg-transparent border-0 py-0 shadow-none"><i
                        class="fas fa-caret-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection