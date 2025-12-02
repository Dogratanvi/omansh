@extends('frontend.layouts.app')
@php
$meta_page_type='pregnancyPostpartum';
@endphp

@section('content')
    <div class="sub-banner-section postpartum-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                 <div>
                                <h1 data-aos="fade-up">Pregnancy and Postpartum</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p data-aos="fade-right">Pregnancy and postpartum are life-changing experiences full
                                            of joys and hardships. Prioritizing physical and emotional wellness during these
                                            times ensures a healthy, positive mother-baby experience. Omansh's
                                            compassionate, competent treatment helps maternal health and recovery.</p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                    class="sub_home_span"><a>Services
                                    </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                    class="sub_span pe-2"><a href="/services/womenhealth">Women Health</a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                    class="sub_span"><a>Pregnancy & Postpartum

                                    </a></span>
                                </div> </div>
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
                        <figure class="mb-0"><img src="{{ asset('img/services/women/Care-essential.webp') }}"
                                alt="Care-essential" class="img-fluid">
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

                        <h2>Why Pregnancy & Postpartum Care is Essential</h2>
                        <p class="margin_bottom">Mothers' bodies, minds, and health change during pregnancy and <a href="https://omansh.org/blog/9/healthy-natural-childbirth-10-simple-strategies-and-tips" style="text-decoration: none; color: inherit;" target="_blank" rel="noopener noreferrer">childbirth</a>.
                            Back pain and swelling are common throughout pregnancy. Hormonal changes, anticipation, and life
                            changes associated with parenthood can also cause emotional effects. Getting ready for
                            childbirth and promoting a healthy recovery can help new mothers. Specialist care handles these
                            distinct issues, from physical discomfort to mental changes, making the experience smoother and
                            healthier.
                        </p>
                        <div class="btn_wrapper mt-3">
                                <a target="_blank" href="https://omansh.org/document/Omansh_C_Section_Recovery_Plan.pdf"
                                    class="text-decoration-none get_started_btn">1-Week C-Section Recovery Plan</a>
                            </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Pregnancy Care Services -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Pregnancy Care Services</h2>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/women/Prenatal-support.webp') }}" alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Prenatal Support</h3>
                            <p class="margin_bottom"> Proper prenatal care reduces pregnancy pain and prepares for
                                childbirth.</p>

                            <ul>
                                <li><b>Prenatal Exercises:</b> Omansh offers healthy stretching, strengthening, and mobility
                                    programs during each trimester. These regulated movements increase flexibility and
                                    reduce pain.
                                </li>
                                <li> <b>Prenatal Physiotherapy:</b> This helps pregnant women manage back pain, pelvic pain,
                                    and oedema, keeping them active and comfortable.</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/women/Nutritional-guidance.webp') }}" alt="Nutritional-guidance">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Nutritional Guidance</h3>

                            <ul>
                                <li>Mother and newborn health depend on a balanced diet. Omansh provides nutritional advice
                                    to satisfy expecting moms' needs.
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/women/Supporting-Mental-Health.webp') }}" alt="Supporting-Mental-Health">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Supporting Mental Health </h3>

                            <ul>
                                <li>Pregnancy causes tension and worry. Omansh offers breathing exercises and relaxation
                                    activities to help women stay emotionally healthy during this important time.
                                    <br><br>
                                    Omansh offers empathetic assistance for pregnant women in specialized programs that meet
                                    their requirements.

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
    <!-- Postpartum Care Services -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Postpartum Care Services</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="margin_bottom text-center">Recovery and adaptability occur after childbirth. <a href="https://omansh.org/blog/8/top-postpartum-mistakes-to-avoid-essential-tips-for-a-healthy-recovery" style="text-decoration: none; color: inherit;" target="_blank" rel="noopener noreferrer"><b>Postpartum
                            care service</b></a> in
                        Omansh helps new mothers recover, manage physical changes, and feel better.</b>
                </div>
            </div>

            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/women/Physical-Recovery.webp') }}" alt="Physical-Recovery">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm">Physical Recovery</h3>


                            <ul>
                                <li><a href="https://omansh.org/blog/14/pelvic-floor-rehabilitation" style="text-decoration: none; color: inherit;" target="_blank" rel="noopener noreferrer"><b>Pelvic Floor Rehabilitation:</b></a> These exercises strengthen and stabilize the pelvic
                                    floor muscles after pregnancy and childbirth.
                                </li>
                                <li> <b> Core Strengthening:</b> For women to rebuild strength without harm, core
                                    rehabilitation
                                    must be safe.
                                </li>
                                <li> <b> Scar Management (C-section):</b> Gentle therapies reduce scar tissue and enhance
                                    mobility.

                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/women/Emotional-Health.webp') }}" alt="bowel">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Support for Mental and Emotional Health</h3>

                            <ul>
                                <li>Emotional adjustment after childbirth is difficult. To support moms intellectually and
                                    emotionally, Omansh helps manage mood fluctuations, anxiety, and postpartum depression.

                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/women/Supporting-Lactation.webp') }}" alt="Supporting Lactation">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> Supporting Lactation </h3>

                            <ul>
                                <li>New mothers may struggle with <a href="https://omansh.org/blog/4/top-10-breastfeeding-mistakes-new-mothers-should-avoid" style="text-decoration: none; color: inherit;" target="_blank" rel="noopener noreferrer">breastfeeding</a>. Omansh provides lactation support to help
                                    mothers feel confident and comfortable breastfeeding.

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
                        <figure class="mb-0"><img src="{{ asset('img/services/women/Common-Conditions-Treated.webp') }}"
                                alt="Common Conditions Treated" class="img-fluid">
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

                        <h2>Common Conditions Treated</h2>
                        <ul>
                            <li><b>Back and Joint Pain:</b> Effective treatments for typical pain sites can improve comfort.
                            </li>
                            <li> <b>Pelvic Pain and Instability:</b> Specialised care for stability and pain management helps
                                    mothers recover safely.
                            </li>
                            <li> <b> Postpartum Anxiety and Depression:</b> Professional support for emotional well-being,
                                    supporting women with postpartum depression and anxiety.</li>
                            <li> <b> Diastasis Recti: </b>Omansh can help in cases with diastasis recti, where abdominal muscles
                                    split during pregnancy, with focused exercises and therapies.</li>
                        </ul>


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

                        <h2>Personalized Care Plans</h2>
                        <p class="margin_bottom">Omansh knows every mother's path is different. The team customizes care plans for each client based on her needs, goals, and preferences. Omansh empowers moms during <a href="https://omansh.org/blog/3/exercise-and-physical-activity-for-pregnant-women-enhancing-health-and-well-being" style="text-decoration: none; color: inherit;" target="_blank" rel="noopener noreferrer">pregnancy</a> and postpartum recovery by addressing physical, mental, and emotional wellness holistically.
                        </b>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/women/Personalized-Care-Plans.webp') }}"
                                alt="Personalized Care Plans" class="img-fluid">
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
                                    1. When should I begin prenatal care?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Prenatal care should start as soon as possible, usually following confirmation, to ensure constant support and monitoring throughout each trimester.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. How soon may I start postpartum care?

                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Postpartum care often starts from days after childbirth, and commonly begins with gentle rehabilitation activities within days. Should always consult your doctor for personalized advice.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What to expect throughout a session?

                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> For safe and effective treatment, sessions include examinations, personalized advice, and exercises customized to your pregnancy or postpartum recovery.
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
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "When should I begin prenatal care?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Prenatal care should start as soon as possible, usually following confirmation, to ensure constant support and monitoring throughout each trimester."
    }
  },{
    "@type": "Question",
    "name": "How soon may I start postpartum care?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Postpartum care often starts from days after childbirth, and commonly begins with gentle rehabilitation activities within days. Should always consult your doctor for personalized advice."
    }
  },{
    "@type": "Question",
    "name": "What to expect throughout a session?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "For safe and effective treatment, sessions include examinations, personalized advice, and exercises customized to your pregnancy or postpartum recovery."
    }
  }]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://omansh.org/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Services",
    "item": "https://omansh.org/services"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "Women Health",
    "item": "https://omansh.org/services/womenhealth"
  },{
    "@type": "ListItem",
    "position": 4,
    "name": "Pregnancy and Postpartum",
    "item": "https://omansh.org/services/womenhealth/pregnancy-and-postpartum"
  }]
}
</script>
@endsection
