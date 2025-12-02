@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section event-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content ">
                             <div>
                            <h1 data-aos="fade-up text-center">{{ $event->name }}</h1>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-12 col-xl-12 col-xs-12 col-sm-12 col-12">
                                    <p class="text-center" data-aos="fade-right">Explore our upcoming events and see the difference we're making</p>
                                </div>
                            </div>
                            <div class="btn_wrapper">
                                <a href="/"><span class="sub_home_span">Home </span></a><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span"> Events</span>
                            </div>
                        </div> </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="banner_left_top_shape" class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="banner_left_bottom_shape" class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="banner_right_top_shape" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="banner_right_bottom_shape" class="img-fluid">
                </figure>
            </div>
    </div>
    </section>
</div>
<!-- upcoming events -->
<section class="single-event py-5 single-space">
    <div class="container">

        <!-- Featured Image -->
        <img src="{{ asset($event->featured_image) }}"
             alt="featured-event-image"
             class="h-75 pt-5 featured-img-events img-fluid">

        <!-- Title + Button in same row -->
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h2 class="m-0">{{ $event->name }}</h2>
@if($event->is_featured == 1)
            <!-- Button / Booking Form -->
            @include('frontend.eventRegistration')
@endif
        </div>

        <!-- Event Content -->
        <div class="event-content-img ">

            <!-- Main Content (centered) -->
            <p class="pt-1 mx-auto" style="max-width: 900px;">
                {!! $event->content !!}
            </p>

            <!-- Event Meta -->
            <div class="row pt-3 justify-content-center">

                <div class="col-md-4 col-lg-4">
                    <p class="event-para d-flex justify-content-center align-items-center">
                        <span><i class="fa-regular fa-clock"></i></span>
                        <span class="ps-2">{{ date('M d, Y', strtotime($event->date_from)) }}</span>
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>




 <section class="past-events py-5">
    {{-- <div class="container pb-4">
        <h2 class="text-center">Past Events</h2>
        <p class="text-center">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud
            exercitation</p>
        <div class="row pt-3">
            <div class="col-md-4">
                <div class="card upcoming-card border-0 shadow">
                    <img src="{{ asset('img/events.png') }}">
                    <div class="date">
                        <h4>01<br><span class="fw-normal">Apr</span></h4>

                    </div>
                    <div class="event-content">
                        <h3>How does pregnancy affect my pelvic floor
                        </h3>
                        <p><i class="fa-regular fa-clock pe-2"></i> 2024-04-01 09:00 AM - 2024-04-01 12:00 PM</p>
                        <p><i class="fa-solid fa-location-dot pe-2"></i>Plot No-290, in front of ramprastha green gate
                            No.1, sector-4, vaishali, ghaziabad, 201 019</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section> 
<figure class="blog_posts_left_shape left_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_left_shape.png" alt="left-shape" class="img-fluid">
</figure>
<figure class="blog_posts_right_shape right_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_right_shape.png" alt="right-shape" class="img-fluid">
</figure>
<style>
.event-content-img img {
    border-top-left-radius: 80px;
    border-bottom-right-radius: 80px;
    padding: 10px;
    height: 300px;
    object-fit: cover;
    width: 300px;
}
.inner-appointment-box .form-group input{
    padding:0px !important;
}
.inner-appointment-box .form-group input {
    padding: 10px !important;
    border: 1px solid #e9e9e9 !important;
    margin-top: 10px;
}
.inner-appointment-box .form-group select {
    padding: 10px !important;
    border: 1px solid #e9e9e9 !important;
    margin-top: 10px;
}
.inner-appointment-box .form-group textarea {
    padding: 10px !important;
    border: 1px solid #e9e9e9 !important;
    margin-top: 10px;
}
.close-btn-cus{
        top: 20px !important;
    right: 0px;
    background: #004B2A;
    color: #fff;
    border-radius: 25px;
    width: 30px;
    height: 30px;
}
.booking-form label {
    color: #000000;
    font-size: 14px;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
}
    .inner-appointment-box h2 {
        font-size: 26px;
        line-height: 44px;
    }
    .inner-appointment-box.modal-content{
            height: 500px;
    overflow-y: auto !important;
        
    }
      .inner-appointment-box.modal-content form{
            height: 500px;
        
    }

</style>


@endsection