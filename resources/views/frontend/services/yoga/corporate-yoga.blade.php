@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section geriatric-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                <h1 data-aos="fade-up">Corporate Yoga</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p class="pb-0" data-aos="fade-right">Stress and sedentary lifestyles can harm
                                            employee health
                                            and productivity in fast-paced workplaces. Corporate yoga integrates wellness
                                            into the workplace, improving physical and mental health.</p>

                                        <p class="pt-0">The benefits of employee-tailored yoga, office yoga workshops, and
                                            corporate wellness programs are clear.</p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span pe-2"><a href="/services/yoga">Yoga</a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"><a>Corporate Yoga
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

    {{-- Introduction to Corporate Yoga --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Geriatric-physiotherapy-in-ghaziabad.webp') }}"
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
                        <h2>Introduction to Corporate Yoga
                        </h2>
                        <p>Corporate yoga brings yoga advantages to work. It aids focus, stress management, and well-being
                            in employees.
                        </p>
                        <p>Our Ghaziabad centre offers corporate yoga sessions. Our in-office and virtual yoga classes make
                            it fun for employees of all fitness levels. We offer flexible corporate yoga classes and
                            employee yoga.

                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Benefits of Corporate Yoga   --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Benefits of Corporate Yoga</h2>
                        <p class="pt-2">Promoting corporate yoga has many benefits:

                        </p>
                        <ul class="ps-5">
                            <li>
                                <h3> Stress Reduction:</h3> Regular yoga sessions help employees manage stress, creating a
                                calmer, more focused workplace.
                            </li>
                            <li>
                                <h3> Higher Productivity:</h3> Concentration and clarity boost efficiency.
                            </li>
                            <li>
                                <h3>Better Posture and Health:</h3> Improve posture with yoga to relieve desk job-related
                                back pain and stiffness.
                            </li>
                            <li>
                                <h3>Teamwork and Morale:</h3> Group yoga improves teamwork and morale.
                            </li>
                            <li>
                                <h3>Enhanced Employee Satisfaction:</h3>Employee happiness and health reduce turnover.
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Geriatric-physiotherapy.webp') }}"
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
    <!-- Tailored Corporate Yoga Programs
                                                         -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Tailored Corporate Yoga Programs</h2>
            <p class="pt-2 text-center">Every workplace has distinct needs, and we understand that. That's why our Ghaziabad
                corporate yoga sessions are customisable:
            </p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Arthritis.webp') }}" alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Treat arthritis, osteoporosis, and neurological problems.
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Geriatric-physiotherapy-improves-balance.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm"> Flexible Scheduling:</h3>
                            <ul>
                                <li>Our office yoga courses fit your team's hectic schedule with 30-minute lunchtime or
                                    after-hours sessions.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Geriatric-physiotherapy-in-sports.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm"> Online Corporate Yoga sessions: </h3>
                            <ul>
                                <li>Our online corporate yoga sessions make health available to remote teams.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Geriatric-physiotherapy-improves-post-surgery.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm"> Workshop and Retreats: </h3>
                            <ul>
                                <li>Weekend yoga courses or team-building retreats can give your company unforgettable
                                    health and wellness experiences.
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
                        <h2>Why Choose Us for Corporate Yoga in Ghaziabad?
                        </h2>
                        <ul class="pt-4 ps-5">
                            <li>
                                <h3> Expert-Led Programs: </h3> Certified yoga instructors with corporate wellness
                                experience lead our programs.
                            </li>
                            <li>
                                <h3> Customised Solutions: </h3> Our stress management and exercise programmes boost
                                productivity and minimise absenteeism.
                            </li>
                            <li>
                                <h3>Holistic Approach:</h3> Yoga promotes physical, mental, and emotional health.
                            </li>
                            <li>
                                <h3>Local Expertise:</h3> We understand Ghaziabad workplace needs due to our convenient
                                location.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- faq --}}


    <section class="aboutpage_aboutus_section faq-section">
        <div class="container">
            <div class="row">
                <div class="service_page_aboutus_content">

                    <h2 class="text-center">FAQ</h2>
                    <div class="accordion pt-4" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What is corporate yoga?

                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Corporate yoga offers customised programs to improve staff wellbeing and productivity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. How to offer corporate yoga?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Partner with expert yoga instructors for office, virtual, or workshop and retreat programs.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Why is office yoga important? </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Office yoga improves posture, reduces stress, and enhances morale, making the workplace healthier and more productive.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. What is a corporate workout?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Corporate workouts usually include yoga, stretching, and mindfulness.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Book Ghaziabad Geriatric Physiotherapy -->
    <section class="aboutpage_aboutus_section message_section service-gallary faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Orthopedic-physical-therapy-services.webp') }}"
                                alt="Common Conditions Treated" class="img-fluid w-100">
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

                        <p>Corporate yoga is more than a trend—it's an investment in team health. Wellness in the workplace
                            empowers employees to succeed.
                        </p>
                        <p class="pt-2">Ready to improve workplace wellness? Contact us about corporate yoga lessons
                            today!

                        </p>

                        <div class="box ms-2 ms-sm-2 ms-lg-3 ms-md-3 d-flex align-items-center">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="https://omansh.org/images/contact_phone.png " alt="contact-phone"
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Phone</h3>
                                <p class="pt-2"><a href="tel:+91 85270 45759" class="text-decoration-none">+91 85270
                                        45759</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
