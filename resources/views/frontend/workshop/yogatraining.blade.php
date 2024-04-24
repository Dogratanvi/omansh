@extends('frontend.layouts.app')

@section('content')


<div class="sub-banner-section yogatraning-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Yoga Training</h1>
                            <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                            <p class="text-center" data-aos="fade-right">Duis aute irure dolor in reprehenderit in
                                volurate velit cillum nulla pariatur nostrud exercitation</p>
                                </div>
                        </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home</a> </span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span">
                                    doctortraining</span>
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
                <div class="aboutpage_aboutus_image workshop">
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
                <div class="para">
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
                        <a href="/contact" class="text-decoration-none read_more_btn">Enroll Now</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>


<!-- gallary -->
<section class="pb-3 aboutus_content ">
    <div class="container">
        <h2 class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start">Yoga Training Gallery</h2>
        <p class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud
            exercitation
        </p>
        <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
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
        <div class="row pt-4" id="data">
                    @foreach ($testimonials as $testimonial)
                    @if($testimonial->category == "yoga")
                    <div class="col-md-3 pt-3">

                        <div class="card border-0 videoCard">
                            <a class="btn btn-block videoLink" data-item="{{ $testimonial->featured_video}}"
                                data-toggle="modal" data-target="#deleteLineItemModal">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <img class="loads" src="{{$testimonial->featured_image }}"
                                class="play-btn btn-watch-video w-100" alt="thumbnail" />

                        </div>
                    </div>

                    @endif
                    @endforeach
                </div>
    
    </div>
</section>
<!-- discount-section -->
<section class="aboutus_section discount-section">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="discount-box">
            <h2 class="text-center">Get 10% Discount For Yoga Training
            </h2>
            <p class="margin_bottom text-center">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla
                pariatur
                nostrud exercitation</p>
            <div class="btn_wrapper main-btn text-center">
                <a href="/contact" class="text-decoration-none read_more_btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<div class="modal videoModal fade" id="deleteLineItemModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteLineItemModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content mt-4 bg-transparent border-0">
            <div class="modal-header bg-transparent border-0">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close me-0 pe-0 border-0 bg-transparent" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body edit-content pt-2">
                <iframe id="lineitem" class="embed-responsive-item" src="" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection