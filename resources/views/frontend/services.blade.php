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
                             <div>
                            <h1 data-aos="fade-up">Services</h1>
                            <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                            <p data-aos="fade-right">Ruis aute irure dolor in reprehenderit in volurate velit cillum
                                nulla pariatur nostrud exercitation.</p>  </div>
                        </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span"> Services</span>
                            </div> </div>
                        </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="top-shape" class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="bottom-shape" class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="top-shape" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="bottom-shape" class="img-fluid">
                </figure>
            </div>
        </section>
    </div>
</div>
<!-- OUR SERVICES SECTION -->

<section class="services_section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="services_content">
                    <h2>Our Services</h2>


                    <p class="text-center">Explore a spectrum of services dedicated to your health and well-being</p>
                </div>
            </div>

        </div>
        <div class="row pt-3" data-aos="fade-up">
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="services_box_content">
                    <div class="services_box_upper_portion">

                        <figure class="mb-0"><img src="{{asset($service->featured_image)}}" alt="service-featured"
                                class="img-fluid w-100"></figure>
                    </div>
                    <div class="services_box_lower_portion pt-2">
                        <h3> {{ $service->name}}</h3>

                        <div class="service-text">{!! $service->intro!!}</div>


                   
                        <!-- <div class="btn_wrapper">
                            <a href="./services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"> </i></a>
                        </div> -->
                        <div
                            class=" text-center text-sm-center text-xs-center text-md-start text-lg-start text-xl-start">
                            <a href="{{$service->url}}">
                                <div class="btn btns">
                                    <span>Read More</span>

                                    <i class="fa-solid fa-arrow-right ico" aria-hidden="true"> </i>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
        <figure class="services_left_shape left_shape mb-0">
            <img src="{{ asset('images/services_left_shape.png') }}" alt="services_left_shape" class="img-fluid w-100">
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
                    <h2>Get a Free Consultation Now</h2>
                    <form id="contactpage" method="POST" action="{{ url('contact') }}">
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
                                    <input type="email" name="email" id="emailaddrs" value="email"
                                        class="form-control form_style" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-0">

                                    <select name="service" id="service" class="form-select">
                                        <option selected disabled>Services</option>
                                        <option value="women_health">Women Health</option>
                                        <option value="physiotherapy">Physiotherapy</option>
                                        <option value="yoga">Yoga</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" form-group mb-0">
                                    <textarea rows="3" name="message" id="comment" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_wrapper">
                            <button type="submit" class="border-0" id="started">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 d-md-block d-none"></div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="get_in_touch_video position-relative">
                    <a class="popup-vimeo"
                        href="https://previews.customer.envatousercontent.com/6720474d-ddc3-4b86-acf1-8d093cb37b6d/watermarked_preview/watermarked_preview.mp4">
                        <figure class="video_img mb-0">
                            <img class="thumb img-fluid" style="cursor: pointer"
                                src="{{ asset('img/play-icon.png') }}" alt="play-icon">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
        <figure class="get_in_touch_shape left_shape mb-0">
            <img src="{{ asset('images/get_in_touch_shape.png') }}" alt="get_in_touch_shape" class="img-fluid">
        </figure>
    </div>
</section>
<!-- OUR SPECIALTIES SECTION -->
<section class="our_specialties_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="our_specialties_heading_content">

                    <h2>Why Choose Us</h2>
                    <p class="text-center">Empowering Your Health Journey with Compassion and Expertise</p>
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
                        <p class="specialties_paragraph"> Traditional practices with modern science for a wellness journey.</p>
                    </div>
                    <div class="specialties_content s3">
                        <p class="specialties_name">Specialized Women's Health Care</p>
                        <p class="specialties_paragraph">Solutions for women's health issues, such as pelvic floor rehab & pregnancy care.</p>
                    </div>
                    <div class="specialties_content s4">
                        <p class="specialties_name">Innovative Physio-Yoga Therapy</p>
                        <p class="specialties_paragraph">Blend of physiotherapy and medical therapeutic yoga to enhance your healing experience.</p>
                    </div>
                    <figure class="specialties_left_line mb-0">
                        <img src="{{ asset('images/specialties_left_line.png') }}" alt="specialties-left-line" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-md-block d-none">
                <figure class="specialties_image mb-0">
                    <img src="{{ asset('images/specialties_image.png') }}" alt="specialties" class="img-fluid">
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
                        <p class="specialties_paragraph">Physiotherapy to yoga, we cover all aspects of health and fitness</p>
                    </div>
                    <div class="specialties_content specialties_content2 s8">
                        <p class="specialties_name">Compassionate Support</p>
                        <p class="specialties_paragraph">A nurturing environment where every client is seen, heard, and
                            valued.</p>
                    </div>
                    <figure class="specialties_right_line mb-0">
                        <img src="{{ asset('images/specialties_right_line.png') }}" alt="right_shape" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <figure class="our_specialties_right_shape right_shape mb-0">
            <img src="{{ asset('images/our_specialties_right_shape.png') }}" alt="right_shape" class="img-fluid">
        </figure>
    </div>
</section>
<!-- TESTIMONIAL SECTION -->
<div class="testimonial_section">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial_content">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="testimonial_paragraph">“Quisuam est, qui dolorem ipsum quia dolor sit amet,
                                    consec velit sed ruia non nuam
                                    eius modi tempora incidunt ut magnam aliruam auzerat voluptatem autenim rea minima
                                    exercita ionem ullam corporis suscitnis officiis debitis aut rerum necessitatibus
                                    saepe
                                    evenietut aer voluptates”</p>
                                <figure><img src="{{ asset('images/testimonial_image.png') }}" alt="testimonial" class="img-fluid">
                                </figure>
                                <p class="testimonial_person_name">Himala Joerge</p>
                                <span>Happy client</span>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial_content">
                                <i class="fa-solid fa-quote-left"></i>
                                <p class="testimonial_paragraph">“Quisuam est, qui dolorem ipsum quia dolor sit amet,
                                    consec velit sed ruia non nuam
                                    eius modi tempora incidunt ut magnam aliruam auzerat voluptatem autenim rea minima
                                    exercita ionem ullam corporis suscitnis officiis debitis aut rerum necessitatibus
                                    saepe
                                    evenietut aer voluptates”</p>
                                <figure><img src="{{ asset('images/testimonial_image.png') }}" alt="testimonial" class="img-fluid">
                                </figure>
                                <p class="testimonial_person_name">Himala Joerge</p>
                                <span>Happy client</span>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fa-solid fa-arrow-left-long"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fa-solid fa-arrow-right-long"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <figure class="testimonial_left_shape left_shape mb-0">
            <img src="{{ asset('images/testimonial_left_shape.png') }}" alt="left-shape" class="img-fluid">
        </figure>
        <figure class="testimonial_right_shape right_shape mb-0">
            <img src="{{ asset('images/testimonial_right_shape.png') }}" alt="right-shape" class="img-fluid">
        </figure>
    </div>
</div>
<!-- BLOG POSTS SECTION -->
<section class="blog_posts_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog_posts_content">
                  
                    <h2>Blog & News</h2>
                    <p>Stay Informed and Inspired - Our Latest Insights and Updates</p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog_posts_image position-relative">
                    <figure class="mb-0"><img src="{{ asset('images/blog_posts_1.png') }}" alt="yoga-health" class="img-fluid">
                    </figure>
                    <div class="blog_posts_image_content">
                        <span>YOGA</span>
                        <h4>Yoga Effects on Brain Health: A Systematic Review of the Current Literature</h4>
                        <div class="icon_wrapper">
                            <a href="./single-post.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="blog_posts_image position-relative">
                    <figure class="mb-0"><img src="{{ asset('images/blog_posts_2.png') }}" alt="blog-post" class="img-fluid">
                    </figure>
                    <div class="blog_posts_image_content">
                        <span>FITNESS</span>
                        <h4>Maintaining a regular yoga practice can provide physical health</h4>
                        <div class="icon_wrapper">
                            <a href="./single-post.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_wrapper">
            <a href="./single-post.html" class="text-decoration-none view_blog">View All Blogs</a>
        </div>
        <figure class="blog_posts_left_shape left_shape mb-0">
            <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="left-shape" class="img-fluid">
        </figure>
        <figure class="blog_posts_right_shape right_shape mb-0">
            <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="right-shape" class="img-fluid">
        </figure>
    </div>
</section>



@endsection