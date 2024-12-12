@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section  physiotherapy">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content">
                                <h1 data-aos="fade-up"> Physiotherapy</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p data-aos="fade-right">Modern healthcare relies on physiotherapy to improve
                                            mobility, control pain, and speed recovery. Physical disabilities from injuries,
                                            surgeries, or chronic diseases benefit most from it. We feel happy to provide
                                            Ghaziabad's best physiotherapy services tailored to each individual.</p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span">Physiotherapy </span>
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


    <!-- ABOUT US SECTION -->
    <section class="aboutpage_aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/physoitheraphy/left-image.png') }}"
                                alt="physoitheraphy" class="img-fluid h-100">
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center" data-aos="fade-right">
                    <div class="service_page_aboutus_content ">

                        <h2>What Is Physiotheraphy ?</h2>

                        @foreach ($services as $service)
                            <div>{!! $services[0]->content !!}</div>
                            <!-- <p class="margin_bottom">A vast discipline and a science in itself which aimed at integrating mind,
                                            body and spirit through the practice of asana, pranayama, mudra, bandha, shat-karma and
                                            meditation to achieve a reach a stage of enlightenment or self-realization

                                            We offer Physio-Yoga Therapy which is an innovative approach to physical rehabilitation which
                                            combines Physiotherapy and Medical Therapeutic Yoga (MTY). What results is a healing experience
                                            that blends the latest in medical science and the time-tested traditions of Yoga.</p>
    @endforeach  -->

                            <div class="btn_wrapper mt-3">
                                <a href="{{ route('frontend.contact.create') }}"
                                    class="text-decoration-none get_started_btn">Contact
                                    Us</a>
                            </div>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="aboutpage_aboutus_section pt-0">
        <div class="container">
            <div class="row">

                <div class="col-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2 class="pb-3">What Does a Physical Therapist Treat?</h2>
                        <p>Physical therapists treat many conditions like:
                        </p>
                        <ul>
                            <li><b> Musculoskeletal Issues: </b>Back pain, Arthritis, Joint pain, and Surgery recovery.

                            </li>
                            <li> <b>Neurological Conditions: </b>Multiple sclerosis, Parkinson's, Stroke recovery.
                            </li>
                            <li> <b> Sports Injuries: </b>Overuse, Muscular strains, Ligament tears.


                            </li>
                            <li> Chronic Pain Management: </b>Management of fibromyalgia persistent or neck discomfort.


                            </li>

                        </ul>
                        <p>Physical therapists attempt to promote health, function, and well-being.

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- women-health-issue -->
    <section class="women-health">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center"> Our Different Types of Physiotherapy Services in Ghaziabad</h2>
                    <p class="text-center">Omansh provides a wide range of physiotherapy services in Ghaziabad to address
                        varied healthcare needs:
                    </p>
                </div>
            </div>

            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Orthopedic.png') }}" alt="bladder">
                        <div class="card-content">
                            <h4>Orthopedic Physiotheraphy</h4>

                            <li>Arthritis (OA, RA) </li>
                            <li>Frozen Shoulder</li>
                            <li>Sprain, Strain(Tendon and Ligament Injury)</li>
                            <li>Shoulder Pain
                            </li>
                            <li>Back Pain
                            </li>
                            <li>Neck Pain
                            </li>
                            <li> Spinal Condition
                            </li>
                            <li>Cervical Spondylitis, Cervical Radiculopathy
                            </li>
                            <li>Portural Deformity
                            </li>
                            <li>Lumbar Spondylitis, Sciatica, PIVD
                            </li>
                            <li>Amputation
                            </li>
                            <li> Total Knee Replacement Rehab
                            </li>
                            <li> Musculoskeletal Pain
                            </li>

                            <div class="btn_wrapper ">
                                <a href="/services/physiotheraphy/orthopedic-physiotheraphy"
                                    class="item-link women-health-link">Read More <i
                                        class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Neuro_Physiotheraphy.png') }}" alt="bladder">
                        <div class="card-content">
                            <h4>Neuro Physiotheraphy</h4>

                            <li>Stroke </li>
                            <li>Cerebral Palsy</li>
                            <li>Parkinson's Disease</li>
                            <li>Head Injury</li>
                            <li>Spinal Cord Injury</li>
                            <li>Muscular Dystrophy</li>
                            <li>Fascial Palsy</li>
                            <li>Balance and Coordination Training</li>

                            <div class="btn_wrapper ">
                                <a href="/physiotheraphy/neuro-physiotherapy"
                                    class="item-link women-health-link">Read More <i
                                        class="fa fa-arrow-right"></i></a>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Sports_Physiotheraphy.png') }}" alt="bladder">
                        <div class="card-content">
                            <h4>Sports Physiotheraphy</h4>
                            <li>Ankle Pain </li>
                            <li>Shin Splint</li>
                            <li>Achilles Tendinopathy
                            </li>
                            <li>Jumpers Knee
                            </li>
                            <li>Meniscus Tear</li>
                            <li>MCL | LCL Tear</li>
                            <li> ACL Tear</li>
                            <li> Ac Joint Injury</li>
                            <li> Rotator Cuff Injury</li>
                            <li> Tennis elbow</li>
                            <li> Bursitis</li>
                            <li> Wrist Fracture</li>

                            <div class="btn_wrapper ">
                                <a href="/services/physiotheraphy/sport-physiotherapy"
                                    class="item-link women-health-link">Read More <i
                                        class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Geriatric_Physiotheraphy.png') }}" alt="bladder">
                        <div class="card-content">
                            <h4>Geriatric Physiotheraphy</h4>
                            <li>Arthritis </li>
                            <li>Osteoporosis</li>
                            <li>Pegenrative Disorder</li>
                            <li>Balance Disorder</li>
                            <li>Pain Management</li>
                            <li>Restore Mobility</li>
                            <li>Prevention Of Bed Rest</li>
                            <div class="btn_wrapper ">
                                <a href="/services/physiotheraphy/geriatric-physiotherapy"
                                    class="item-link women-health-link">Read More <i
                                        class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Pediatric_Physiotheraphy.png') }}" alt="bladder">
                        <div class="card-content">
                            <h4>Pediatric Physiotheraphy</h4>
                            <li>Celebral Palsy</li>
                            <li>Muscular Dystrophy
                            </li>
                            <li>Torticolis
                            </li>
                            <div class="btn_wrapper ">
                                <a href="/services/physiotheraphy/pediatric-physiotherapy"
                                    class="item-link women-health-link">Read More <i
                                        class="fa fa-arrow-right"></i></a>

                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-lg-5 mt-xl-5 mt-md-4 mt-sm-3 mt-xs-3 mt-3 mt-xxl-5">

                @include('frontend.bookingform')

            </div>
        </div>



    </section>

    <section class="aboutpage_aboutus_section pt-0">
        <div class="container">
            <div class="row">

                <div class="col-12 d-flex align-items-center " data-aos="fade-right">
                    <div class="service_page_aboutus_content">

                        <h2 class="pb-3">What to Expect from Physiotherapy Treatments?</h2>

                        <ul>
                            <li><b> Assessment and Diagnosis: </b>A complete health assessment. </li>
                            <li> <b>Customized Treatment Plan: </b>A customized treatment plan based on your requirements
                                and
                                goals.</li>
                            <li> <b> Therapy Sessions: </b>Exercise, manual therapy, and sophisticated modalities like
                                ultrasound and TENS are used in therapy. </li>
                            <li> Progress Monitoring: </b>Regular evaluations to alter therapy.</li>
                            <li> Holistic Approach: </b>Mental and physical health integration for balanced healing.</li>

                        </ul>

                        <h2 class="pb-3">Manage Pain with our Physiotherapy Treatments in Ghaziabad</h2>
                        <p>Physiotherapy services in Ghaziabad relieve pain and improve daily living. Experts focus on
                            strategies like:</p>
                        <ul>
                            <li>Release muscular tension manually. </li>
                            <li> Strengthening weak muscles with therapy.</li>
                            <li> Improve your health with pain management.</li>
                            <li>Omansh helps with chronic pain and injury recovery.
                            </li>

                        </ul>


                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- gallary -->
    <section class="pb-5 mb-5  aboutus_content">
        <div class="container">
            <h2 class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start">
                Gallery</h2>
            <div class="women-health">
                <div class="row">
                    @csrf
                    @foreach ($galleryImages as $gallery)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                            <div class="women_box border-0 rounded-0">
                                <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal"
                                    data-title="" data-image="{{ $gallery }}" data-target="#image-gallery">
                                    <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                        src="{{ $gallery }}" alt="gallery">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn_wrapper d-flex justify-content-center mt-5">
                    <a href="#" id="loadMor" class="text-decoration-none get_started_btn"> Load More </a>
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
                                    1. What is Physiotherapy?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Personalized exercises and treatments in physiotherapy improve physical function,
                                        mobility, and quality of life.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What is a physiotherapist used for?

                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Physiotherapists treat injuries, manage chronic pain, and enable rehabilitation to
                                        restore strength and function.

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What is the goal of physiotherapy?


                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Physiotherapy aims to improve movement, discomfort, and performance.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Which type of physiotherapy is best?

                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Individual needs determine the appropriate physiotherapy. Orthopedic physiotherapy is
                                        best for joint and muscular disorders, whereas neuroglial is best for stroke or
                                        Parkinson's.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Why is physiotherapy best?

                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Physical therapy is one of the greatest healthcare methods since it manages pain,
                                        improves mobility, and promotes long-term rehabilitation without drugs.
                                        Personalization makes it useful for many conditions.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <div class="modal fade modalDialogBox galleryModal" id="image-gallery" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog galleryDialog">
            <div class="modal-content galleryModal-content">
                <div class="modal-header p-0">
                    <h4 class="modal-title" id="image-gallery-title"></h4>
                    <button type="button" class="close m-0 pb-0 pt-0 pe-0 border-0 bg-transparent"
                        data-dismiss="modal"><span aria-hidden="true" class="text-dark"><i
                                class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <img id="image-gallery-image" class="img-responsive border-0 rounded-0" src="">
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <button type="button" class="btn btn-secondary float-left bg-transparent border-0 py-0 shadow-none"
                        id="show-previous-image"><i class="fas fa-caret-left"></i>
                    </button>
                    <button type="button" id="show-next-image"
                        class="btn btn-secondary float-right bg-transparent border-0 py-0 shadow-none"><i
                            class="fas fa-caret-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
