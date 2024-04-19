@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section about-banner">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content">
                                <h1 data-aos="fade-up">About Us</h1>
                                <p class="text-center" data-aos="fade-right">Duis aute irure dolor in reprehenderit in volurate velit cillum
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
    <!-- ABOUT US SECTION -->
    <section class="aboutpage_aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="aboutpage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/optimal-health.png') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <h6>
                                    Dr. GARIMA BISWAS (PT)<br> Founder Director - OMANSH</h6>
                            </div>
                            <div class="col-md-6 ">
                                <div class="social-icons d-flex justify-content-center align-items-center h-100 w-100">
                                    <a href=""> <img src="{{ asset('img/facebook.png') }}"></a>
                                    <a href=""> <img class="ps-3" src="{{ asset('img/instagram.png') }}"></a>
                                    <a href=""> <img class="ps-3" src="{{ asset('img/linkedin.png') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " data-aos="fade-right">
                    <div class="aboutpage_aboutus_content  ">
                        <h5>About us</h5>
                        <h2>Better Life With Optimal Health</h2>
                        <p>We're not just a team at OMANSH; we're a family whose only goal is to help people live better
                            and happier lives. Dr. Garima Biswas founded OMANSH, a pioneer with more than 15 years of
                            experience researching the human body. It has become a light for people who are trying to
                            balance their health and well-being with the needs of a busy work and family life.
                        </p>
                        <p>Our company is based on a strong belief in the transformative power of physiotherapy and
                            yoga. These are the fields of study that we think hold the answers to the living problems we
                            face today. These techniques don't just heal the body; they also heal the soul and help
                            people grow in their personal and work lives.</p>
                        <p class="margin_bottom">Dr. Biswas is a leader in her field and brings a unique combination of
                            knowledge and compassion to her work. Some of her impressive qualifications are that she is
                            an Internationally Certified Pilates and Yoga Therapist and that she specialises in Women's
                            Health Physiotherapy, Pelvic Floor Rehabilitation, Antenatal and Postnatal Therapy, and
                            Women's Health Physiotherapy. Her goal with OMANSH is clear: to make as many lives better
                            through health and fitness as possible.</p>

                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-6">
                    <h2>What We Offer</h2>
                    <p>We are experts in women's health physiotherapy and offer methods that have been shown to work for
                        a wide range of conditions, from pelvic floor problems to care for women who have gone through
                        menopause. As part of our overall approach, we offer a wide range of services in General Yoga
                        and Pilates, each one customised to meet the specific needs of each person of any age.

                    </p>
                    <p>OMANSH isn't just about helping one person; it's also about teaching and building communities. We
                        help people with a wide range of problems, from stress management to specific health issues,
                        through Corporate and Medical Yoga classes. By combining Physiotherapy and Yoga, we can create a
                        unique healing path for each client.

                    </p>
                </div>
                <div class="col-md-6">
                    <h2>What We Promise</h2>
                    <p>We're proud that we've made Pelvic Floor Physiotherapy a well-known and good experience for
                        people who are suffering in silence and need help. Our team of all-women physiotherapists has
                        been carefully trained to provide caring and individualised care. They make sure that each
                        patient gets a full evaluation to find out what caused their condition and create a treatment
                        plan that is just right for them.

                    </p>
                    <p>The most important thing we do at OMANSH is teach. Our team gets regular, intense training in the
                        anatomy and physiology of humans. This makes sure that our practices are based in medical
                        science while still enjoying the many benefits of Yoga for the whole person.
                    </p>
                    <p>We do more than just one-on-one lessons; we've worked with big names in the industry, like
                        DECATHLON, on Yoga and Physical Health projects, and our work has been recognised with a lot of
                        workshops, seminars, and media interviews. 
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- OUR MISSION SECTION -->
    <section class="mission_section">
        <div class="container">
            <div class="mission_box">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up">
                        <div class="mission_content">

                            <h2>Our Mission</h2>
                            <p>Our centre is more than just a health facility. It's a community committed to promoting
                                health and happiness. It was started by Dr. Garima Biswas, a leader in holistic health
                                and an expert in Pelvic Floor Rehabilitation. Through her 15+ years of deep knowledge of
                                the human body and their desire to spread the benefits of good health, we invite you to
                                start a personalised journey to becoming your best self.</p>
                            <div class="btn_wrapper">
                                <a href="./pricing.html" class="text-decoration-none read_more_btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mission_image">
                            <figure class="mb-0"><img src="{{ asset('images/our_mission_image.png') }}" alt=""
                                    class="img-fluid"></figure>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="mission_right_shape right_shape mb-0">
                <img src="{{ asset('images/our_mission_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- OUR VISION SECTION -->
    <section class="vision_section">
        <div class="container">
            <div class="vision_box">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="vision_image">
                            <figure class="mb-0"><img src="{{ asset('images/our_vision_image.png') }}" alt=""
                                    class="img-fluid"></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up">
                        <div class="vision_content">

                            <h2>Our Vision</h2>
                            <p>Our centre is more than just a health facility. It's a community committed to promoting
                                health and happiness. It was started by Dr. Garima Biswas, a leader in holistic health
                                and an expert in Pelvic Floor Rehabilitation. Through her 15+ years of deep knowledge of
                                the human body and their desire to spread the benefits of good health, we invite you to
                                start a personalised journey to becoming your best self.</p>
                            <div class="btn_wrapper">
                                <a href="" class="text-decoration-none read_more_btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="vision_left_shape left_shape mb-0">
                <img src="{{ asset('images/our_vision_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- ACHIEVEMENTS SECTION -->
    <section class="achievement_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="achievement_content">
                        <h2>Achievements</h2>

                        <p class="pb-3">Pioneering wellness and holistic health innovations through prestigious
                            partnerships,
                            widespread media recognition, and impactful community engagements.</p>
                    </div>
                </div>
            </div>
            <div class="logo-container" data-aos="fade-up">
                <div class="logo-box">
                    <div class="logo_wrapper craft">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_1.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_2.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper q-power">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_3.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper logo">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_4.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper minimum">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_5.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>

            </div>

            <div class="logo-container mt-3" data-aos="fade-up">
                <div class="logo-box">
                    <div class="logo_wrapper craft">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_1.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_2.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper q-power">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_3.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper logo">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_4.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>
                <div class="logo-box">
                    <div class="logo_wrapper minimum">
                        <figure class="mb-0"><img src="{{ asset('images/achievement_5.png') }}" alt=""
                                class="img-fluid"></figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- BLOG POSTS SECTION -->
    <section class="blog_posts_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_posts_content">

                        <h2>Instagram Feeds</h2>
                        <p>Discover daily doses of wellness inspiration, transformative health tips, and
                            behind-the-scenes glimpses.</p>
                    </div>
                </div>
            </div>
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-af74a9e2-7ad5-4fe5-b3bb-147a7376bd59" data-elfsight-app-lazy></div>
            <div class="row" data-aos="fade-up">
              
                

            </div>
     
            <figure class="blog_posts_left_shape left_shape mb-0">
                <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="" class="img-fluid">
            </figure>
            <figure class="blog_posts_right_shape right_shape mb-0">
                <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    
    <!-- SUBSCRIBE SECTION -->
    <section class="subscribe_section">
        <div class="container">
            <div class="subscribe_background_image">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12" data-aos="fade-right">
                        <div class="subscribe_content">
                            <h5>Subscribe now</h5>
                            <h2>Get the Latest Updates With Our Newletter</h2>
                            <form method="POST">
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" name="email" id="emailadd" class="form-control"
                                            placeholder="Enter You Email">
                                        <button type="submit" name="btnsubmit" id="submitbutton">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <figure class="subscribe_image mb-0">
                            <img src="{{ asset('images/subscribe_image.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection