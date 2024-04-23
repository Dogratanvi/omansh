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
                            <p data-aos="fade-right">Revitalizing movement and enhancing well-being through personalized
                                physiotherapy that restores, heals, and transforms.</p>  </div>
                        </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i> <span class="sub_home_span"><a href="{{ route('frontend.services') }}">Services
                                    </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                    class="sub_span">physiotherapy </span>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="" class="img-fluid">
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
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center" data-aos="fade-right">
                <div class="service_page_aboutus_content  ps-4 ">

                    <h2>What Is Physiotheraphy</h2>
                    @foreach ($services as $service)
                    <div>{!! $services[0]->content!!}</div>
                    <!-- <p class="margin_bottom">A vast discipline and a science in itself which aimed at integrating mind,
                        body and spirit through the practice of asana, pranayama, mudra, bandha, shat-karma and
                        meditation to achieve a reach a stage of enlightenment or self-realization

                        We offer Physio-Yoga Therapy which is an innovative approach to physical rehabilitation which
                        combines Physiotherapy and Medical Therapeutic Yoga (MTY). What results is a healing experience
                        that blends the latest in medical science and the time-tested traditions of Yoga.</p>
                     @endforeach  -->

                    <h3> We work on multiple treatment services like :</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    Spine Rehabilitation/ Back Pain
                                </li>
                                <li>
                                    Antenatal & Post Natal Sessions
                                </li>
                                <li>
                                    Arthritis, Joint Pain & Knee Rehabilitation
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <li>
                                Post-Surgery Rehabilitation
                            </li>
                            <li>
                                Paralysis
                            </li>
                        </div>
                    </div>
                    <div class="btn_wrapper mt-3">
                        <a href="{{ route('frontend.contact.create') }}" class="text-decoration-none get_started_btn">Contact
                            Us</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>

<!-- women-health-issue -->
<section class="pb-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center"> Type of Women health Issues</h2>
                <p class="text-center">Physiotherapy encompasses a wide range of specialized services tailored to meet
                    the
                    unique needs of each patient, focusing on the restoration, maintenance, and maximization of physical
                    strength, function, motion, and overall well-being. 
                </p>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4 mt-4">
                <div class="card health-card border-0">
                    <img src="{{ asset('img/services/physoitheraphy/Orthopedic.png') }}" alt="bladder">
                    <div class="card-content">
                        <h4>Orthopedic Physiotheraphy</h4>
                        <ul>
                            <li>Arthritis (OA, RA) </li>
                            <li>Frozen Shoulder</li>
                            <li>Sprain, Strain(Tendon and Ligament Injury)/li>
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

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/physoitheraphy/Neuro_Physiotheraphy.png') }}" alt="bladder">
                    <div class="card-content">
                        <h4>Neuro Physiotheraphy</h4>
                        <ul>
                            <li>Stroke </li>
                            <li>Cerebral Palsy</li>
                            <li>Parkinson's Disease</li>
                            <li>Head Injury</li>
                            <li>Spinal Cord Injury</li>
                            <li>Muscular Dystrophy</li>
                            <li>Fascial Palsy</li>
                            <li>Balance and Coordination Training</li>


                        </ul>
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

                        </ul>
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
                        </ul>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- gallary -->
<section class="pb-5 mb-5 service-gallary aboutus_content">
    <div class="container">
        <h2 class="text-center"> Gallery</h2>
        <div class="row pt-5">
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_1.png') }}" alt="gallary1">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_2.png') }}" alt="gallary2">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_3.png') }}" alt="gallary3">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_4.png') }}" alt="gallary4">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_5.png') }}" alt="gallary5">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_6.png') }}" alt="gallary6">
                </div>
            </div>
            <div class="col-md-4 mt-3 content">
                <div class="card border-0">
                    <img src="{{ asset('img/gallary_6.png') }}" alt="gallary6">
                </div>
            </div>
        </div>
        <div class="btn_wrapper d-flex justify-content-center mt-5">
            <a href="#" id="loadMore" class="text-decoration-none get_started_btn"> Load More </a>
        </div>
    </div>
</section>



@endsection