@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section orthopedic-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                <h1 data-aos="fade-up">Orthopedic Physiotherapy</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p data-aos="fade-right">Orthopedic physiotherapy diagnoses manages, and treats
                                            musculoskeletal disorders. It also helps with pain, movement, and recuperation
                                            after surgery and injuries. Omansh offers customized orthopedic physiotherapy in
                                            Ghaziabad. Discover how orthopedic physical treatments can enhance your life.
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
                                        class="sub_span"><a>Orthopedic Physiotherapy
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
                        <figure class="mb-0"><img src="{{ asset('img/services/physoitheraphy/Benefits-of-orthopedic.webp') }}"
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
                        <h2>What is Orthopedic Physiotherapy?</h2>
                        <p class="margin_bottom">Orthopedic physiotherapy treats bones, muscles, ligaments, tendons, and
                            joints. It can help with arthritis, fractures, and sports injuries.
                        </p>
                        <h4> Benefits of Orthopaedic Physiotherapy:
                        </h4>
                        <p><b>There are different benefits of Orthopaedic Physiotherapy:</b>
                        </p>
                        <ul>
                            <li>Orthopaedic physiotherapy reduces chronic pain and inflammation. </li>
                            <li>Aids surgery and injury healing.</li>
                            <li>Builds strength, mobility, and balance.</li>
                            <li>Fixing prevents damage.</li>
                        </ul>
                        <p>Orthopedic treatment can improve mobility following surgery or chronic disease.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Types of Orthopedic Physical Therapy Available in Ghaziabad -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Types of Orthopedic Physical Therapy Available in Ghaziabad</h2>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Manual-therapy-in-orthopedic.webp') }}" alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Manual Therapy</h3>
                            <ul>
                                <li>Joint mobilization and soft tissue manipulation reduce pain and improve mobility.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Exercise-therapy-in-orthopedic.webp') }}" alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Exercise Therapy</h3>
                            <ul>
                                <li>Customized strength, flexibility, and endurance programs.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Rehab-after-surgery-in-orthopedic.webp') }}"
                            alt="Supporting-Mental-Health">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Rehab after surgery</h3>
                            <ul>
                                <li>Rehabilitation regimens for joint replacement and ligament repair.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Pain-management-options-in-orthopedic.webp') }}"
                            alt="Supporting-Mental-Health">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Pain Management Options</h3>

                            <ul>
                                <li>TENS and ultrasound relieve pain and heal.</li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <p class="pt-5">Our team tailors these therapies to your health and recuperation.

            </p>
            <figure class="blog_posts_left_shape left_shape mb-0">
                <img src="{{ asset('images/blog_posts_left_shape.png') }}" alt="blog_posts_left_shape" class="img-fluid">
            </figure>
            <figure class="blog_posts_right_shape right_shape mb-0">
                <img src="{{ asset('images/blog_posts_right_shape.png') }}" alt="blog_posts_right_shape" class="img-fluid">
            </figure>
        </div>
    </section>

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2>Conditions Treated by Orthopedic Physiotherapy</h2>
                        <p class="pt-2">Orthopedic physiotherapy treats several musculoskeletal issues. Common orthopedic
                            physiotherapy conditions:
                        </p>
                        <ul>
                            <li>Arthritis: Reducing arthritis pain.</li>
                            <li> Sports Injuries: Helping sportsmen heal and avoid injury.</li>
                            <li> Tendonitis: Reduce inflammation and restore function.</li>
                            <li> Post-Surgery Recovery: Better mobility after joint replacements. </li>
                            <li> Fracture & Dislocations: Faster fracture and dislocation healing and strength.
                            </li>
                        </ul>
                        <p class="pt-2">Orthopedic physiotherapy promotes long-term function and quality of life by
                            treating the cause.

                        </p>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Orthopedic Physical -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Orthopedic-physical-therapy-services.webp') }}"
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

                        <h2>Orthopedic Physical Therapy Services We Offer</h2>
                        <p class="pt-2">Omansh offers comprehensive, patient-centered Ghaziabad orthopedic physical
                            therapy. </p>
                        <h4>What we offer:</h4>
                        <ul>
                            <li>Assessment and Diagnosis: Thorough evaluations to decide treatment. </li>
                            <li>Customised Therapy Plans: For your specific needs.
                            </li>
                            <li> Pain Relief Program: Managing and reducing pain with modern technology.</li>
                            <li>Post-Surgical Rehabilitation: Re-injury prevention methods and exercises, like ACL repair or
                                joint replacement recovery: </li>
                        </ul>

                        <p class="pt-2">With experience and cutting-edge equipment, our clinic provides great care.
                        </p>
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

                        <h2>Why Choose Us for Orthopedic Physiotherapy in Ghaziabad</h2>
                        <p class="margin_bottom">Choosing Omansh for Ghaziabad orthopedic physiotherapy means: </b></p>
                        <ul>
                            <li>Certified professional team. </li>
                            <li> Patient-centered therapy.
                            </li>
                            <li> Advanced equipment and personalized treatment.
                            </li>
                            <li>Previous healing and thriving success.
                            </li>
                        </ul>
                        <p class="margin_bottom">Our goal is patient empowerment and recovery.
                        </b></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/physoitheraphy/Orthopedic-physiotherapy-services-in-ghaziabad.webp') }}"
                                alt="Personalized Care Plans" class="img-fluid">
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
                                    1.  What is an orthopedic physiotherapist?

                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Orthopedic physiotherapists manage chronic pain and musculoskeletal disorders.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What is the role of physical therapy in orthopedic recovery?

                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Orthopedic physical therapy helps with pain, movement, and injury/surgery rehabilitation.

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What is orthopedic recovery?

                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Orthopedic rehabilitation heals bones, joints, muscles, and more after surgery or injury.  </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseFour">
                                    3.  What is orthopedic pain?

                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Fractures, arthritis, and inflammation cause orthopedic pain.
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
