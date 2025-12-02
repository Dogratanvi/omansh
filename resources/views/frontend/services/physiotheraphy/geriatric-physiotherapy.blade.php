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
                                 <div>
                                <h1 >Geriatric Physiotherapy</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p>Physical health and independence are important as people
                                            age. Senior physiotherapy improves life. Omansh offers specialized geriatric
                                            physiotherapy for Ghaziabad seniors.</p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span pe-2"><a href="/services/physiotherapy">Physiotherapy</a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"><a>Geriatric Physiotherapy
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

    {{-- Geriatric Physiotherapy in Ghaziabad --}}
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">
                        <h2>Geriatric Physiotherapy in Ghaziabad
                        </h2>
                        <p>Geriatric physiotherapy improves age-related physical difficulties with customized routines. It
                            helps seniors move, live independently, and ease chronic pain.
                        </p>
                        <h3>Key Goals:
                        </h3>
                        <ul>
                            <li>Treat neurological, osteoporosis, and arthritic issues.</li>
                            <li> Improve strength, balance, and flexibility to avoid falls.</li>
                            <li>Help rehab after surgery or injury. </li>
                            <li>Enhance respiratory and general health.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Who Can Benefit from Geriatric Physiotherapy in Ghaziabad?    --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Who Can Benefit from Geriatric Physiotherapy in Ghaziabad?</h2>
                        <p class="pt-2">Our programs help elders with these issues:

                        </p>
                        <ul class="ps-5">
                            <li> Reduce arthritis discomfort and improve mobility.</li>
                            <li>Increase bone strength and minimize osteoporosis. </li>
                            <li> Parkinson's, stroke, and related disease management.</li>
                            <li> Recovery from hip and knee replacements and fractures. </li>
                            <li> Balance and chronic pain relief improve mobility and prevent falls.
                            </li>
                        </ul>

                        <p class="pt-2">Our geriatric physiotherapy rehabilitation services can help you or a loved one
                            recover from surgery, manage a chronic illness, or stay fit.</p>
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
    <!-- What Are The Conditions Treated By Geriatric Physiotherapy?
                                         -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">What Are The Conditions Treated By Geriatric Physiotherapy?</h2>
            <p class="pt-2 text-center">Geriatric physiotherapy addresses many issues:
            </p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Arthritis.webp') }}"
                            alt="Prenatal-support">
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
                            <h3 class="fs-4 lh-sm"> Improve strength, balance, and flexibility to avoid falls.
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Geriatric-physiotherapy-in-sports.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Sports-Specific: </h3>
                            <ul>
                                <li>Rehabilitation Plans for Sports Sport-specific recovery programs.
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
                            <h3 class="fs-4 lh-sm">Improve post-surgery or injury recovery.
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Geriatric-physiotherapy-promotes-respiratory.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Promote respiratory and general health.
                            </h3>
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
                        <h2>Services Offered in Geriatric Physiotherapy
                        </h2>
                        <p class="pt-2">To satisfy the elderly, Omansh offers numerous Ghaziabad geriatric <a href="https://omansh.org/services/physiotherapy" style="text-decoration: none" target="_blank" rel="noopener noreferrer">physiotherapy
                            services:</a>
                        </p>
                        <ul class="ps-5">
                            <li>Treatments for chronic joint and muscle pain.
                            </li>
                            <li> Mobility and Strengthening Exercises: Flexibility, strength, and coordination programs.
                            </li>
                            <li>Fall Prevention and Balance Training: Specialised training to reduce falls and injuries.
                            </li>
                            <li> Rehabilitation after hip replacements, fractures, or other procedures.
                            </li>
                            <li> Seniors with breathing issues can benefit from respiratory physiotherapy.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Advanced Equipment and Techniques -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Services-offered-in-Geriatric-physiotherapy.webp') }}"
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Customized Geriatric Physiotherapy Plans in Ghaziabad</h2>
                        <p class="pt-2">Everyone's health demands vary, especially in old age. Our clinic tailors
                            geriatric physiotherapy:
                        </p>
                        <ul>
                            <li> <b>Conducting Initial Assessments: </b>Assessing patient condition, age, and goals early.
                            </li>
                            <li><b>Treatment Plan Customisation: </b>Making customised exercises and therapies.</li>
                            <li><b> Regular Adjustments & Monitoring: </b>Tracking progress and optimising results.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Benefits of Geriatric Physiotherapy for Seniors in Ghaziabad -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Benefits of Geriatric Physiotherapy for Seniors in Ghaziabad</h2>
                        <p class="pt-2">Our geriatric physiotherapy assists Ghaziabad seniors:
                        </p>
                        <ul>
                            <li> Reduced <a href="https://omansh.org/blog/19/crohns-disease" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">chronic pain</a> and improved joint function. </li>
                            <li>Better strength, flexibility, and mobility. </li>
                            <li> Depend less on others daily.</li>
                            <li>Better mental health and life. </li>
                        </ul>
                        <p class="pt-2">We assist elderly to live active, happy lives by enhancing physical and mental
                            health. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Benefits-of-Geriatric-physiotherapy.webp') }}"
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

    <!-- Why Choose Our Sports Physiotherapy Services in Ghaziabad? -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Why-choosee-Geriatric-physiotherapy.webp') }}"
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Why Choose Our Geriatric Physiotherapy Services in Ghaziabad?</h2>
                            <p class="pt-2">Health is prioritised for older patients in Omansh:

                            </p>
                            <ul>
                                <li> <b> Experienced: </b>Certified senior care physiotherapists.
                                </li>
                                <li><b> Compassionate Care: </b>Patients' comfort and dignity are prioritised in
                                    compassionate treatment.</li>
                                <li><b> Modern facilities: </b>Modern Facilities: Advanced Therapy.
                                </li>
                                <li><b>Convenient Locations: </b>Easy access for Ghaziabad inhabitants.</li>
                                <li><b>Proven Results: </b>Feedback from patients and families.
                                </li>
                            </ul>

                    </div>
                </div>
            </div>


        </div>
    </section>

    {{-- faq --}}
    <section class="aboutpage_aboutus_section pt-3">
        <div class="container">
            <div class="row">
                <div class="service_page_aboutus_content">

                    <h2 class="text-center">FAQ</h2>
                    <div class="accordion pt-4" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What is a geriatric physiotherapy?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Senior-specific physiotherapy improves health and heals injuries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What is geriatric therapy?</button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Elderly people manage chronic conditions, recover from injuries, and stay independent
                                        using geriatric treatment.

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What is the role of physiotherapy in geriatric patients?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Physiotherapy helps seniors with mobility, discomfort, and injury prevention.</p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Why is it called geriatric? </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Health difficulties in older persons are treated by "geriatric" medicine.

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
    <section class="aboutpage_aboutus_section message_section  service-gallary faq-section">
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Book Ghaziabad Geriatric Physiotherapy
                        </h2>
                        <p class="pt-2">Improve your freedom and health. Call our Ghaziabad geriatric physiotherapists
                            now.

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
    <figure class="blog_posts_left_shape left_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_left_shape.png" alt="left-shape" class="img-fluid">
</figure>
<figure class="blog_posts_right_shape right_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_right_shape.png" alt="right-shape" class="img-fluid">
</figure>
@endsection
