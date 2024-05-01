@extends('frontend.layouts.app')


@section('content')

<div class="banner-section-outer">


    <!-- BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 text-md-left text-center">
                    <div class="banner-section-content">
                        <h5
                            class="text-center text-lg-start text-sm-center text-xs-center text-md-start text-xl-start ">
                            WELCOME TO</h5>
                        <h1 class="text-center text-lg-start text-sm-center text-xs-center text-md-start text-xl-start "
                            data-aos="fade-up">OMANSH <br> <span class="ityped"></span></h1>
                        <p class="text-center text-lg-start text-sm-center text-xs-center text-md-start text-xl-start "
                            data-aos="fade-right">Tailored Solutions for Total Wellness: Your Destination for Women's Health Care,
                            Personalized Physiotherapy, and Yoga ! </p>
                        <div class="btn_wrapper home-btn text-white fw-bolder text-center text-lg-start text-sm-center text-xs-center text-md-start text-xl-start "
                            data-aos="fade-up">
                           <a href="./contact" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right" aria-hidden="true"> </i></a>
                        </div>

                        <!-- <a class="top-btn"  href="{{ route('frontend.index') }}#footer_section">
                           <i class="fa-solid fa-arrow-down-long"></i>
                        </a> -->
                        <figure
                            class="banner_left_top_shape_inner left_shape mb-0 text-center text-lg-start text-sm-center text-xs-center text-md-start text-xl-start">
                            <img src="{{ asset('img/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="banner-section-image">
                        <figure class=" mb-0 text-end">
                            <img class="w-100" src="{{ asset('images/banner_right_image.png') }}" alt="">
                        </figure>
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
    <!-- SOCIAL ICONS -->
    <div class="left_icons float-right " data-aos="fade-down">
        <div class="icon_content d-table-cell align-middle">
            <ul class="list-unstyled p-0 m-0">
                <li>
                    <a href="{{$settings[2]->value}}" target="_blank"><i class="fa-brands fa-facebook-f"
                            aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="{{$settings[9]->value}}" target="_blank"><i class="fa-brands fa-instagram"
                            aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="{{$settings[4]->value}}" target="_blank"><i class="fa-brands fa-linkedin-in"
                            aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="{{$settings[10]->value}}" target="_blank"><i class="fa-brands fa-google"
                            aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="{{$settings[5]->value}}" target="_blank"><i class="fa-brands fa-youtube"
                            aria-hidden="true"></i></a>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- OUR SERVICES SECTION -->
<section class="services_section">
    <div class="container">
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="services_content">
                    <h2>Our Services</h2>
                    <p class="text-center">Explore a spectrum of services dedicated to your health and well-being.</p>
                </div>
            </div>

        </div>
        <div class="row pt-3" data-aos="fade-up">
            @foreach ($services as $service)
            <div class="col-lg-4 col-12 col-xl-4 col-md-6 col-sm-12 col-xs-12">
                <div class="services_box_content">
                    <div class="services_box_upper_portion">

                        <figure class="mb-0"><img src="{{asset($service->featured_image)}}" alt=""
                                class="img-fluid w-100"></figure>
                    </div>
                    <div class="services_box_lower_portion pt-2">
                        <h3> {{ $service->name}}</h3>

                        <div class="service-text">{!! $service->intro!!}</div>

                        <div class="text-center text-sm-center text-xs-center text-md-start text-lg-start text-xl-start">


                            <a href="{{$service->url}}" class="home-btns btn--hover-icon">
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"> </i>
                                <span>Read More</span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
        <figure class="services_left_shape left_shape mb-0">
            <img src="{{ asset('images/services_left_shape.png') }}" alt="" class="img-fluid w-100">
        </figure>
    </div>
</section>
<!-- ABOUT US SECTION -->
<section class="aboutus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
                <div class="aboutus_image">
                    <figure
                        class="mb-0 text-sm-center text-xs-center text-lg-start text-xl-start text-md-start text-center">
                        <img src="{{ asset('img/better-life.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="aboutus_content">
                    <h5>About us</h5>
                    <h2>Better Life With Optimal Health</h2>
                    <p>Every step towards health at Omansh Health & Fitness is based on care, knowledge, and a strong
                        desire to make people's lives better.</p>
                    <p>Our centre is more than just a health facility. It's a community committed to promoting health
                        and happiness. It was started by Dr. Garima Biswas, a leader in holistic health and an expert in
                        Pelvic Floor Rehabilitation. Through her 15+ years of deep knowledge of the human body and their
                        desire to spread the benefits of good health, we invite you to start a personalised journey to
                        becoming your best self.</p>
                    <p>At Omansh, we think that the best way to get the most out of your body is to combine ancient
                        methods with cutting-edge science.</p>

                    <div class="btn_wrapper">
                        <a href="{{ route('frontend.about') }}" class="text-decoration-none get_started_btn">Read
                            More</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- OUR SPECIALTIES SECTION -->
<section class="our_specialties_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="our_specialties_heading_content">

                    <h2>Why Choose Us</h2>
                    <p class="text-center">Empowering your health journey with compassion and expertise.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                <div class="specialties_content_wrapper">
                    <div class="specialties_content s1">
                        <p class="specialties_name">Expert Leadership</p>
                        <p class="specialties_paragraph">Led by Dr. Garima Biswas, 15+ years of experience, ensuring
                            you're in safe hands</p>
                    </div>
                    <div class="specialties_content s2">
                        <p class="specialties_name">Holistic Approach</p>
                        <p class="specialties_paragraph"> Traditional practices with modern science for a wellness
                            journey.</p>
                    </div>
                    <div class="specialties_content s3">
                        <p class="specialties_name">Specialized Women's Health Care</p>
                        <p class="specialties_paragraph">Solutions for women's health issues, such as pelvic floor rehab
                            & pregnancy care.</p>
                    </div>
                    <div class="specialties_content s4">
                        <p class="specialties_name">Innovative Physio-Yoga Therapy</p>
                        <p class="specialties_paragraph">Blend of physiotherapy and medical therapeutic yoga to enhance
                            your healing experience.</p>
                    </div>
                    <figure class="specialties_left_line mb-0">
                        <img src="{{ asset('images/specialties_left_line.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-md-block d-none">
                <figure class="specialties_image mb-0">
                    <img src="{{ asset('images/specialties_image.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                <div class="specialties_content_wrapper">
                    <div class="specialties_content specialties_content2 s5">
                        <p class="specialties_name">Personalized Care Plans</p>
                        <p class="specialties_paragraph">Every treatment is customized to meet your individual health
                            goals and needs.</p>
                    </div>
                    <div class="specialties_content specialties_content2 s6">
                        <p class="specialties_name">Evidence-Based Practices</p>
                        <p class="specialties_paragraph">Utilizing proven methods for effective and safe treatment
                            outcomes.</p>
                    </div>
                    <div class="specialties_content specialties_content2 s7">
                        <p class="specialties_name">Wide Range of Services</p>
                        <p class="specialties_paragraph">Physiotherapy to yoga, we cover all aspects of health and
                            fitness</p>
                    </div>
                    <div class="specialties_content specialties_content2 s8">
                        <p class="specialties_name">Compassionate Support</p>
                        <p class="specialties_paragraph">A nurturing environment where every client is seen, heard, and
                            valued.</p>
                    </div>
                    <figure class="specialties_right_line mb-0">
                        <img src="{{ asset('images/specialties_right_line.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="our_specialties_right_shape right_shape mb-0">
            <img src="{{ asset('images/our_specialties_right_shape.png') }}" alt="" class="img-fluid">
        </figure>
    </div>
</section>

<!-- GET IN TOUCH SECTION -->
<section class="get_in_touch_section">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="get_in_touch_content message_content">
                    <h5>Get in touch</h5>
                    <h2>Get a Consultation Now</h2>
                    @if (session('message'))
                    <div class="alert alert-{{ session('status') }} alert-dismissible fade show w-75 mt-3" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form id="contactpage" method="POST" action="{{ url('contact') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="first_name" id="fname" class="form-control"
                                        placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="last_name" id="lname" class="form-control form_style"
                                        placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="tel" name="phone" id="phonenum" class="form-control"
                                        placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="email" name="email" id="emailaddrs" value="Email"
                                        class="form-control form_style" placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-0">

                                    <select name="service" id="service" class="form-select" required>
                                        <option selected disabled>Services</option>
                                        <option value="women_health">Women Health</option>
                                        <option value="physiotherapy">Physiotherapy</option>
                                        <option value="yoga">Yoga</option>
                                        <option value="yoga">Corporate Training</option>
                                            <option value="yoga">Yoga Training</option>
                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" form-group mb-0">
                                    <textarea rows="3" name="message" id="comment" class="form-control"
                                        placeholder="Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" name="g-token" id="recaptchaToken" required>
                                <div class="g-recaptcha mt-4 mb-4" data-sitekey={{ config('services.recaptcha.key') }}>
                                </div>
                                <span class="text-danger">{{ $errors->first('Click to verify') }}</span>
                            </div>
                        </div>
                        <div class="btn_wrapper">
                            <button type="submit" class="border-0" id="started">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 d-md-block d-none"></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="get_in_touch_video position-relative">
                <a class="popup-vimeo"
                    href="https://previews.customer.envatousercontent.com/6720474d-ddc3-4b86-acf1-8d093cb37b6d/watermarked_preview/watermarked_preview.mp4">
                    <figure class="video_img mb-0">
                        <img class="thumb img-fluid" style="cursor: pointer" src="{{ asset('img/play-icon.png') }}"
                            alt="play-icon">
                    </figure>
                </a>
            </div>
        </div>
    </div>
    <figure class="get_in_touch_shape left_shape mb-0">
        <img src="{{ asset('images/get_in_touch_shape.png') }}" alt="get-in-touch-shape" class="img-fluid">
    </figure>
    </div>
</section>

<!-- Testimonial -->
<section class="our_specialties_section  aboutus_content">
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

        <ul class="nav nav-pills justify-content-between mb-3 pt-3 " id="pills-tab" role="tablist">
            <li class="nav-item mt-2" role="presentation">
                <button class="nav-link custom-btn active border-0" id="pills-all-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                    aria-selected="true">All</button>
            </li>
            <li class="nav-item mt-2" role="presentation">
                <button class="nav-link custom-btn border-0" id="pills-health-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health"
                    aria-selected="false">Women Health</button>
            </li>
            <li class="nav-item mt-2" role="presentation">
                <button class="nav-link border-0 custom-btn" id="pills-physiotherapy-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-physiotherapy" type="button" role="tab" aria-controls="pills-physiotherapy"
                    aria-selected="false">Physiotherapy</button>
            </li>
            <li class="nav-item mt-2" role="presentation">
                <button class="nav-link border-0 custom-btn" id="pills-yoga-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-yoga" type="button" role="tab" aria-controls="pills-yoga"
                    aria-selected="false">Yoga</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row pt-4" id="data">
                    @csrf
                    @foreach ($testimonials as $testimonial)
                    <div class="col-md-3 pt-3 content">

                        <div class="card border-0 videoCard">
                            <a class="btn btn-block videoLink" data-item="{{ $testimonial->featured_video}}"
                                data-toggle="modal" data-target="#deleteLineItemModal">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <img class="loads" src="{{$testimonial->featured_image }}"
                                class="play-btn btn-watch-video w-100" alt="thumbnail" />

                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="btn_wrapper d-flex justify-content-center mt-5">
                    <a href="#" id="loadMore" class="text-decoration-none get_started_btn"> Load More </a>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-health" role="tabpanel" aria-labelledby="pills-health-tab">
                <div class="row pt-4" id="data">
                    @foreach ($testimonials as $testimonial)
                    @if($testimonial->category == "women-health")
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

            <div class="tab-pane fade" id="pills-physiotherapy" role="tabpanel"
                aria-labelledby="pills-physiotherapy-tab">
                <div class="row pt-4" id="data">
                    @foreach ($testimonials as $testimonial)
                    @if($testimonial->category == "physiotherapy")
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
            <div class="tab-pane fade" id="pills-yoga" role="tabpanel" aria-labelledby="pills-yoga-tab">
                <div class="row pt-4" id="data">
                    @foreach ($testimonials as $testimonial)
                    @if($testimonial->category == "yoga")
                    <div class="col-md-3 pt-3 contents ">

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
                <div class="btn_wrapper d-flex justify-content-center mt-5">
                    <a href="#" id="loadMoree" class="text-decoration-none get_started_btn"> Load More </a>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- google review section -->
<!-- <section class="google-review-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
    </div>

</section> -->

<!-- end google review section -->

<!-- BLOG POSTS SECTION -->
<section class="blog_posts_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog_posts_content">

                    <h2>Blog & News</h2>
                    <p class="text-center">Stay informed and inspired - our latest insights and updates.</p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">

            @foreach ($blogs as $blog)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog_posts_image position-relative">
                    <figure class="mb-0"><img src="{{asset($blog->featured_image)}}" alt="" class="img-fluid">
                        <div class="blog-overlay">
                    </figure>
                    <div class="blog_posts_image_content">
                        <span>{{$blog->category}}</span>
                        <h4>{{ $blog->title}}</h4>
                        <div class="icon_wrapper">
                           
                            <a href="{{ route('frontend.blog.show', ['id' => $blog->id, 'slug' => $blog->slug]) }}" class="text-decoration-none"><i
                                    class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="btn_wrapper">
            <a href="/blog" class="text-decoration-none view_blog">View All Blogs</a>
        </div>
        <figure class="blog_posts_left_shape left_shape mb-0">
            <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="" class="img-fluid">
        </figure>
        <figure class="blog_posts_right_shape right_shape mb-0">
            <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="" class="img-fluid">
        </figure>
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
<script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection