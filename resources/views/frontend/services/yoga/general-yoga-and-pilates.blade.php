@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section general-yoga-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                 <div>
                                <h1 >General Yoga & Pilates</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p class="pb-0" >Fitness and wellness have become more
                                            important than ever, and combining yoga with pilates offers a powerful approach
                                            to achieving a healthy mind and body. Whether you’re a fitness enthusiast or
                                            just starting, our general yoga and pilates classes in Ghaziabad cater to all
                                            levels and provide a holistic solution for modern living.</p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span pe-2"><a href="/services/yoga">Yoga</a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"><a>General Yoga & Pilates
                                        </a></span>
                                </div> </div>
                            </div>
                        </div>
                    </div>
                    <figure class="banner_left_top_shape left_shape mb-0">
                        <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="banner_left_top_shape"
                            class="img-fluid">
                    </figure>
                    <figure class="banner_left_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="banner_left_bottom_shape"
                            class="img-fluid">
                    </figure>
                    <figure class="banner_right_top_shape right_shape mb-0">
                        <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="banner_right_top_shape"
                            class="img-fluid">
                    </figure>
                    <figure class="banner_right_bottom_shape right_shape mb-0">
                        <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="banner_right_bottom_shape"
                            class="img-fluid">
                    </figure>
                </div>
            </section>
        </div>
    </div>

    {{-- Introduction to General Yoga & Pilates --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/General-yoga.webp') }}"
                                alt="Care-essential" class="img-fluid">
                        </figure>
                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="aboutus_top_shape" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="aboutus_bottom_shape"
                            class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">
                        <h2>Introduction to General Yoga & Pilates
                        </h2>
                        <p>At our center in Ghaziabad, we blend the ancient wisdom of yoga with the dynamic movements of
                            pilates to offer a comprehensive fitness experience.
                        </p>
                        <p>Yoga focuses on improving flexibility, balance, and relaxation. Pilates emphasizes building core
                            strength, enhancing posture, and mastering controlled movements. Together, they create a
                            balanced practice that supports overall health, helps you de-stress, and improves physical
                            performance.</p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Benefits of Medical Yoga in Ghaziabad    --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Benefits of Yoga & Pilates in Ghaziabad</h2>
                        <p class="pt-2">Residents of Ghaziabad can enjoy numerous benefits from combining yoga and
                            pilates, such as:
                        </p>
                        <ul class="ps-5">
                            <li>
                                <h3> Improved Flexibility:</h3> Yoga enhances flexibility, reduces stiffness, and lowers the
                                risk of injuries, making it ideal for people leading busy lifestyles in Ghaziabad.


                            </li>
                            <li>
                                <h3> Core Strength & Stability:</h3>Pilates builds a strong core, improving posture and
                                balance, essential for physical health in an urban environment like Ghaziabad.
                            </li>
                            <li>
                                <h3>Stress Relief:</h3>Yoga's deep breathing and mindfulness techniques provide relaxation,
                                helping reduce stress and anxiety often caused by hectic schedules.
                            </li>
                            <li>Better Posture Pilates strengthens spinal alignment, reducing back pain and promoting better
                                body mechanics, especially for office workers in Ghaziabad.

                            </li>
                            <li>
                                <h3>Holistic Fitness:</h3>The combination of yoga and pilates delivers a full-body workout
                                that is perfect for modern Ghaziabad lifestyles, catering to physical and mental health.
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/General-yoga-and-pilates.webp') }}"
                                alt="Common Conditions Treated" class="img-fluid">
                        </figure>

                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="aboutus_top_shape" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="aboutus_bottom_shape"
                            class="img-fluid">
                    </figure>
                </div>

            </div>


        </div>
    </section>
    <!-- Who Should Try Yoga & Pilates in Ghaziabad?-->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Who Should Try Yoga & Pilates in Ghaziabad?
            </h2>
            <p class="pt-2 text-center">Our yoga and pilates classes in Ghaziabad are designed to meet the needs of diverse
                groups:

            </p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/yoga/General-yoga-for-beginner.webp') }}" alt="/General-yoga-for-beginner">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Beginners:
                            </h3>
                            <ul>
                                <li>Our beginner-friendly classes introduce you to the basics of yoga and pilates at a
                                    comfortable pace. </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/General-yoga-for-active-individuals.webp') }}"
                            alt="General-yoga-for-active-individuals">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm"> Active Individuals:</h3>
                            <ul>
                                <li>Enhance your fitness routine with sessions designed to improve strength, flexibility,
                                    and mobility.

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/Generalyogasupport-mental-health.webp') }}"
                            alt="Support for Mental Health">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm">Support for Mental Health:</h3>
                            <ul>
                                <li> Practice yoga-based mindfulness and breathing to reduce stress, anxiety, and
                                    depression.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/General-yoga-for-stress-relief-seekers.webp') }}"
                            alt="Stress Relief Seekers">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm">Stress Relief Seekers: </h3>
                            <ul>
                                <li> Yoga and pilates are perfect for anyone in Ghaziabad looking to find calm amidst a busy
                                    life.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/General-yoga-for-postural-issues.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm">People with Postural Issues: </h3>
                            <ul>
                                <li> Pilates can help alleviate back pain and improve posture, especially for those with
                                    sedentary jobs.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="blog_posts_left_shape left_shape mb-0">
                <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="blog_posts_left_shape"
                    class="img-fluid">
            </figure>
            <figure class="blog_posts_right_shape right_shape mb-0">
                <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="blog_posts_right_shape"
                    class="img-fluid">
            </figure>

        </div>
    </section>

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">
                        <h2>Our General Yoga & Pilates Classes in Ghaziabad
                        </h2>
                        <ul class="pt-4 ps-5">
                            <li>
                                <h3> Class Structure: </h3> Each session includes a warm-up, a mix of yoga poses and pilates
                                exercises, and a cool-down for relaxation.

                            </li>
                            <li>
                                <h3> Level Flexibility: </h3>We offer beginner, intermediate, and advanced classes to suit
                                all fitness levels.

                            </li>
                            <li>
                                <h3>. Class Format:</h3> Choose from group classes or private sessions tailored to your
                                fitness goals and schedule.
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Why Choose Us for General Yoga & Pilates in Ghaziabad?</h2>
                        <ul class="pt-4 ps-5">
                            <li>
                                <h3> Certified Instructors:</h3> Our experienced teachers ensure safe and effective
                                practices.
                            </li>
                            <li>
                                <h3> Flexible Options: </h3>We offer both group sessions and private classes to fit your
                                lifestyle.
                            </li>
                            <li>
                                <h3>Personalized Attention:</h3>Receive guidance tailored to your needs and goals.

                            </li>
                            <li>
                                <h3>Community Spirit:</h3> Join a supportive and welcoming environment focused on holistic wellness.
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Why-choose-general-yoga-and-pilates.webp') }}"
                                alt="Common Conditions Treated" class="img-fluid">
                        </figure>

                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="aboutus_top_shape"
                            class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="aboutus_bottom_shape"
                            class="img-fluid">
                    </figure>
                </div>

            </div>


        </div>
    </section>
    {{-- faq --}}
    <section class="aboutpage_aboutus_section service-gallary faq-section">
        <div class="container">
            <div class="row">
                <div class="service_page_aboutus_content">

                    <h2 class="text-center">FAQ</h2>
                    <div class="accordion pt-4" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What is yoga and Pilates?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yoga focuses on flexibility and mindfulness, while pilates builds core strength and stability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What are yoga and Pilates combined called?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>This combination is often referred to as "fusion fitness," blending the strengths of both practices.

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3.  Can I do Pilates and yoga together?

                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, they complement each other perfectly, offering benefits for the mind and body.


                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Is Pilates better than the gym? </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Pilates offers low-impact, focused exercises that improve posture and flexibility, making it a great alternative to traditional gym workouts.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Can I do Pilates at home? </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>While it’s possible, starting with professional guidance ensures proper technique and avoids injury.</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <figure class="blog_posts_left_shape left_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_left_shape.png" alt="left-shape" class="img-fluid">
</figure>
<figure class="blog_posts_right_shape right_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_right_shape.png" alt="right-shape" class="img-fluid">
</figure>
@endsection
