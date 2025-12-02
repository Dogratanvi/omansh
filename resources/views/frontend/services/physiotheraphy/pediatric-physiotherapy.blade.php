@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section pediatric-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                 <div>
                                <h1 >Pediatric Physiotherapy</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p >Pediatric physiotherapy is a specialized branch of
                                            physiotherapy designed to address the unique physical and developmental needs of
                                            children. At Omansh, we provide expert pediatric physiotherapy services in
                                            Ghaziabad, helping children recover from injuries, manage chronic conditions,
                                            and achieve critical developmental milestones. Early intervention is vital for
                                            maximizing a child’s potential and fostering long-term physical health.</p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span pe-2"><a href="/services/physiotherapy">Physiotherapy</a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"><a>Pediatric Physiotherapy
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
                                src="{{ asset('img/services/physoitheraphy/Pediatric-physiotherapy-in-ghaziabad.webp') }}"
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
                        <h2>Pediatric Physiotherapy in Ghaziabad
                        </h2>
                        <p>Pediatric physiotherapy focuses on diagnosing, treating, and preventing physical challenges in
                            children. Whether it's addressing developmental delays, managing conditions like cerebral palsy,
                            or recovering from injuries, this therapy plays a pivotal role in enhancing motor skills,
                            posture, and overall mobility.</p>
                        <h3>Key Objectives:
                        </h3>
                        <ul>
                            <li>Promote physical development.
                            </li>
                            <li>Enhance strength, coordination, and flexibility.</li>
                            <li>Aid in injury recovery and prevention.
                            </li>
                            <li>Support children in achieving age-appropriate milestones such as crawling, walking, and
                                running.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Conditions Treated with Pediatric Physiotherapy in Ghaziabad    --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Conditions Treated with Pediatric Physiotherapy in Ghaziabad</h2>
                        <p class="pt-2">Our pediatric physiotherapy services in Ghaziabad cater to a variety of
                            conditions, including:</p>
                        <ul class="ps-5">
                            <li><b>Developmental Delays: </b>Issues with motor, cognitive, or speech development.
                            </li>
                            <li><b>Cerebral Palsy: </b>Improving mobility, muscle strength, and coordination.
                            </li>
                            <li> <b>Muscular Dystrophy: </b>Slowing disease progression and maintaining mobility.
                            </li>
                            <li><b>Torticollis: </b>Relieving neck stiffness and promoting proper posture. </li>
                            <li><b>Scoliosis: </b>Managing spinal curvature and improving posture. </li>
                            <li><b>Post-Surgical Recovery: </b>Rehabilitation after <a href="https://omansh.org/services/orthopedic-physiotheraphy" style="text-decoration: none; color: inherit;" target="_blank" rel="noopener noreferrer">orthopedic</a> surgeries.</li>
                            <li><b>Sports Injuries: </b>Treating injuries sustained during physical activities.
                            </li>
                            <li><b>Flat Feet and Hypermobility: </b>Strengthening joints and improving foot posture.</li>
                        </ul>

                        <p class="pt-2">These conditions often require tailored approaches to ensure the best outcomes for
                            each child.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Pediatric-physiotherapy.webp') }}"
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
    <!-- Our Pediatric Physiotherapy Services in Ghaziabad --->

    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Our Pediatric Physiotherapy Services in Ghaziabad</h2>
            <p class="pt-2 text-center">At Omansh, we offer a range of services tailored to meet the unique needs of
                children:</p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Development-milestone.webp') }}"
                            alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Developmental Milestone Support:
                            </h3>
                            <ul class="ps-5">
                                <li> Helping children achieve physical
                                    milestones like sitting, standing, and walking.

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Strenghth-and-conditioning.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Strengthening and Conditioning:
                            </h3>
                            <ul class="ps-5">
                                <li> Exercises to build muscle strength and overall physical health.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Balance-and-coordination.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Balance and Coordination Therapy:
                            </h3>
                            <ul class="ps-5">
                                <li>Techniques designed to improve motor control and stability.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Posture-correction-in-pediatric-physiotherapy.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Postural Correction:
                            </h3>
                            <ul class="ps-5">
                                <li> Addressing abnormalities like scoliosis or torticollis for better posture and function.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Pediatric-sports-injury.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Pediatric Sports Injury Rehabilitation: </h3>
                            <ul class="ps-5">
                                <li> Focused recovery plans for active children.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Aquatic-therapy.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Aquatic Therapy: </h3>
                            <ul class="ps-5">
                                <li>Water-based exercises for children facing mobility or coordination challenges.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="pt-5">Our child-friendly and supportive environment ensures that every session is engaging and
                effective.</p>
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
                        <h2>Tailored Treatment Plans for Children in Ghaziabad
                        </h2>
                        <p class="pt-2">Every child is unique, and so are their therapy needs. At Omansh, we create
                            customized treatment plans for each child based on their condition, developmental stage, and
                            goals.

                        </p>
                        <ul class="ps-5">
                            <h3>
                                <li> Initial Assessment: Comprehensive evaluation to identify issues and set realistic
                                    goals. </li>
                            </h3>

                            <h3>
                                <li> Personalized Plans: Therapy programs tailored to the child's specific needs.</li>
                            </h3>

                            <h3>
                                <li>Progress Monitoring: Regular assessments to adjust and optimize treatment.</li>
                            </h3>
                            <h3>
                                <li>Parental Involvement: Educating caregivers to support therapy exercises at home.</li>
                            </h3>
                            
                        </ul>
                        <p class="pt-2">This holistic approach ensures consistent progress and sustained benefits.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits of Pediatric Physiotherapy in Ghaziabad -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Benefits-of-pediatric-physiotherapy.webp') }}"
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

                        <h2>Benefits of Pediatric Physiotherapy in Ghaziabad</h2>
                        <p class="pt-2">Children undergoing pediatric physiotherapy in Ghaziabad experience numerous benefits:
                        </p>
                        <ul>
                            <li>Improved motor skills and coordination.
                            </li>
                            <li> Enhanced strength, balance, and flexibility.
                            </li>
                            <li><b>Faster recovery from surgeries or injuries.
                            </li>
                            <li><b>Increased independence in daily activities.</li>
                            <li><b> Better overall quality of life through functional mobility.
                            </li>
                        </ul>
                        <p class="pt-2">Early intervention leads to lasting improvements, fostering confidence and independence in children.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Why Choose Our Pediatric Physiotherapy Services in Ghaziabad?< -->
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Why Choose Our Pediatric Physiotherapy Services in Ghaziabad?</h2>
                        <p class="pt-2">At Omansh, we are committed to providing the highest standard of care for children:</p>
                        <ul>
                            <li>  Experienced Specialists: Our pediatric physiotherapists are experts in treating children of all ages.
                            </li>
                            <li>Child-Friendly Environment: We create a supportive atmosphere where children feel comfortable.
                            </li>
                            <li>Evidence-Based Care: Using proven techniques tailored to pediatric needs.</li>
                            <li>Parental Collaboration: We involve parents and caregivers throughout the therapeutic process.
                            </li>
                        </ul>
                        <p class="pt-2">Our team holds specialized certifications in pediatric physiotherapy and prioritizes compassionate, results-driven care.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Why-choose-pediatric-physiotherapy.webp') }}"
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
                                    1. What is physiotherapy in pediatrics?

                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Pediatric physiotherapy focuses on addressing physical and developmental challenges in children, promoting better mobility and independence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What is the role of a pediatric physiotherapist?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A pediatric physiotherapist assesses, diagnoses, and treats children with physical conditions, helping them improve strength, coordination, and overall development.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Who needs pediatric physiotherapy? </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Children with developmental delays, injuries, neurological conditions like cerebral palsy, or post-surgical recovery needs can benefit from pediatric physiotherapy.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Why pediatric physio?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Pediatric physiotherapy ensures that children develop essential motor skills, recover from injuries, and manage physical conditions effectively, enhancing their quality of life.
                                    </p>
                                </div>
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
