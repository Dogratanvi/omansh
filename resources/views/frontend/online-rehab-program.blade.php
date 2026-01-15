@extends('frontend.layouts.app')
@section('content')
<main class="landing-page rehab-page">

    <section class="rehab-banner position-relative z-2">
        <img src="{{ asset('img/rehab-banner.webp') }}"
            class="position-absolute w-100 h-100 z-1 top-0 start-0 object-fit-cover" alt="banner image"
            style="object-fit: cover;">
        <div class="position-relative z-2">
            <div class="box-wrapper p-5 position-reltaive">
                <h1 class=" fw-bolder text-uppercase text-white ">
                    Diastasis Recti (DR) Online Rehab <br>Program</h1>
                <p class="desc-sec text-white pb-4">Heal DR safely with us</p>
                <div class="bg-white top-wrap  position-absolute bottom-0"
                    style="    width: max-content; padding: 10px 20px; border-radius: 5px;">
                    <p class="desc-sec fw-bolder mb-0" style="color:#004B2A;">(Starts from 19th January)</p>
                </div>
            </div>
    </section>
    <!-- meet our expert -->
    <section class="rehab-expert ">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1000">
                    <div>
                        <div class="p-2" style="background-color:#CAA983; width: max-content;">
                            <h2 class="fw-bolder mb-0" style="color:#004B2A;">Meet Our Expert</h2>
                        </div>
                        <h3 class="fw-bolder mb-3 pt-4 text-theme">Dr. Garima Biswas</h3>
                        <p class="mb-3 text-dark">MPT (Obs & Gyne)
                            Consultant Physiotherapist
                            Founder of OMANSH Health and Fitness
                            Obstetrics and Pelvic Floor Rehab Therapist
                            Labor and Child Birth Educator </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/rehab-expert.webp') }}" alt="expert image" class="w-100 rounded-3">
                </div>
            </div>
        </div>
    </section>
    <div class="main-header section-bg d-flex align-items-center justify-content-center py-3">
        <div class="container text-center ">
            <h2 class="top-heading m-0 mb-0 pt-4 text-white text-center">Join Diastasis Recti online Medical Rehab
                program
            </h2>
            <button class="signup-btn open-popup mb-3 mt-3" data-price="3500">
                SIGNUP NOW: ₹ 3500
            </button>

        </div>
    </div>
    <section class="rehab-expert py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="mb-4">
                        <span class="section-badge">Do you have these?</span>
                    </div>

                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            The abdomen is protruding or bulging in the middle (mummy tummy).
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            A gap can be felt in the middle of the stomach when checking with fingers.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Experiencing back pain or posture-related issues.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            The stomach appears to bulge more while doing exercises.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Recovery feels slow after a C-section.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Confusion while breathing or engaging the core muscles.
                        </li>
                    </ul>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/protruding.webp') }}" alt="rehab expert image"
                        class="w-100 rounded-3 shadow-sm">
                </div>

            </div>
        </div>
    </section>

    <section class="rehab-expert py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="mb-4">
                        <span class="section-badge">What Will You Get By This Program</span>
                    </div>

                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            12 guided rehab sessions.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Breathing & pressure regulation training.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Safe core re-education (DR friendly).
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            C-section scar–sensitive approach.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Small batch for personal attention.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Q&A support during the program.
                        </li>
                    </ul>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/rehab-session.webp') }}" alt="rehab expert image"
                        class="w-100 rounded-3 shadow-sm">
                </div>

            </div>
        </div>
    </section>
    <div class="mb-0 text-center">
        <span class="section-badge">About the Program</span>
    </div>

    <div class="main-header section-bg d-flex align-items-center justify-content-center py-3">
        <div class="container text-center ">
            <h2 class="top-heading m-0 mb-0 pt-4 text-white text-center">Diastasis Recti online Medical Rehab program
            </h2>
            <p class="text-center text-white mb-4">This is a medical rehab–based online program designed for women
                struggling with:</p>
            <div class="brown-box rounded p-4 ">
                <div class="row justify-content-center">
                    <div class="list-box col-md-3 ">
                        <ul>
                            <li>Diastasis Recti</li>
                        </ul>
                    </div>
                    <div class="list-box col-md-4 ">
                        <ul>
                            <li>C-section scar tightness / adhesions</li>
                        </ul>
                    </div>
                    <div class="list-box col-md-3 ">
                        <ul>
                            <li>Belly bulge & poor core control</li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="text-center text-white mb-0 pt-4">The program focuses on pressure regulation, breathing
                correction,
                scar mobility, and safe core re-education — not random exercises.</p>
            <div class="d-flex justify-content-center mt-4 mb-5">
                <div class="badge-border-box">
                    (Starts from 19th January)</div>
            </div>
        </div>
    </div>
    <section class="rehab-expert py-5 ">
        <div class="container py-4">
            <div class="mb-5 d-flex justify-content-center">
                <span class="section-badge">What You Will Learn</span>
            </div>
            <div class="row  justify-content-center g-4">

                <!-- LEFT CONTENT -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border shadow h-100">
                        <img src="{{ asset('img/self-assessment.webp') }}" alt="Understanding Your Core"
                            class="w-100 rounded-3 shadow-sm">

                        <div class="small-list p-4">
                            <h3 class="fw-bolder mb-3 fs-5  text-theme text-center">Understanding Your Core</h3>
                            <ul class="rehab-list">
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    What is DR (myths vs facts)
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Self‑assessment (safe way)
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Why crunches & planks are harmful initially
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border shadow h-100">
                        <img src="{{ asset('img/breathing.webp') }}" alt="Breathing & Core Connection"
                            class="w-100 rounded-3 shadow-sm">


                        <div class="small-list p-4">
                            <h3 class="fw-bolder mb-3 fs-5  text-theme text-center">Breathing & Core Connection</h3>
                            <ul class="rehab-list">
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Diaphragmatic breathing
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Deep core activation
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Pressure control during daily activities
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border shadow h-100">
                        <img src="{{ asset('img/Pelvic-Floor.webp') }}" alt="Pelvic Floor + Core Integration"
                            class="w-100 rounded-3 shadow-sm">

                        <div class="small-list p-4">
                            <h3 class="fw-bolder mb-3 fs-5  text-theme text-center">Pelvic Floor + Core Integration</h3>
                            <ul class="rehab-list">
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Pelvic floor basics (simple language)
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Coordination with breathing
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Support for C‑section & vaginal delivery moms
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border shadow h-100">
                        <img src="{{ asset('img/Strengthening.webp') }}" alt="Understanding Your Core"
                            class="w-100 rounded-3 shadow-sm">

                        <div class="small-list p-4">
                            <h3 class="fw-bolder mb-3 fs-5  text-theme text-center">Progressive Strengthening</h3>
                            <ul class="rehab-list">
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Safe exercises week by week
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Functional movements (sitting, lifting, walking)

                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Posture correction
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border shadow h-100">
                        <img src="{{ asset('img/Long-Term-Maintenance.webp') }}" alt="Understanding Your Core"
                            class="w-100 rounded-3 shadow-sm">

                        <div class="small-list p-4">
                            <h3 class="fw-bolder mb-3 fs-5  text-theme text-center">Long‑Term Maintenance</h3>
                            <ul class="rehab-list">
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    How to exercise safely lifelong
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Gym / yoga return guidelines
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Preventing recurrence

                                </li>


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="rehab-expert py-5 ">
        <div class="container py-4">
            <div class="mb-5 d-flex justify-content-center">
                <span class="section-badge">Who Can Join This Program</span>
            </div>
            <div class="row  justify-content-center g-4">

                <!-- LEFT CONTENT -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card  shadow green-box d-flex align-items-center justify-content-center h-100">
                        <div class="small-list p-2 ">
                            <ul class="rehab-list-white  d-flex align-items-center">
                                <li class="text-white  mb-0">
                                    <i class="fa-solid fa-check"></i>
                                    Safe exercises week by week
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card  shadow green-box d-flex align-items-center justify-content-center h-100">
                        <div class="small-list p-2 ">
                            <ul class="rehab-list-white  d-flex align-items-center">
                                <li class="text-white mb-0 ">
                                    <i class="fa-solid fa-check"></i>
                                    6 weeks to years after delivery
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card  shadow green-box d-flex align-items-center justify-content-center  h-100">
                        <div class="small-list p-2  ">
                            <ul class="rehab-list-white d-flex align-items-center ">
                                <li class="text-white mb-0 ">
                                    <i class="fa-solid fa-check"></i>
                                    Mothers with back pain + core weakness
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card  shadow green-box d-flex align-items-center justify-content-center  h-100">
                        <div class="small-list p-2 ">
                            <ul class="rehab-list-white  d-flex align-items-center">
                                <li class="text-white mb-0">
                                    <i class="fa-solid fa-check"></i>
                                    Mothers with back pain + core weakness
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card  shadow green-box d-flex align-items-center justify-content-center h-100">
                        <div class="small-list p-2 ">
                            <ul class="rehab-list-white d-flex align-items-center ">
                                <li class="text-white mb-0">
                                    <i class="fa-solid fa-check"></i>
                                    Women who tried workouts but saw no results
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="green-box-border rounded-0 p-4">
                    Not suitable without doctor clearance if :
                </div>
            </div>
            <div class="d-flex justify-content-center ">
                <div class="green-box p-3">
                    <ul class="text-white mb-0">
                        <li class="text-white mb-0">Recent surgery complications</li>
                        <li class="text-white mb-0">Large hernia (you will be guided separately)</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="green-box-border rounded-3 p-3">
                    (Starts from 19th January)
                </div>
            </div>
        </div>
    </section>
    <section class="rehab-expert py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="mb-4">
                        <span class="section-badge">Why This Program Is Different</span>
                    </div>

                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Program designed & led by Dr. Garima Biswas, MPT (Obstetrics & Gynecology).
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Based on clinical physiotherapy & pelvic floor rehab principles, not fitness trends.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Evidence‑based approach used in hospitals & rehab settings.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Small batch = individual corrections & real progress.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Proper screening before starting the program.
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Continuous WhatsApp guidance & supervision.
                        </li>
                    </ul>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/program-is-different.webp') }}" alt="rehab expert image"
                        class="w-100 rounded-3 shadow-sm">
                </div>

            </div>
        </div>
    </section>
    <section class="rehab-expert py-5">
        <div class="container">
            <div class="mb-4 d-flex justify-content-center">
                <span class="section-badge">Result You Can Expect</span>
            </div>
            <div class="row ">

                <!-- LEFT CONTENT -->
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">


                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Improved deep core activation
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">


                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Visible reduction in Diastasis Recti gap (case‑dependent)
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Less doming / coning during movements
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Reduced back pain & better posture
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                    <ul class="rehab-list">
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            Confidence in daily activities & exercise
                        </li>
                    </ul>
                </div>

                <!-- RIGHT IMAGE -->

            </div>
            <div class="row g-0 mt-4">
                <div class="col-md-6">
                    <div class="green-box-border rounded-0 h-100 fs-4 p-3">
                        Results depend on DR severity, delivery history & consistency.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="green-box h-100 rounded-0 fs-4 text-white  p-4">
                        This is a rehab‑based treatment, not a quick fix.

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="mb-4 d-flex justify-content-center">
            <span class="section-badge">Testimonials</span>
        </div>
        <div class="container my-5">

            <div class="review-slider">
                <div class="row">
                    <div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="item h-100">
                            <div class="bg-white p-0 rounded card review-card h-100 d-flex flex-column">


                                <div class="review-content card-content flex-grow-1">

                                    <p>
                                        “I had a C-section 3 years ago and my belly never felt normal again. I tried
                                        exercises from YouTube but nothing helped — sometimes it made things worse. This
                                        program helped me understand breathing and pressure first. Within weeks, I felt
                                        more
                                        control, less pulling near my scar, and finally clarity about my recovery.”
                                    </p>

                                </div>
                                <div class="review-details bg-white border-0 card-footer mt-auto">

                                    <h4 class="text-theme">Sushma (34 yrs)</h4>
                                    <span class="review-time text-theme">Bangalore</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="item h-100">
                            <div class="bg-white p-0 rounded card review-card h-100 d-flex flex-column">
                                <div class="review-content card-content flex-grow-1">
                                    <p>
                                        “I always thought my problem was just a ‘gap’.
                                        This program helped me understand that it was more about pressure and breathing.
                                        I feel more connected to my core now and my belly doesn’t bulge the way it used
                                        to during daily activities.”
                                    </p>

                                </div>
                                <div class="review-details bg-white border-0 card-footer mt-auto">
                                    <h4 class="text-theme">Reema (37 yrs)</h4>
                                    <span class="review-time text-theme">Mumbai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="item h-100">
                            <div class="bg-white p-0 rounded card review-card h-100 d-flex flex-column">


                                <div class="review-content card-content flex-grow-1">

                                    <p>
                                        “I was scared to exercise after delivery. This program taught me how to
                                        start
                                        safely with breathing and small movements.I feel more confident now.”
                                    </p>

                                </div>
                                <div class="review-details bg-white border-0 card-footer mt-auto">
                                    <h4 class="text-theme">Nisha (32 yrs)</h4>
                                    <span class="review-time text-theme">Pune</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button
                    class="signup-btn open-popup text-decoration-none shadow-none border-0 rounded text-white py-2 px-3"
                    data-price="499">
                    Sign up now at ₹499
                </button>
            
            </div>
        </div>
    </section>
    <div class="mb-0 text-center">
        <span class="section-badge">Program Details</span>
    </div>

    <div class="main-header section-bg d-flex ">
        <div class="container  p-0 ">
            <div class="row g-0">
                <div class="col-md-6 border-end border-white cust-border">
                    <div class="p-2 p-sm-2 p-md-5">
                        <h3 class="text-badge fs-4 mb-3">Beginner / Foundation Phase: 4 Weeks</h3>
                        <p class="text-white">The program focuses on pressure regulation, breathing correction, scar
                            mobility, and safe
                            core re-education — not random exercises.</p>
                        <p class="text-white" style="font-style: italic;">“This is not a quick-fix program.
                            This is the phase your body needs before real strengthening.”</p>
                    </div>
                </div>
                <div class="col-md-6 cust-border">
                    <div class="p-2 p-sm-2 p-md-5">
                        <h3 class="text-badge fs-4 mb-3">Advanced / Long-standing DR: 8–12 Weeks</h3>
                        <p class="text-white">Recommended after assessment for old DR, repeated C-sections, persistent
                            belly bulge</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- TOP INFO BAR -->
    <div class="mb-0 mt-5 text-center">
        <span class="section-badge">Program Fees</span>
    </div>
    <div class="container-fluid section-bg text-white py-5">
        <div class="container">
            <div class="row text-center text-md-start align-items-center gy-3">

                <div
                    class="col-6 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start gap-2 border-end border-white">
                    <img src="{{ asset('img/frequency.svg') }}" class="img-fluid" alt="banner image">
                    <div>
                        <small class="fw-semibold text-badge fs-4 d-block">FREQUENCY:</small>
                        <span>3 Days/week</span>
                    </div>
                </div>

                <div
                    class="col-6 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start gap-2 border-end border-white">
                    <img src="{{ asset('img/back-in-time.svg') }}" class="img-fluid" alt="banner image">
                    <div>
                        <small class="fw-semibold text-badge fs-4 d-block">DURATION:</small>
                        <span>4 weeks</span>
                    </div>
                </div>

                <div
                    class="col-6 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start gap-2 border-end border-white">
                    <img src="{{ asset('img/mode.svg') }}" class="img-fluid" alt="banner image">
                    <div>
                        <small class="fw-semibold text-badge fs-4 d-block">MODE:</small>
                        <span>Live Zoom sessions</span>
                    </div>
                </div>

                <div
                    class="col-6 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start gap-2">
                    <img src="{{ asset('img/customer-support.svg') }}" class="img-fluid" alt="banner image">
                    <div>
                        <small class="fw-semibold text-badge fs-4 d-block">SUPPORT</small>
                        <span>WhatsApp group</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- PRICE SECTION -->
    <div class="container text-center py-4 my-5 my-sm-5 my-md-2">
        <h4 class="fw-bold mb-2 text-theme">
            4 WEEKS PROGRAM:
            <span class="text-decoration-line-through  text-danger ms-2">₹ 5500</span>
            <span class="section-bg text-white px-3 py-1 rounded ms-2">₹ 3500</span>
        </h4>
        <p class="fst-italic mb-0">(Founding Batch – Limited Seats)</p>
    </div>

    <!-- CTA SECTION -->
    <section class="section-badge w-100">
        <div class="container-fluid py-5">
            <div class="container text-center">

                <p class="fst-italic fw-semibold mb-3 text-theme">
                    “Ab wait mat kijiye – sahi rehab se hi sahi healing hoti hai”
                </p>

                <p class="fw-semibold  text-theme mb-4">Click below to reserve your seat</p>

                <a href="#" class="btn section-bg text-white btn-lg px-5 fw-bold">
                    JOIN ONLINE REHAB PROGRAM
                </a>

                <p class="mt-3 fst-italic text-theme">
                    Limited seats only to maintain quality.
                </p>

            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="accordion faq-accordion" id="faqAccordion">

                <!-- ITEM 1 -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                            aria-expanded="true">
                            Q. Can Diastasis Recti be treated without surgery?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">
                            Yes, in mild to moderate cases of Diastasis Recti, improvement is possible
                            with physiotherapy-based rehabilitation.
                        </div>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Q. Is online Diastasis Recti treatment effective?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">
                            Yes, when the program is conducted under the guidance of a qualified MPT (Obs & Gynae)
                            physiotherapist, it can be highly effective.

                        </div>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Q. How long does it take to see improvement in Diastasis Recti?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">
                            Usually, improved core control is felt within 4–6 weeks, while visible changes are seen in
                            8–12 weeks with consistent practice. </div>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="accordion-item mb-3 border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            Q. Is a Diastasis Recti program safe after a C-section?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">
                            Yes, after proper screening, a C-section scar-aware rehabilitation program is safely
                            followed.
                        </div>
                    </div>
                </div>

                <!-- ITEM 5 -->
                <div class="accordion-item border rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            Q. Does this program teach exercises for lifelong management?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">
                            Yes, the program teaches you how to safely perform gym workouts, yoga, and daily activities
                            in the future.
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <div class="container text-center py-5 position-relative">

        <!-- Price Badge -->
        <div class="text-center my-4">
     
                <button class="signup-btn open-popup mb-3 mt-3" data-price="3500">
                SIGNUP NOW: ₹ 3500
            </button>
            
        </div>

        <!-- Content -->
        <h2 class="fw-bold mt-4 text-theme">
            For Videos Related to DR
        </h2>

        <p class="mb-4 text-dark">
            Visit to Our Youtube &amp; Instagram
        </p>

        <!-- Social Icons -->
        <div class="d-flex justify-content-center gap-4">
            <a href="https://www.youtube.com/@drgarimabiswas6613" target="_blank" class="social-icon youtube">

                <img src="{{ asset('img/youtube.svg') }}" class="img-fluid" alt="social icon">
            </a>

            <a href="https://www.instagram.com/omansh_health_fitness/" target="_blank" class="social-icon instagram">
                <img src="{{ asset('img/instagram.svg') }}" class="img-fluid" alt="social icon">
            </a>
        </div>

    </div>

    <div class="bottom-footer section-sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h6 class="top-heading m-0 py-4 text-theme text-center">Terms & Condition Apply*</h6>
                </div>

            </div>
        </div>

    </div>
    <div class="section-bg mb-5">
        <div class="container text-center">
            <div class="row justify-content-center align-items-center py-4">
                <div class="col-12 col-xl-2 col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="timer-title-custom text-white">Offer Expires in</div>
                </div>
                <div class="col-12 col-xl-5 col-md-5 col-lg-5 col-sm-12 col-xs-12 d-flex time-box">
                    <div id="days-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Days</span>
                    </div>
                    <div id="hours-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Hours</span>
                    </div>
                    <div id="minutes-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Minutes</span>
                    </div>
                    <div id="seconds-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Seconds</span>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12">
                 <button class="signup-btn open-popup text-decoration-none shadow-none border-0 rounded text-white py-2 px-3" data-price="499">
                    Sign up now at ₹499
                </button>
                </div>
            </div>
        </div>
    </div>
<div id="imagePopup" class=" price-popup">
    <div class="price-popup-content p-5">
        <span class="price-popup-close">&times;</span>

        <form action="{{ route('frontend.landing.store') }}" method="POST" enctype="multipart/form-data">
            <div class="row g-3">

                <div class="col-md-6 mb-2">
                    <input type="text" name="aadhaar_number" class="form-control" placeholder="Aadhaar Number">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>


                <div class="col-md-6 mb-2">
                    <select name="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="city" class="form-control" placeholder="City">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="state" class="form-control" placeholder="State">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="pincode" class="form-control" placeholder="Pincode">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="country" class="form-control" placeholder="Country">
                </div>

                <div class="col-md-12 mb-2">
                    <textarea name="address" class="form-control" placeholder="Address"></textarea>
                </div>

                <div class="col-md-6 mb-2">
                    <input type="file" name="profile_picture" class="form-control">
                </div>

                <div class="col-md-6 mb-2">
                    <input type="text" name="special_requirements" class="form-control" placeholder="Special Requirements">
                </div>

               

                <div class="col-md-6 mb-3">
                    <select name="payment" id="paymentSelect" class="form-control">
                        <option value="">Select Payment</option>
                        <option value="499">₹499</option>
                        <option value="3500">₹3500</option>
                    </select>
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success px-4">
                        Submit
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

</main>
<script>
function countdownTimerCustom() {
    // Set the date we're counting down to
    const countDownDate = new Date("Jan 19, 2026 00:00:00").getTime();

    const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days-custom").children[0].textContent = days < 10 ? '0' + days : days;
        document.getElementById("hours-custom").children[0].textContent = hours < 10 ? '0' + hours : hours;
        document.getElementById("minutes-custom").children[0].textContent = minutes < 10 ? '0' + minutes :
            minutes;
        document.getElementById("seconds-custom").children[0].textContent = seconds < 10 ? '0' + seconds :
            seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("days-custom").children[0].textContent = "00";
            document.getElementById("hours-custom").children[0].textContent = "00";
            document.getElementById("minutes-custom").children[0].textContent = "00";
            document.getElementById("seconds-custom").children[0].textContent = "00";
        }
    }, 1000);
}

function startTimer() {
    let timer;
    let totalSeconds = 300; // 5 minutes

    if (timer) clearInterval(timer);
    timer = setInterval(function() {
        if (totalSeconds <= 0) {
            totalSeconds = 300; // Reset timer to 5 minutes
        } else {
            totalSeconds--;
        }

        let minutes = Math.floor(totalSeconds / 60);
        let seconds = totalSeconds % 60;

        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
    }, 1000);
}

// Combine both functions under one onload handler
window.onload = function() {
    countdownTimerCustom();
    startTimer();
};
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById('imagePopup');
    const closeBtn = document.querySelector('.price-popup-close');
    const paymentSelect = document.getElementById('paymentSelect');

    document.querySelectorAll('.open-popup').forEach(btn => {
        btn.addEventListener('click', function() {
            paymentSelect.value = this.dataset.price;
            popup.classList.add('active');
        });
    });

    closeBtn.addEventListener('click', () => {
        popup.classList.remove('active');
    });

    popup.addEventListener('click', (e) => {
        if (e.target === popup) {
            popup.classList.remove('active');
        }
    });
});
</script>



@endsection