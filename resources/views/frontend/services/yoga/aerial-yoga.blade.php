@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section aerial-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                <h1 data-aos="fade-up">Aerial Yoga</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p class="pb-0" data-aos="fade-right">Yoga has always been about balance,
                                            strength, and mindfulness. Aerial yoga has actually uplifted this ancient
                                            practice. Aerial yoga combines yoga poses with hammocks or silks for a new
                                            fitness and relaxing experience.
                                        </p>
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
                                </div>
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

    {{-- What is Aerial Yoga? --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Aerial-yoga.webp') }}"
                                alt="Aerial-yoga" class="img-fluid">
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">
                        <h2>What is Aerial Yoga?
                        </h2>
                        <p>Aerial yoga combines yoga and aerial arts. Yoga poses and stretches are done in a comfortable
                            hammock. This practice supports your weight and lets you do gravity-defying positions safely.
                        </p>
                        <p>Unlike traditional yoga, aerial yoga incorporates playfulness and creativity. Inversions and deep
                            stretches are easier with hammock support, decreasing joint and spine strain.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Benefits of Aerial Yoga   --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Benefits of Aerial Yoga
                        </h2>
                        <p class="pt-2">The physical, mental, and emotional benefits of aerial yoga go beyond a workout.

                        </p>

                        <h3 class="pt-3">1. Physical Benefits</h3>
                        <ul class="ps-5">
                            <li>
                                1. Increased Flexibility: The hammock provides physical benefits such as increased
                                flexibility
                                through deeper stretches.

                            </li>
                            <li>
                                2. Improved Strength and Posture: Suspended poses strengthen core muscles and improve
                                posture.

                            </li>
                            <li>3. Spinal Decompression: Inversions and stretches reduce back discomfort and align the
                                spine.
                            </li>
                        </ul>
                        <h3 class="pt-3">1. Mind Benefits:</h3>
                        <ul class="ps-5">
                            <li>
                                1. Stress Relief: Weightlessness calms the mind and reduces tension.

                            </li>
                            <li>
                                2. Increased Mindfulness: Balancing in the hammock requires focus, keeping you present.
                            </li>
                        </ul>
                        <h3 class="pt-3">1. Special Benefits Over Traditional Yoga:</h3>
                        <ul class="ps-5">
                            <li>
                                1. Hammock support makes inversion positions easier.</li>
                            <li>
                                2. An active approach to improve range of motion.
                            </li>
                            <li>3. A thrilling, all-ages experience.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Benefits-of-aerial-yoga.webp') }}"
                                alt="Benefits-of-aerial-yoga" class="img-fluid">
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
    <!-- Types of Aerial Yoga Poses-->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Types of Aerial Yoga Poses
            </h2>
            <p class="pt-2 text-center">Aerial yoga poses are suitable for all levels:
            </p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/yoga/Aerial-yoga-for-beginner.webp') }}" alt="PAerial-yoga-for-beginner">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Beginner-Friendly Poses:
                            </h3>
                            <ul>
                                <li>Hamstrings and back muscles can be gently stretched in the hammock. </li>
                                <li>. Starters can do inversions like the supported headstand with hammock help.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/Aerial-yoga-advanced-pose.webp') }}"
                            alt="Aerial-yoga-advanced-pose">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm"> Advanced Pose:</h3>
                            <ul>
                                <li>Strength-Building Midair position transitions: Engage your core and arms.</li>
                                <li>Deep Flexibility Stretches: Advanced poses increase hip and shoulder flexibility.
                                </li>
                            </ul>
                            <p class="pt-2">Effective transitions between poses improve fluidity and strength over time.
                            </p>

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
                <div class="col-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">
                        <h2>How to Get Started </h2>
                        <p class="pt-2">Aerial yoga is easy to start with proper training.

                        </p>
                        <h3>Choosing the Right Class or Studio:
                        </h3>
                        <p class="pt-2">When selecting a class or studio, seek certified aerial yoga instructors for
                            safety and appropriate technique.</p>
                        <ul class="pt-4 ps-5">
                            <li>
                                Essential Equipment: - Buy high-quality, weight-tested hammocks for safety.
                            </li>
                            <li> Safety: Install properly and respect weight guidelines.</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Precautions and Safety Tips</h2>
                        <p class="pt-2">AMost people can do aerial yoga, however there are several precautions:
                        </p>
                        <h3 class="fs-4 lh-sm"> Who Should Avoid Aerial Yoga</h3>
                        <ul>
                            <li>Patients with dizziness, cardiac difficulties, or recent surgery.
                            </li>
                            <li>Women pregnant (unless medically cleared).
                            </li>
                        </ul>
                        <h3 class="fs-4 lh-sm"> Tips for Beginners:</h3>
                        <ul>
                            <li>Practice under expert supervision.
                            </li>
                            <li> Build confidence and strength with introductory poses.
                            </li>
                        </ul>
                        <h3 class="fs-4 lh-sm">Professional Advice Matters:</h3>
                        <ul>
                            <li>Experienced instructors provide good technique and reduce injury risk, especially for
                                difficult poses.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Tips-for-aerial-yoga.webp') }}"
                                alt="Tips-for-aerial-yoga" class="img-fluid">
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
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Improve-fitness-with-aerial-yoga.webp') }}"
                                alt="Improve-fitness-with-aerial-yoga" class="img-fluid">
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Improve Fitness with Aerial Yoga</h2>
                        <p class="pt-2">Innovative aerial yoga combines tradition and current fitness. Aerial yoga can
                            increase flexibility, reduce stress, and keep you active.

                        </p>
                        <p class="pt-2">Ready to elevate your yoga? Get started with Omansh and experience
                            weightlessness.
                        </p>

                    </div>
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
                                    1. What does aerial yoga do?

                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Aerial yoga reduces joint pain and improves flexibility, strength, and mindfulness.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Is aerial yoga suitable for beginners?

                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Beginner positions make aerial yoga accessible to anyone.


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Is aerial yoga better than traditional yoga?


                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Both are beneficial, but aerial yoga supports and stretches more.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Does aerial yoga burn belly fat?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Strength-building positions tone abdominal muscles by engaging the core.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Who is not suitable for aerial yoga?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>People with certain medical issues or recuperating from injuries should consult a specialist before starting.</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
