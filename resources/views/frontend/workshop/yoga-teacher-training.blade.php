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
                            <h1 data-aos="fade-up">Yoga Teacher Training</h1>
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                    <p class="text-center" data-aos="fade-right">Align Your Body, Awaken Your Mind, and
                                        Elevate Your Practice with Our Yoga Training Program.</p>
                                </div>
                            </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home</a> </span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span">
                                    Yoga Teacher Training</span>
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
                    <h5>YOGA TEACHER TRAINING</h5>
                    <h2> {!! $workshops[1]->name!!}</h2>
                    <div> {!! $workshops[1]->content!!} </div>


                    <div class="btn_wrapper main-btn">
                        <a href="/contact" class="text-decoration-none read_more_btn">Enroll Now</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>

<!-- program -->

<section class="pb-3  program ">
    <div class="container">
        <h2 class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start"> {!!
            $workshops[2]->name!!}</h2>
        <div
            class="row justify-content-sm-start justify-content-xs-start justify-content-start justify-content-md-center justify-content-lg-center justify-content-xxl-center justify-content-xl-center">
            <div class="col-md-10 col-lg-8 col-xl-8 col-sm-12 col-xs-12 col-12">
                <p class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start">Embark on
                    a Journey of self-discovery, yogaguru's yoga teacher training program welcomes seekers of
                    transformation.
                </p>
            </div>
        </div>
        <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
            <div> {!! $workshops[2]->content!!} </div>
        </div>
</section>
<!-- gallary -->
<section class="pb-3 pt-sm-3 pt-xs-3 pt-3 pt-md-4 pt-xl-5 pt-lg-5 pt-xxl-5 aboutus_content ">
<div class="container">
        <h2 class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start">Yoga Training
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
    </div>
</section>

<!-- Testimonial -->
<section class="our_specialties_section main-testimonial aboutus_content">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="our_specialties_heading_content">

                <h2> Testimonial
                </h2>
                <p class="text-center">Thank you for your trust and stories; we're truly humbled by your support.</p>
            </div>
        </div>
    </div>
    <div class="row pt-4" id="data">
        @foreach ($testimonials as $testimonial)
        @if($testimonial->category == "yoga")
        <div class="col-md-3 pt-3 content">

            <div class="card border-0 videoCard">
                <a class="btn btn-block videoLink" data-item="{{ $testimonial->featured_video}}" data-toggle="modal"
                    data-target="#deleteLineItemModal">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <img class="loads" src="{{$testimonial->featured_image }}" class="play-btn btn-watch-video w-100"
                    alt="thumbnail" />

            </div>
        </div>

        @endif
        @endforeach
    </div>

</div>
<div class="btn_wrapper d-flex justify-content-center mt-5">
    <a href="#" id="loadMore" class="text-decoration-none get_started_btn"> Load More </a>
</div>
</section>
<!-- discount-section -->
<!-- <section class="aboutus_section discount-section">
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
</section> -->

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