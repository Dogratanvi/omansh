@extends('frontend.layouts.app')

@section('title') {{ app_name() }} @endsection

@section('content')

<div class="main-home-page  bg-gray-100 mb-20">
    <!-- slider secction -->
    <section class="slider-image">
    </section>
    <!-- iconbox section-->
    <section class="iconbox py-5">
        <div class="container max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
            <div class="d-flex justify-content-start align-items-center">
                <div style=" border-top: 2px solid #008DF3;" class="underlined"></div>
                <h4 style="color:#008DF3;" class="mb-0 ps-4">Innovations in Technology and Beyond</h4>
            </div>
            <h2 class="pt-4 text-dark text-start"><span>What</span> We Do</h2>
            <div class="row mt-5 d-flex align-items-center">
                @foreach ($module_name_iconbox as $module_name_singular)
                @php
                $details_url = route("frontend.iconbox.show", $module_name_singular->slug);
                @endphp
                <div class="col-md-4 mb-4">
                    <div class="icon-card px-5">
                        <div class="icon-image">
                            <p>{!! $module_name_singular->svg_content !!}</p>
                            <a href="{{ $details_url }}">
                                <h4 class="fw-bold fs-5 text-dark text-start">{{ $module_name_singular->title }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="icon-content pt-4 d-flex">
                <p class="lh-lg p-2 bd-highlight fs-5 " style="color:#0064B7;">AVASO is an IT solution provider with
                    coverage in
                    more than 150 countries as well as global
                    distribution capabilities. We have a proven track record of success providing best-of-breed
                    technology solutions to enterprises of all sizes, including some of the world’s largest brands.</p>

                <p class="lh-lg ms-auto p-4 bd-highlight fs-6" style="color:#898989;">AVASO has extensive expertise in
                    the
                    design and implementation of advanced network infrastructures
                    and web-scale data center environments, as well as the logistics capabilities for large-scale,
                    multisite technology rollouts. With locations worldwide and expertise in complex international
                    transactions, AVASO has the ability to deliver enterprise-class solutions and services across the
                    globe.</p>

            </div>
        </div>
    </section>

    <!-- what news section -->
    <section class="what-we-do py-5">
        <div class="container max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
            <!-- Display Trendingnews or Customcategory in a row or column -->
            <div class="d-flex align-items-center">
                <div class="underlined"></div>
                <h4 class="mb-0 ps-4"> Initiatives and State of the Art
                    Developments</h4>
            </div>
            <h2 class="pt-4"> <span style="color:#1DF5FF;">What’s </span>New</h2>
            <ul class="nav d-flex justify-content-end nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Trending News</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Announcement</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Upcoming
                        Events</button>
                </li>
            </ul>
            <!-- trendingnews tab content -->
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($module_name_trendingnews->slice(1, 3) as $module_name_singular)
                            @php
                            $details_url = route("frontend.trendingnews.show", $module_name_singular->slug);
                            @endphp
                            <div class="row">
                                <div class="mb-4 main-img col-md-4">
                                    <a href="{{ $details_url }}">
                                        <img src="{{ $module_name_singular->featured_image }}"
                                            alt="{{ $module_name_singular->name }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="content col-md-8">
                                    <p class="mb-1 font-normal text-white">
                                        {{ date('M d, Y', strtotime($module_name_singular->published_at)) }}
                                    </p>
                                    <h3 class="mb-4 font-normal text-white">
                                        {{ $module_name_singular->title }}
                                    </h3>
                                    <div class="d-flex justify-content-start d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                            viewBox="0 0 576 512">
                                            <path
                                                d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                        </svg> <span
                                            class="ps-1 font-normal text-white">{{ $module_name_singular->views }}</span>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @php
                            $first_trending_news = $module_name_trendingnews->first();
                            $details_url = route("frontend.trendingnews.show", ['slug' => $first_trending_news->slug]);
                            @endphp
                            <div class="card border-0">
                                <a href="{{ $details_url }}" class="text-decoration-none text-reset">
                                    <img src="{{ $first_trending_news->featured_image }}"
                                        alt="{{ $first_trending_news->title }}" class="w-100">
                                    <div class="card-body px-5" style="background:#1E1E2D;">
                                        <p class="mb-1 font-normal text-white">
                                            {{ date('M d, Y', strtotime($first_trending_news->published_at)) }}
                                        </p>
                                        <h3 class=" font-normal text-white">
                                            {{ $first_trending_news->title }}
                                        </h3>
                                </a>
                                <!-- <p class="mb-3 font-normal text-white">
                                    {!! strip_tags($first_trending_news->content) !!}
                                </p> -->

                                <div class="d-flex justify-content-start d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                        viewBox="0 0 576 512">

                                        <path
                                            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                    </svg> <span
                                        class="ps-1 font-normal text-white">{{ $first_trending_news->views }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Annoucement tab content -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($module_name_announcement->slice(1, 3) as $module_name_singular)
                        @php
                        $details_url = route("frontend.announcements.show", $module_name_singular->slug);
                        @endphp
                        <div class="row">
                            <div class="mb-4 main-img col-md-4">
                                <a href="{{ $details_url }}">
                                    <img src="{{ $module_name_singular->featured_image }}"
                                        alt="{{ $module_name_singular->name }}" class="img-fluid">
                                </a>
                            </div>
                            <div class="content col-md-8">
                                <p class="mb-1 font-normal text-white">
                                    {{ date('M d, Y', strtotime($module_name_singular->published_at)) }}
                                </p>
                                <h3 class="mb-4 font-normal text-white">
                                    {{ $module_name_singular->title }}
                                </h3>
                                <div class="d-flex justify-content-start d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                        viewBox="0 0 576 512">

                                        <path
                                            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                    </svg> <span
                                        class="ps-1 font-normal text-white">{{ $module_name_singular->views }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @php
                        $first_announcement = $module_name_announcement->first();
                        $details_url_announcement = route("frontend.announcements.show", ['slug' =>
                        $first_announcement->slug]);
                        @endphp
                        <div class="card border-0">
                            <a href="{{ $details_url_announcement }}" class="text-decoration-none text-reset">
                                <img src="{{ $first_announcement->featured_image }}"
                                    alt="{{ $first_announcement->title }}" class="w-100">
                                <div class="card-body px-5" style="background:#1E1E2D;">
                                    <p class="mb-1 font-normal text-white">
                                        {{ date('M d, Y', strtotime($first_announcement->published_at)) }}
                                    </p>
                                    <h3 class="font-normal text-white">
                                        {{ $first_announcement->title }}
                                    </h3>
                                    <div class="d-flex justify-content-start d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                            viewBox="0 0 576 512">

                                            <path
                                                d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                        </svg>
                                        <span
                                            class="ps-1 font-normal text-white">{{ $first_announcement->views }}</span>
                                    </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Event tab content -->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
                <div class="col-md-6">
                    @foreach ($module_name_events->slice(1, 3) as $module_name_singular)
                    @php
                    $details_url = route("frontend.events.show", $module_name_singular->slug);
                    @endphp
                    <div class="row">
                        <div class="mb-4 main-img col-md-4">
                            <a href="{{ $details_url }}">
                                <img src="{{ $module_name_singular->featured_image }}"
                                    alt="{{ $module_name_singular->name }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="content col-md-8">
                            <p class="mb-1 font-normal text-white">
                                {{ date('M d, Y', strtotime($module_name_singular->published_at)) }}
                            </p>
                            <h3 class="mb-4 font-normal text-white">
                                {{ $module_name_singular->title }}
                            </h3>
                            <div class="d-flex justify-content-start d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                    <path
                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                </svg>
                                <span class="ps-1 font-normal text-white">{{ $module_name_singular->views }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-6">
                    @php
                    $first_event = $module_name_events->first();
                    $details_url = route("frontend.events.show", ['slug' => $first_event->slug]);
                    @endphp
                    <div class="card border-0">
                        <a href="{{ $details_url }}" class="text-decoration-none text-reset">
                            <img src="{{ $first_event->featured_image }}" alt="{{ $first_event->title }}" class="w-100">
                            <div class="card-body px-5" style="background:#1E1E2D;">
                                <p class="mb-1 font-normal text-white">
                                    {{ date('M d, Y', strtotime($first_event->published_at)) }}
                                </p>
                                <h3 class=" font-normal text-white">
                                    {{ $first_event->title }}
                                </h3>


                                <div class="d-flex justify-content-start d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                    </svg>
                                    <span class="ps-1 font-normal text-white">{{ $first_event->views }}</span>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- what news section end--->
    <!-- Kpi Section -->
    <section class="kpi-section py-5">
        <div class="container max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
            <div class="d-flex align-items-center">
                <div class="underlined"></div>
                <h4 class="mb-0 ps-4">Our Impactful Milestones</h4>
            </div>
            <h2 class="pt-4"><span style="color:#1DF5FF;">AVASO </span>Advantage</h2>

            <div class="row mt-4 d-flex align-items-center">
                @foreach ($kpi as $kpiItem)
                <div class="col-md-3 mb-4">
                    <div class="box d-flex align-items-center">
                        <div class="kpi-image">
                            <p>{!! $kpiItem->svg_content !!}</p>
                        </div>
                        <div class="card-body text-center">
                            <h2 class="text-white text-start mb-0">
                                <span class="counter">
                                    {{ $kpiItem->countdown }}</span><span>{{ $kpiItem->prefix }}</span>
                            </h2>
                            <h6 class="text-white text-start">{{ $kpiItem->title }}</h6>
                            <!-- You can customize the display of other attributes as needed -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end kpi section -->

    <!-- spotlight section -->
    <section class="spotlight py-5">
        <div class="container max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
            <div class="d-flex justify-content-center align-items-center">
                <div style=" border-top: 2px solid #008DF3;" class="underlined"></div>
                <h4 style="color:#008DF3;" class="mb-0 ps-4">Our Impactful Milestones</h4>
            </div>
            <h2 class="pt-4 text-dark text-center"><span style="color:#00B3BB;">Spotlight </span>on Excellence</h2>

            <div class="row mt-5 d-flex align-items-center">
                @foreach ($module_name_spotlight as $module_name_singular)
                @php
                $details_url = route("frontend.spotlight.show", $module_name_singular->slug);
                @endphp
                <div class="col-md-4 mb-4">
                    <div class="card border rounded-pill">
                        <div class="main-image">
                            <a href="{{ $details_url }}">
                                <img src="{{ $module_name_singular->featured_image }}"
                                    alt="{{ $module_name_singular->name }}"
                                    class="spot-image card-img-top img-fluid h-25">
                            </a>
                            <h6 class="text-white order-text fs-2  px-5 fw-bold text-start">
                                0{{ $module_name_singular->order }}</h6>
                        </div>
                        <div class="card-body px-5"
                            style="background:#004263;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;">
                            <h4 class="fw-bold fs-5 text-white text-start">{{ $module_name_singular->title }}</h4>
                            <h6 class="fs-6 lh-base text-white">{!! $module_name_singular-> content!!}</h6>
                            <a class="text-white text-start" href="{{ $details_url }}">
                                READ MORE
                            </a>

                            <!-- You can customize the display of other attributes as needed -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- driving transformation and logos -->

    <section class="logos py-5">
        <div class="container max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="d-flex justify-content-start align-items-center">
                        <div style=" border-top: 2px solid #fff;" class="underlined"></div>
                        <h4 style="color:#fff;" class="mb-0 ps-4">Industries</h4>
                    </div>
                    <h2 class="pt-4 text-white text-start"><span style="color:#1DF5FF;">AVASO </span>Partners</h2>
                </div>
                <div class="col-md-8">
                    <div class="row d-flex align-items-center">
                        @foreach ($module_name_logos as $module_name_singular)
                        @php
                        $details_url = route("frontend.logos.show", $module_name_singular->slug);
                        @endphp
                        <div class="col-md-3 mb-4">

                            <div class="card logo-card">
                                <a href="{{ $details_url }}"
                                    class="d-flex align-items-center logo-height justify-content-center">
                                    <img src="{{ $module_name_singular->logo_image }}"
                                        alt="{{ $module_name_singular->name }}" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="transformation py-5">
        <div class="container max-w-7xl mx-auto px-5 py-5 sm:px-6 lg:px-8 bg-white top-section shadow">
            <div class="row align-items-center pt-5">
                <div class="col-md-6">
                    <div class="d-flex justify-content-start align-items-center">
                        <div style=" border-top: 2px solid #0064B7;" class="underlined"></div>
                        <h4 style="color:#0064B7;" class="mb-0 ps-4">Serving Multiple Industries</h4>
                    </div>
                    <h2 class="pt-4 text-dark text-start"><span style="color:#00B3BB;">Driving </span>Transformation
                    </h2>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-end align-items-center">
                        <a class="explore-button d-flex aligin-items-center" style="color:#0064B7;" href=""><span
                                class="icon-arrow d-flex align-items-center"
                                style="line-height:0; border:1px solid #D6D6D6"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="13" height="13" viewBox="0 0 13 13" fill="#0064B7">
                                    <g clip-path="url(#clip0_660_5773)">
                                        <path
                                            d="M12.4992 6.05231L7.15897 0.712215C7.03545 0.588605 6.87058 0.520508 6.69477 0.520508C6.51897 0.520508 6.35409 0.588605 6.23058 0.712215L5.83731 1.10539C5.58141 1.36158 5.58141 1.77797 5.83731 2.03378L10.3216 6.51807L5.83233 11.0073C5.70882 11.1309 5.64062 11.2957 5.64062 11.4714C5.64062 11.6473 5.70882 11.8121 5.83233 11.9358L6.2256 12.3289C6.34921 12.4525 6.51399 12.5206 6.6898 12.5206C6.8656 12.5206 7.03048 12.4525 7.15399 12.3289L12.4992 6.98392C12.623 6.85992 12.691 6.69436 12.6906 6.51836C12.691 6.34168 12.623 6.17622 12.4992 6.05231Z"
                                            fill="#0064B7" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_660_5773">
                                            <rect width="12" height="12" fill="white"
                                                transform="translate(0.71875 0.520508)" />
                                        </clipPath>
                                    </defs>
                                </svg></span><span class="d-flex ps-3 align-items-center">Explore</span></a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex align-items-center pb-5">
                @foreach ($module_name_transformation as $module_name_singular)
                @php
                $details_url = route("frontend.transformation.show", $module_name_singular->slug);
                @endphp
                <div class="col-md-4 mb-4">
                    <div class="transformation-box rounded-pill">
                        <div class="main-image">
                            <a href="{{ $details_url }}">
                                <img src="{{ $module_name_singular->featured_image }}"
                                    alt="{{ $module_name_singular->name }}" class="w-100 h-25"
                                    style="border-radius:20px;">
                            </a>
                            <h6 class="fs-4 py-4 fw-bold text-start" style="color:#0064B7;">
                                0{{ $module_name_singular->order }}</h6>

                            <h4 class="fw-bold fs-3 text-dark text-start">{{ $module_name_singular->title }}</h4>
                            <h6 class="fs-6 lh-base" style="color:#898989;">{!! $module_name_singular-> content!!}</h6>


                            <a class="text-start" style="color:#0064B7;" href="{{ $details_url }}">
                                READ MORE
                            </a>

                            <!-- You can customize the display of other attributes as needed -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- End  section -->

    <!-- contact -->
    <section class="contact-form py-5">
        <div class="container py-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="underlined"></div>
                <h4 class="mb-0 ps-4">Leave A Message</h4>
            </div>
            <h2 class="pt-4 text-white text-center"><span style="color:#00B3BB;">We Would Love </span>To Hear From
                You
            </h2>
            <div class="row d-flex align-item-center py-5">
                <div class="col-md-6 offset-md-3">

                    {{-- Display success message if it exists --}}
                    @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('frontend.index.store') }}" method="post" id="contactForm"
                        onsubmit="return validateForm()">
                        @csrf
                        @include ("frontend.form")

                    </form>
                </div>
            </div>
        </div>
        <div class="mt-5 py-5 h-25">
        </div>
    </section>

    <!-- mailchimp -->
    <form action="/subscribe" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter your email address">
        <button type="submit">Subscribe</button>
    </form>
</div>


@endsection