@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section event-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Events</h1>
                            <p class="text-center" data-aos="fade-right">Duis aute irure dolor in reprehenderit in
                                volurate velit cillum
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
<!-- upcoming events -->
<section class="upcoming-events py-5">
    <div class="container">
        <h2 class="text-center">Upcoming Events</h2>
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
    </div>
</section>

<!-- 
 <section class="upcoming-events py-5">
    <div class="container pb-4">
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
    </div>
</section> -->



@endsection