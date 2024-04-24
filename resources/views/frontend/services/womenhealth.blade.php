@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section women-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up"> Women Health</h1>
                            <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                            <p data-aos="fade-right">Duis aute irure dolor in reprehenderit in volurate velit cillum
                                nulla pariatur nostrud exercitation</p>  </div>
                        </div>
                            <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i> <span class="sub_home_span"><a >Services
                                    </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                    class="sub_span">Womenhealth</span>
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
                    <figure class="mb-0"><img src="{{ asset('img/service_women_health.png') }}"
                            alt="service_women_health.png" class="img-fluid">
                    </figure>

                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " data-aos="fade-right">
                <div class="service_page_aboutus_content">

                    <h2>Women Health</h2>
                    @foreach ($services as $service)
                    <div>{!! $services[1]->content!!}</div>
                    <!-- <p class="margin_bottom">A vast discipline and a science in itself which aimed at integrating mind,
                        body and spirit through the practice of asana, pranayama, mudra, bandha, shat-karma and
                        meditation to achieve a reach a stage of enlightenment or self-realization

                        We offer Physio-Yoga Therapy which is an innovative approach to physical rehabilitation which
                        combines Physiotherapy and Medical Therapeutic Yoga (MTY). What results is a healing experience
                        that blends the latest in medical science and the time-tested traditions of Yoga.</p>
                     @endforeach  -->

                    <div class="btn_wrapper mt-3">
                        <a href="{{ route('frontend.contact.create') }}" class="text-decoration-none get_started_btn">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>

<section class=" women-health">
    <div class="container">
        <h2> You are Not Alone</h2>
        <div class="grid-box mt-4">
            <div class="main-section-box">
                <div class="women-suffer">
                    <div class="logo-box">
                        <img src="{{ asset('img/neck-pain.png') }}" alt="neck-pain" class="img-fluid">
                    </div>
                </div>
                <p class="fw-bold pt-3 text-dark text-center">1 in 2</p>
                <h6 class="fw-normal text-center">Pregnant women have neck pain</h6>
            </div>
            <div class="main-section-box">
                <div class="women-suffer">
                    <div class="logo-box">
                        <img src="{{ asset('img/services/women-suffer.png') }}" alt="women-suffer" class="img-fluid">
                    </div>
                </div>
                <p class="fw-bold  pt-3 text-dark text-center">1 in 3</p>
                <h6 class="fw-normal text-center">Women suffer with urinary incontinence</h6>
            </div>
            <div class="main-section-box">
                <div class="women-suffer">
                    <div class="logo-box">
                        <img src="{{ asset('img/services/pelvic_organ.png') }}" alt="pelvic organ" class="img-fluid">
                    </div>
                </div>
                <p class="fw-bold  pt-3 text-dark text-center">1 in 4</p>
                <h6 class="fw-normal text-center">Women suffer with symptoms of pelvic organ prolapse</h6>
            </div>
            <div class="main-section-box">
                <div class="women-suffer">
                    <div class="logo-box">
                        <img src="{{ asset('img/services/Women_experience.png') }}" alt="Women experience" class="img-fluid">
                    </div>
                </div>
                <p class="fw-bold  pt-3 text-dark text-center">1 in 5</p>
                <h6 class="fw-normal text-center">Women experience chronic pelvic or sexual pain</h6>
            </div>
            <div class="main-section-box">
                <div class="women-suffer">
                    <div class="logo-box">
                        <img src="{{ asset('img/services/women_suffer.png') }}" alt="Women suffer" class="img-fluid">
                    </div>
                </div>
                <p class="fw-bold  pt-3 text-dark text-center">1 in 9</p>
                <h6 class="fw-normal text-center">Women suffer with faecal incontinence</h6>
            </div>
        </div>

    </div>
</section>

<!-- women-health-issue -->
<section class="women-health">
    <div class="container">
        <h2 class="text-center"> Type of Women health Issues</h2>
        <div class="row justify-content-center">
        <div class="col-md-10 col-xs-12 col-lg-8 col-xl-8 col-sm-12 col-12 ">
        <p class="text-center">Women's health issues encompass a wide range of conditions and concerns that specifically
            affect women, from reproductive health to hormonal imbalances and beyond</p></div>

        <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
            <div class="col-md-4 mt-4">
                <div class="card health-card border-0">
                    <img src="{{ asset('img/bladder.png') }}" alt="bladder">
                    <div class="card-content">
                        <h4>Bladder Dysfunctions</h4>
                        <ul>
                            <li>Urinary Incontinence </li>
                            <li>Mixed Incontinence</li>
                            <li>Interstitial Cystitiss (IC)/Bladder Pain Syndrome</li>
                            <li>Urgency,Frequency,Nocturia</li>
                            <li>Muscle Strengthening</li>
                            <li>Pre & Post gynecological surgery rehabilitation</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/Bowel_Issues.png') }}" alt="bowel">
                    <div class="card-content">
                        <h4>Bowel Issues & Prolapse</h4>
                        <ul>
                            <li>Imflammatory Bowel Disease (IBD) </li>
                            <li>Crohn's disease</li>
                            <li>Ulcerative Colitis</li>
                            <li>Constipation</li>
                            <li>Irritable Bowel Syndrome (IBS)</li>
                            <li>Fecal Incontinence</li>
                            <li>Hemorrhoid Plain</li>
                            <li>Vaginal Prolapse(Bladder,Bowel,Uterus)</li>
                            <li>Rectal Prolapse</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/Pain_Dysfunctions.png') }}" alt="Pain Dysfunctions">
                    <div class="card-content">
                        <h4>Pelvic Pain Dysfunctions</h4>
                        <li>Vulvodynia </li>
                        <li>Vaginismus</li>
                        <li>Dyspareunia</li>
                        <li>Pudendal Neuralgia</li>
                        <li>Endometriosis</li>
                        <li>Fibromyalgia</li>
                        <li>Persistent Genital Arousal Disorder (PGAD)</li>
                        <li>Interstitial Cystitis/Painful Bladder Syndrome</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/Postpartum.png') }}" alt="Postpartum">
                    <div class="card-content">
                        <h4>Pregnancy & Postpartum</h4>
                        <li>Rib pain </li>
                        <li>Carpal tunnel syndrome</li>
                        <li>Hip /Groin /Pubic pain</li>
                        <li>Urinary Incontinence</li>
                        <li>Prolapse</li>
                        <li>Postnatal pelvic floor check</li>
                        <li>Blocked milk ducts</li>
                        <li>Return to sport check
</li>
                        <li>Diastasis Recti</li>
                        <li>Pelvic girdle pain/Sacroiliac joint pain</li>
                        <li>Perineal tears, Episiotomies, C-section scar management</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card health-card  border-0">
                    <img src="{{ asset('img/services/Excercise_Programs.png') }}" alt="Excercise Programs">
                    <div class="card-content">
                        <h4>Excercise Programs & Pilates</h4>
                        <li>At World of Women, we offer Pilates Personalised Exercise Programs Prenatal & Postnatal
                            Pilates Physio Led Pregnancy Class Mums and Bubs </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- gallary -->
<section class="pb-5 mb-5 aboutus_content service-gallary">
    <div class="container">
        <h2 class="text-center"> Gallery</h2>
        <div class="row pt-sm-2 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-2">
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
    </div></div>
</section>


@endsection