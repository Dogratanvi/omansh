@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section exercise-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                <h1 data-aos="fade-up">Exercise Programs & Pilates for Health and Wellness</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p data-aos="fade-right">Guided exercise programs and Pilates improve health,
                                            discomfort, and flexibility, according to Omansh. We use these successful
                                            movement therapies to create customized wellness programs to assist people reach
                                            their health goals. Omansh helps individuals at any fitness level improve their
                                            physical and emotional health via exercise and Pilates with safe, effective, and
                                            personalized movement therapies.
                                        </p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span">Women Health</span>
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
            </section>
        </div>
    </div>

    {{-- Why Pregnancy & Postpartum Care isEssential --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/women/Benefits-of-Exercise-Programs-Pilates.webp') }}"
                                alt="Benefits-of-Exercise-Programs-Pilates" class="img-fluid">
                        </figure>

                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="aboutus_top_shape" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="aboutus_bottom_shape" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2 class="pb-3">Benefits of Exercise Programs & Pilates</h2>
                        <ul>
                            <li><b>Improve Strength and Flexibility: </b>The benefits of exercise programs and Pilates
                                include
                                improved flexibility and strength, with Pilates being particularly beneficial in
                                enhancing core strength, balance, and flexibility.

                            </li>
                            <li> <b>Supports Injury Recovery and Pain Management: </b>Movement therapy, including low-impact
                                exercises, helps with pain, muscle healing, and injury prevention.
                            </li>
                            <li> <b> Improves Mental Wellness: </b>Pilates and fitness programs reduce stress, improve
                                mental clarity, and boost mood through mindful movement.

                            </li>
                            <li> <b> Ideal for All Fitness Levels:
                                </b> From beginners to seasoned practitioners, our programs offer adjustable routines for
                                everyone.

                            </li>

                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Exercise Programs Overview -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center"> Exercise Programs Overview</h2>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/women/Personalized-Exercise-Routine.webp') }}" alt="Personalized Exercise Routine">
                        <div class="card-content">

                            <h3 class="fs-5"> Personalized Exercise Routine</h3>
                            <p>Omansh customizes exercise routines for each client's fitness and health goals.</p>

                            <ul>
                                <li> <b>Strength Training:</b> Strength training improves muscular tone, bone health, and
                                    metabolism for fitness.
                                </li>
                                <li> <b>Cardio Exercises: </b> Omansh cardio exercises improve endurance, heart health, and
                                    stamina.
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/women/Rehabilitation-Programs.webp') }}" alt="Rehabilitation Programs">
                        <div class="card-content">
                            <h3 class="fs-5"> Rehabilitation Programs</h3>

                            <ul>
                                <li> Our rehabilitation activities help injuries and operations heal and gradually return to
                                    physical activity.
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/women/Mind-Body-Connection.webp') }}" alt="A Mind-Body Connection">
                        <div class="card-content">
                            <h3 class="fs-5"> A Mind-Body Connection</h3>

                            <ul>
                                <li> Mindful exercises improve focus and body awareness by strengthening the mind-body
                                    connection.
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>

            <figure class="blog_posts_left_shape left_shape mb-0">
                <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="blog_posts_left_shape" class="img-fluid">
            </figure>
            <figure class="blog_posts_right_shape right_shape mb-0">
                <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="blog_posts_right_shape" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- Exercise Programs Overview -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Pilates Programs Overview
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                </div>
            </div>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/women/Mat-Pilates.webp') }}" alt="Mat-Pilates">
                        <div class="card-content">
                            <h3 class="fs-5"> Mat Pilates
                            </h3>
                            <ul>
                                <li> Mat Pilates is a balanced workout for all fitness levels that improves core strength,
                                    flexibility, and posture through bodyweight exercises.

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/women/Reformer-Pilates.webp') }}" alt="Reformer-Pilates">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Reformer Pilates</h3>

                            <ul>
                                <li>Resistance helps with proper movement and alignment on the Reformer, developing balance,
                                    strength, and endurance.


                                </li>

                            </ul>

                        </div>
                    </div>
                </div>



            </div>

            <figure class="blog_posts_left_shape left_shape mb-0">
                <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="blog_posts_left_shape" class="img-fluid">
            </figure>
            <figure class="blog_posts_right_shape right_shape mb-0">
                <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="blog_posts_right_shape" class="img-fluid">
            </figure>
        </div>
    </section>

    <!-- Our Approach to Pelvic floor Pain Care -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/women/Benefits-of-Pilates.webp') }}"
                                alt="Benefits-of-Pilates" class="img-fluid">
                        </figure>

                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="aboutus_top_shape" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="aboutus_bottom_shape" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2 class="pb-3">Benefits of Pilates for Specific Conditions</h2>
                        <ul>
                            <li><b>Back Pain: </b>Pilates gently strengthens back muscles, relieving pain and improving
                                posture.

                            </li>
                            <li> <b>Joint Health: </b>Pilates reduces stiffness and supports joint mobility with low-impact
                                workouts
                            </li>
                            <li> <b> Posture Improvement: </b>Pilates realignment exercises improve posture, stability, and
                                balance, building a strong, robust body.
                            </li>
                            <p>Prenatal and post-rehabilitation Pilates lessons are also available at Omansh.
                            </p>
                        </ul>


                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="aboutpage_aboutus_section pt-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2 class="pb-3">Who Can Benefit from These Programs?</h2>
                        <ul>
                            <li><b>General Wellness Seekers: </b>Fitness, flexibility, and strength enthusiasts.

                            </li>
                            <li> <b> Injury Recovery Patients: </b>Our therapeutic, low-impact workouts help clients healing
                                from musculoskeletal injuries or surgery.

                            </li>
                            <li> <b> Pregnant and Postpartum: </b>For these clients, Pilates helps maintain strength and
                                aids healing.

                            </li>
                            <p>. Older Adults: Our safe, </b>low-impact programs promote senior health, mobility, and
                                independence.

                            </p>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/women/Benefit-from-these-programs.webp') }}"
                                alt="service_women_health.png" class="img-fluid">
                        </figure>

                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="aboutus_top_shape" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="aboutus_bottom_shape" class="img-fluid">
                    </figure>
                </div>
            </div>


        </div>
    </section>

    <section class="aboutpage_aboutus_section service-gallary faq-section pt-3">
        <div class="container">
            <div class="row">
                <div class="service_page_aboutus_content">

                    <h2 class="text-center">FAQ</h2>
                    <div class="accordion pt-4" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. How frequently should I do Pilates for best results?

                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Pilates should be done 2-3 times a week for best benefits, although this might vary
                                        by objective.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Is Pilates safe for back and joint pain?


                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Pilates is low-impact and emphasizes core strength, making it ideal for back
                                        discomfort and joint health.


                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What to expect in my first session?


                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> First session: Learn fundamental motions, get comfortable with equipment (if
                                        appropriate), and assess your objectives and fitness level with an instructor.
<br><br>
                                        Omansh's Pilates and exercise programs inspire people of all ages and capacities to
                                        live healthier, more balanced lives.

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
