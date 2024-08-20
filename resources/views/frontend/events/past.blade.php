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
                            <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                            <p class="text-center" data-aos="fade-right">Transform Your Body and Mind: Attend Our Health and Fitness Events.</p>   </div>
                        </div>
                            <div class="btn_wrapper">
                                <a href="/"><span class="sub_home_span">Home </span></a><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span"> Events</span>
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
        <h2 class="text-center">Past Events</h2>
        <!--<p class="text-center">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud-->
        <!--    exercitation</p>-->
        <div class="row pt-3">
             @foreach ($pastEvents as $event)
            <div class="col-md-4">
                <div class="card upcoming-card border-0 shadow">
                    <img src="{{ secure_asset($event->featured_image) }}">
                    <div class="date">
                        <h4>14<br><span class="fw-normal">July</span></h4>

                    </div>
                    <div class="event-content">
                        
                        <h3>{{$event->name}}</h3>
                        <p><i class="fa-regular fa-clock pe-2"></i>{{ date('M d, Y', strtotime($event->date_from)) }}</p>
                          <a href="{{ route('frontend.events.single',  ['id' => $event->id, 'slug' => $event->slug]) }}" class="item-link appointment-btn">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                      
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
 
</section>





@endsection