@extends('frontend.layouts.app')

@section('content')
    <div class="sub-banner-section pregnancy-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                 <div>
                                <h1 >Pregnancy Yoga</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p class="pb-0" >Pregnancy is wonderful and transforming, but
                                            it also presents physical and mental obstacles. Gentle exercises, breathing, and
                                            mindfulness practices make pregnancy yoga a holistic approach to wellness. Yoga
                                            sessions for pregnant women in Ghaziabad encourage them throughout the
                                            pregnancy.</p>

                                        <p class="pt-0">We tailor our Ghaziabad pregnant yoga courses to your physical and
                                            mental needs, providing safe, effective exercises to stay healthy, reduce
                                            stress, and prepare for childbirth.
                                        </p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span pe-2"><a href="/services/yoga">Yoga</a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"><a>Pregnancy Yoga
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

    {{-- Introduction to Corporate Yoga --}}
    <section class="aboutpage_aboutus_section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Pregnancy-yoga.webp') }}"
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
                        <h2>Introduction to Pregnancy Yoga
                        </h2>
                        <p>Pregnancy yoga tailors traditional yoga to pregnant women. It boosts flexibility, strength, and
                            mental clarity while relieving pregnancy symptoms. Pregnancy yoga encourages physical fitness
                            and mental balance via gentle movements and deep breathing.

                        </p>
                        <p>Our Ghaziabad prenatal yoga courses help pregnant mothers through this unique and transforming
                            moment. We can help you find pregnancy yoga classes near me. </p>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Benefits of Pregnancy Yoga    --}}
    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Benefits of Pregnancy Yoga</h2>
                        <p class="pt-2">Pregnancy yoga improves physical and mental health:</p>
                        <ul class="ps-5">
                            <li>
                                <h3> Relaxation and Lower Stress:</h3> Yoga for pregnant women reduces stress, making
                                pregnancy more tranquil and balanced. Our workshops encourage relaxation and mindfulness to
                                connect with your body and baby.
                            </li>
                            <li>
                                <h3> Better Flexibility and Posture:</h3>Pregnancy yoga maintains hip, lower back, and
                                shoulder flexibility as the baby grows. It also improves posture, easing pregnancy-related
                                tension.
                            </li>
                            <li>
                                <h3>Better Sleep and Pain Relief:</h3>Yoga relieves pregnant symptoms like oedema, back
                                pain, and nausea. Additionally, it can increase sleep quality, helping you rest during this
                                crucial time.
                            </li>
                            <li>
                                <h3> Labour Preparation: </h3> Breathing and relaxation techniques from pregnancy yoga can
                                aid during labour. These tools aid in delivering focus and calmness.


                                We tailor our pregnant yoga courses in Ghaziabad to these benefits and accompany you
                                throughout your pregnancy.
                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Pregnancy-yoga-benefits.webp') }}"
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
    <!-- Tailored Corporate Yoga Programs
                                                                                     -->
    <section class="aboutpage_aboutus_section  blog_posts_section pt-3">
        <div class="container">
            <h2 class="text-center">Customized Yoga Practices for Each Trimester</h2>
            <p class="pt-2 text-center">As your body changes throughout pregnancy, so should your yoga practice. We
                personalize Ghaziabad pregnant yoga classes to your needs at each trimester.

            </p>
            <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
                <div class="col-md-4 mt-4">
                    <div class="card health-card border-0">
                        <img src="{{ asset('img/services/yoga/First-trimester.webp') }}" alt="Prenatal-support">
                        <div class="card-content">
                            <h3 class="fs-4 lh-sm"> First trimester:
                            </h3>
                            <ul>
                                <li>Gentle stretches relieve nausea, exhaustion, and circulation in the first trimester.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/Second-trimester.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm"> Second Trimester:</h3>
                            <ul>
                                <li>Strength-building poses, stretching, and workouts support muscle and joint growth in the
                                    second trimester.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card health-card  border-0">
                        <img src="{{ asset('img/services/yoga/Third-trimester.webp') }}"
                            alt="Nutritional-guidance">
                        <div class="card-content">

                            <h3 class="fs-4 lh-sm">Third Trimester: </h3>
                            <ul>
                                <li>Labor-preparation poses, deep breathing, and relaxation.
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

        </div>
    </section>

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">
                        <h2>Safety Guidelines
                        </h2>
                        <p>To provide a safe and effective pregnancy practice, our Ghaziabad prenatal yoga is developed for
                            these periods. Our first priority is safety. Certified instructors make sure pregnancy yoga
                            positions are safe and comfortable. Every class is individualized, with poses adjusted to avoid
                            strain or injury.</p>
                        <p>
                            We assist beginners and experts through each yoga practice to ensure you're doing what's best
                            for you and your kid. Our Ghaziabad pregnant yoga studio prioritizes comfort and safety.

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2>Additional Services</h2>
                        <p class="pt-2">We provide complimentary pregnant wellness programs in addition to pregnancy yoga
                            classes:
                        </p>
                        <ul class="ps-5">
                            <li>
                                <h3>Postpartum Yoga</h3> After childbirth, start your rehabilitation with postpartum yoga to
                                restore energy, flexibility, and strength.
                            </li>
                            <li>
                                <h3> Nutrition & Wellness programs:</h3>Stay healthy during pregnancy with our customized
                                diet and wellness regimens for both mother and baby.

                            </li>
                            <li>
                                <h3> Medical & relaxation Classes: </h3>Improve mental health with guided meditation and
                                relaxation classes that help you stay calm and focused.

                            </li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Pregnancy-yoga-program.webp') }}"
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
    {{-- Join Our Ghaziabad Pregnancy Yoga Classes Today! --}}

    <section class="aboutpage_aboutus_section   pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img
                                src="{{ asset('img/services/yoga/Pregnancy-yoga-classes-in-ghaziabad.webp') }}"
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

                        <h2>Join Our Ghaziabad Pregnancy Yoga Classes Today!</h2>
                        <p class="pt-2">Our prenatal yoga courses in Ghaziabad offer the greatest yoga for pregnant women
                            because they're customized to your needs. Yoga benefits your body and mind during pregnancy,
                            keeping you healthy, peaceful, and ready for your baby.</p>
                    </div>
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
                                    1. When should you start pregnancy yoga?</button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> If you're healthy and comfortable, you can start pregnancy yoga in your first
                                        trimester. Be sure to consult your doctor beforehand.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Which yoga is best in pregnancy?</button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Gentle, restorative yoga is best for pregnancy. Breathing, stretching, and
                                        muscle-building poses without overexertion are best.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Is yoga ok in early pregnancy?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yoga is safe in early pregnancy if you avoid difficult positions and focus on soft
                                        movements. Always see a doctor and listen to your body.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Which month is best for yoga in pregnancy?

                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yoga helps throughout pregnancy. However, the second trimester is frequently the best
                                        time to start a regular practice due to increased energy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Does yoga help in normal delivery?


                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yoga helps prepare your body and mind for labour. Relaxation and breathing techniques can reduce pain and help you focus during birth.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6. What yoga to avoid in the first trimester?

                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Avoid resting on your back, severe twists, and inverted poses. Practice mild stretching and breathing.
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
