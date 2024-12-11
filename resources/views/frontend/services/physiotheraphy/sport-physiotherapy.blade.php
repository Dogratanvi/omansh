@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section sports-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                <h1 data-aos="fade-up">Sport Physiotherapy</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p data-aos="fade-right">Omansh Sports Physiotherapy in Ghaziabad helps athletes
                                            avoid injuries, recover from setbacks, and improve performance. Amateur and
                                            professional athletes receive excellent sports physiotherapy in Ghaziabad from
                                            Omansh. Our sports-specific programs optimize performance and prevent damage.
                                        </p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span pe-2"><a href="/services/physiotherapy">Physiotherapy</a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"><a>Sport Physiotherapy
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

    {{-- Why Pregnancy & Postpartum Care isEssential --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Sports-physiotherapy-in-ghaziabad.webp') }}"
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
                        <h2>Sports Physiotherapy in Ghaziabad
                        </h2>
                        <ul>
                            <li>Sports physiotherapy diagnoses, treats, and prevents injuries. It improves athlete strength,
                                mobility, and performance. Omansh's Ghaziabad physiotherapists tailor athlete treatment for
                                best recovery and performance. We assist athletes recover from ligament tears and train to
                                avoid injury.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Conditions Treated with Sports Physiotherapy    --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Conditions Treated with Sports Physiotherapy</h2>
                        <p class="pt-2">Our Ghaziabad clinic addresses sports injuries and ailments like:

                        </p>
                        <ul class="ps-5">
                            <li> Muscle Sprains and Ligament Strains

                            </li>
                            <li>Tennis elbow and Achilles tendinitis are examples of tendonitis.
                            </li>
                            <li>Dislocations, breaks
                            </li>
                            <li> Rotator Cuff Injury</li>
                            <li> Rehabilitating joint replacement after surgery </li>
                        </ul>

                        <p class="pt-2">Overuse issues are addressed to assist athletes return to their sport stronger.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Sports-physiotherapy.webp') }}"
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
    <!-- Our Sports Physiotherapy Services in Ghaziabad
                                 -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Our Sports Physiotherapy Services in Ghaziabad</h2>
            <p class="pt-2">We offer many services to meet athletes' needs: </p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Sports-injury-prevention.webp   ') }}"
                            alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Injury-Prevention Programs :</h3>
                            <ul>
                                <li> Sports injury prevention through training and education.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Sports-acute-injury.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Manage Acute Injury: </h3>
                            <ul>
                                <li>Sports injuries require rapid pain management and recovery.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Sports-specific-injury.webp') }}"
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
                        <img src="{{ asset('img/services/physoitheraphy/Performance-improvement-training.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Performance Improvement Training: </h3>
                            <ul>
                                <li> It improves sports performance by increasing strength, flexibility, and agility.

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Manual-therapy-method.webp  ') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Manual Therapy Methods: </h3>
                            <ul>
                                <li> Advanced joint and soft tissue manipulation for mobility and discomfort. </li>
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
                        <h2>Specialized Sports Training and Rehabilitation Programs
                        </h2>
                        <p class="pt-2">We personalise athlete training: </p>
                        <ul class="ps-5">
                            <li>Team sports: Football, cricket, basketball
                            </li>
                            <li> Individual sports: Tennis, golf, swimming
                            </li>
                            <li>Endurance Events: Marathon, track and field endurance
                            </li>
                        </ul>
                        <p class="pt-2">From pre-season conditioning to post-season recuperation, our programs cover it
                            all.
                        </p>

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
                                src="{{ asset('img/services/physoitheraphy/Advanced-equipment-training.webp') }}"
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Advanced Equipment and Techniques</h2>
                        <p class="pt-2">Omansh employs cutting-edge equipment and strategies to heal quickly and avoid
                            injuries: </p>
                        <ul>
                            <li> <b>Electrotherapy: </b>Ultrasound and TENS muscle stimulation and pain relief. </li>
                            <li><b>Cupping and Dry Needling: </b>Reduce muscle tension and increase circulation.</li>
                            <li> <b>Kinesiology Taping and Bracing: </b>To support injury and enhance movement.</li>
                            <li><b>Durability and Resistance Training Tools: </b>For building strength and stamina.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Benefits of Choosing Sports Physiotherapy in Ghaziabad -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Benefits of Choosing Sports Physiotherapy in Ghaziabad</h2>
                        <p class="pt-2">Omansh sports physiotherapy helps athletes in many ways:
                        </p>
                        <ul>
                            <li> Less recuperation time</li>
                            <li> Improved muscle and joint function</li>
                            <li> Improved balance, strength, and flexibility to prevent recurring injuries.
                            </li>
                            <li>Improved mental and athletic resilience

                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Benefits-of-sports-physiotherapy.webp') }}"
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
                                src="{{ asset('img/services/physoitheraphy/Whychoosing-sports-physiotherapy.webp') }}"
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Why Choose Our Sports Physiotherapy Services in Ghaziabad?</h2>
                        <p class="pt-2">Sports physiotherapy in Oman is reliable because:
                        </p>
                        <ul>
                            <li> <b>Experienced Physiotherapists:</b> Experts with sports rehab and performance enhancing
                                experience</li>
                            <li><b> Athlete-Focused Treatment Plans:</b> Customised athlete-focused therapy.</li>
                            <li><b>State of the Art Facility:</b> Technologically improved facilities optimize treatment.</li>
                            <li><b>Proven Track Records:</b> Verified Performance: Ghaziabad athletes and fans approve. </li>
                        </ul>

                    </div>
                </div>
            </div>


        </div>
    </section>

    {{-- faq --}}
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
                                    1. What do physiotherapists do in sports?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Rehabilitation, injury prevention, and performance optimization are assessed,
                                        diagnosed, and treated following sports injuries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What is sports physiotherapy called?</button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Physiotherapy and sports science repair injuries and increase performance in sports
                                        therapy.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What is sports therapy?</button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Common terminology includes athletic training and sports rehabilitation.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. How to become a sports Physiotherapy?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Physiotherapists must graduate and then specialise in sports physiotherapy through
                                        advanced study or qualifications.

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
