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
                                    <p class="text-center" data-aos="fade-right">Transform Your Body and Mind: Attend
                                        Our Health and Fitness Events.</p>
                                </div>
                            </div>
                            <div class="btn_wrapper">
                                <a href="/"> <span class="sub_home_span">Home </span></a><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span">
                                    Events</span>
                            </div>
                        </div>
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
<section class="py-5">
    <div class="container">
        <h2 class="text-center">Upcoming Events</h2>
        <p class="text-center">Align body, mind, and spirit, join us for serenity in motion!</p>
        <div class="row pt-3">
            @if(count($upcomingEvents) != 0)
            @foreach ($upcomingEvents as $event)
            <div class="col-md-4">
                <div class="card upcoming-card border-0 shadow h-100">
                    <img src="{{ secure_asset($event->featured_image) }}">
                    <div class="date">
                        <h4>14<br><span class="fw-normal">July</span></h4>

                    </div>
                    <div class="event-content">

                        <h3>{{$event->name}}</h3>
                        <p><i class="fa-regular fa-clock pe-2"></i>{{ date('M d, Y', strtotime($event->date_from)) }}
                        </p>
                        <a href="{{ route('frontend.events.single',  ['id' => $event->id, 'slug' => $event->slug]) }}"
                            class="item-link appointment-btn">Read More <i class="fa fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h3 class="text-center inner-text">No Events</h3>

            @endif
        </div>
    </div>
    <div class="btn_wrapper d-flex justify-content-center mt-5">
        <a href="/events/upcoming" class="text-decoration-none border-0 appointment-btn"> Know More </a>
    </div>
</section>

<p>Join our WhatsApp group to get updates regardingf webinar: <a
        href="https://chat.whatsapp.com/C0L5z1BrFb8I2L57RvcULr"><svg viewBox="0 0 32 32" class="whatsapp-ico">
            <path
                d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                fill-rule="evenodd"></path>
        </svg></a></p> <!-- past events -->
<section class="upcoming-events  pt-5">
    <div class="container">
        <h2 class="text-center">Past Events</h2>
        <p class="text-center">Relive the serenity, dive into past yoga events</p>
        <div class="row pt-3">
            @if(count($pastEvents) != 0)
            @foreach ($pastEvents as $event)
            <div class="col-md-4">
                <div class="card upcoming-card border-0 shadow h-100">
                    <img src="{{ secure_asset($event->featured_image) }}">
                    <div class="date">
                        <h4>14<br><span class="fw-normal">July</span></h4>

                    </div>
                    <div class="event-content">

                        <h3>{{$event->name}}</h3>
                        <p><i class="fa-regular fa-clock pe-2"></i>{{ date('M d, Y', strtotime($event->date_from)) }}
                        </p>
                        <a href="{{ route('frontend.events.single',  ['id' => $event->id, 'slug' => $event->slug]) }}"
                            class="item-link appointment-btn">Read More <i class="fa fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h3 class="text-center inner-text">No Events</h3>

            @endif
        </div>
    </div>
    <div class="btn_wrapper d-flex justify-content-center mt-5">
        <a href="/events/past" class="text-decoration-none border-0 appointment-btn"> Know More </a>
    </div>
</section>

@endsection