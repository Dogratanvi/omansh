@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section medical-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                <h1 data-aos="fade-up">Medical Yoga</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p class="pb-0" data-aos="fade-right">In today's fast-paced society, stress and
                                            chronic illness are frequent. Medical yoga, also known as therapeutic yoga,
                                            combines traditional yoga and modern medicine for holistic healing. This yoga is
                                            suited to a variety of health issues, from chronic pain to mental health.
                                        </p>

                                        <p class="pt-0">Read on to learn how medical yoga or therapeutic yoga in Ghaziabad
                                            might improve your health.
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
                                        class="sub_span"><a>Medical Yoga
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

    {{-- Introduction to Medical Yoga --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Medical-yoga.webp') }}"
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">
                        <h2>Introduction to Medical Yoga
                        </h2>
                        <p>Medical yoga combines yoga postures, breathing techniques, and mindfulness with medical expertise
                            to treat specific illnesses. Medical yoga addresses chronic physical and mental health issues,
                            unlike regular yoga.


                        </p>
                        <p>We offer personalized medical yoga sessions in Ghaziabad to complement your medical therapies.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Benefits of Medical Yoga in Ghaziabad    --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Benefits of Medical Yoga in Ghaziabad</h2>
                        <p class="pt-2">Medical yoga, specially customized, has several benefits. Why it's worth
                            considering:
                        </p>
                        <ul class="ps-5">
                            <li>
                                <h3> Pain relief:</h3> Therapeutic yoga reduces back pain, arthritis, and joint stiffness.

                            </li>
                            <li>
                                <h3> Reduce Stress:</h3>Reduce stress and enhance mental health with mindfulness and
                                breathing exercises.

                            </li>
                            <li>
                                <h3>Managed Chronic Conditions Better:</h3>Diabetes, asthma, and hypertension can be managed
                                with personalized yoga.

                            </li>
                            <li>
                                <h3> Faster Recover: </h3> Add yoga to your medical treatments to speed recovery after
                                surgery or injury.



                                Medical yoga in Ghaziabad mixes yoga's therapeutic advantages with medical skills for a
                                holistic health approach.
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Medical-yoga-benefits.webp') }}"
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
    <!-- Medical Yoga for Specific Conditions in Ghaziabad-->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Medical Yoga for Specific Conditions in Ghaziabad</h2>
            <p class="pt-2 text-center">Our programs address many health issues. Learn how Ghaziabad medical yoga can help:
            </p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/yoga/Orthopaedic-medical-yoga.webp') }}" alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Orthopaedic Conditions:
                            </h3>
                            <ul>
                                <li>Therapeutic yoga for orthopedics reduces joint discomfort and improves mobility.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/Chronic-illness.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm"> Chronic illness management: </h3>
                            <ul>
                                <li>Customised yoga supports diabetes, hypertension, and asthma.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/Mental-health.webp') }}"
                            alt="Nutritional-guidance">
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
                        <img src="{{ asset('img/services/yoga/Recovery-after-surgery.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm">Recovery After Surgery:</h3>
                            <ul>
                                <li> Gentle yoga helps physical and emotional healing.
                                </li>
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
                <div class="col-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">
                        <h2>Why Choose Us for Medical Yoga in Ghaziabad?
                        </h2>
                        <ul class="ps-5">
                            <li>
                                <h3> Certified Instructors: </h3> Our medical yoga therapists are certified to ensure safety
                                and efficacy.
                            </li>
                            <li>
                                <h3> Personalized Programs: </h3>We customize each yoga session to meet your health needs
                                and support your medical treatments.
                            </li>
                            <li>
                                <h3>Holistic Approach:</h3>We offer a holistic health and wellness solution by integrating
                                yoga's therapeutic advantages with medical understanding.
                            </li>

                        </ul>
                        <p class="pt-3">Our Ghaziabad medical yoga courses help you manage a chronic disease or improve
                            your health.
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
                                    1. What is medical yoga?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Medical yoga combines traditional yoga with medical knowledge to treat particular
                                        illnesses and improve wellness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What are the techniques of medical yoga therapy?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Individualized medical yoga therapy involves therapeutic poses, breathing exercises,
                                        mindfulness techniques, and meditation.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Is yoga medically proven?

                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yoga is recognized as a supplemental therapy in medicine due to its proven effects on
                                        stress, pain, and mental health.

                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. What is yogic medicine? </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yogic medicine provides complete physical and emotional health care by combining yoga
                                        with modern medicine.
                                        <br><br>
                                        Book a consultation and start holistic healing with Ghaziabad medical yoga therapy.
                                        Schedule a session to experience yoga's revolutionary impact on your health!
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
