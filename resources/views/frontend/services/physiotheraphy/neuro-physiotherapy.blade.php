@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section neuro-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                 <div>
                                <h1 >Neuro Physiotherapy</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p >Neuro-physiotherapy treats neurological disorders. It aids
                                            nervous system recovery, enhancing movement, coordination, and well-being.
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
                                        class="sub_span"><a>Neuro Physiotherapy
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

    {{-- Why Pregnancy & Postpartum Care isEssential --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Neuro-physiotherapy-in-ghaziabad.webp') }}"
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
                        <h2>Neuro-Physiotherapy in Ghaziabad
                        </h2>
                        <ul>
                            <li>Omansh Neuro Physiotherapy Clinic in Ghaziabad gives quality neurological care. With the
                                increased need for neurological rehabilitation, we offer personalized programs to help
                                patients recover and improve their quality of life.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Conditions Treated with Neuro-Physiotherapy     --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Conditions Treated with Neuro-Physiotherapy</h2>
                        <p class="pt-2">Our facility treats neurological diseases:

                        </p>
                        <ul class="ps-5">
                            <li> Stroke Rehabilitation: Restoring independence and motor skills after stroke.
                            </li>
                            <li>Parkinson’s Disease: Customised workouts for Parkinson's disease mobility and symptoms.</li>
                            <li>Multiple Sclerosis Support: Reduced muscle weakness and coordination.  </li>
                            <li>   Spinal Cord Injuries: Complete spinal cord injury mobility programs.
                            </li>
                        </ul>

                        <p class="pt-2"> Neuropathies and Motor Neuron Diseases: Illness strengthening exercises for
                            nerve-related problems. </p>
                        <p class="pt-2"> We offer advanced, compassionate care to all ages.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/physoitheraphy/Neurological-disorders.webp') }}"
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
    <!-- Types of Neuro-Physiotherapy Services
                         -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Types of Neuro-Physiotherapy Services</h2>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Balance-&-corditnation-therapy.webp') }}"
                            alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Balance and Coordination Therapy :</h3>
                            <ul>
                                <li>Great for vertigo and stroke therapy.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Gait-training.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Gait Training: </h3>
                            <ul>
                                <li>Helping patients walk freely. </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Neuromuscular.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Neuromuscular Stimulation and Electrotherapy:</h3>
                            <ul>
                                <li>Increases nerves and muscle functionality. </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/physoitheraphy/Postural-exercise.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Postural Control and Strengthening Exercises: </h3>
                            <ul>
                                <li> These are needed for spinal injuries and degenerative illnesses.
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
            <p class="pt-5"> These therapies are customized for optimal recovery.</p>
        </div>
    </section>

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">
                        <h2>Neurological Physiotherapy Exercises
                        </h2>
                        <p class="pt-2">Neural physiotherapy uses exercises. Among our programs:</p>
                        <ul class="ps-5">
                            <li>Stretching for flexibility. </li>
                            <li>Joint and muscle strengthening exercises. </li>
                            <li> Train coordination to improve motor skills.</li>
                            <li> Neurological respiratory breathing techniques.</li>
                        </ul>
                        <p class="pt-2">2. Explain the importance of timely <a href="https://omansh.org/blog/11/what-is-neurophysiotherapy-role-technique-and-benefits" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">neuro-physiotherapy</a> for faster recovery.</p>
                        <h2 class="pt-4">Neuro-Physiotherapy Rehabilitation in Ghaziabad</h2>
                        <p class="pt-2">Omansh Clinic offers:
                        </p>
                        <ul class="ps-5">
                            <li>Acute Care: Speeds recovery after surgery or injury.</li>
                            <li>Chronic care: Neurodegenerative illness chronic care.</li>
                            <li> Home-Based Programs: Patients who cannot attend clinics can use home-based programs.</li>
                        </ul>
                        <p class="pt-2">Early neuro-physiotherapy improves recovery and quality of life.</p>
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
                                src="{{ asset('img/services/physoitheraphy/Why-choose-neuro-physiotherapy.webp') }}"
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

                        <h2>Why Choose Our Neuro-Physiotherapy Services in Ghaziabad?</h2>
                        <ul>
                            <li>Professionals Team: Our neuro physiotherapists address neurological problems.

                            </li>
                            <li>Advanced facilities: Modern diagnostic and treatment equipment for sophisticated facilities.
                            </li>
                            <li> Patient-Centered: Customised treatments focusing on holistic treatment.
                            </li>
                            <li>Convenient Location: Close to Ghaziabad and other areas.</li>
                        </ul>

                        <p class="pt-2">We are trusted in neuro-physiotherapy for our quality. </p>
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
                                    1. What does a neurophysiotherapist do?</button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> They assist neurological patients to walk, balance, and strengthen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What is the work of neurotherapy?</button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Neurotreatment restores nervous system function manages symptoms, and improves
                                        mobility.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Is neuro therapy safe?

                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Neurotherapy is safe and effective when administered by competent professionals. </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Who can benefit from neuro-physiotherapy?</button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Stroke, Parkinson's, and spinal cord injury patients.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5.  How is neuro-physiotherapy rehabilitation conducted in Ghaziabad?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">Our in-clinic and home-based programs are tailored to patient needs and rehabilitation goals.
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
