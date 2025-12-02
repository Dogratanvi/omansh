@extends('frontend.layouts.app')
@php
$meta_page_type='bladderDysfunction';
@endphp

@section('content')
    <div class="sub-banner-section bladder-banner women-service-text">
        <div class="image-overlay">
            <!-- SUB BANNER SECTION -->
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="banner-section-content service-banner-text">
                                 <div>
                                <h1>Bladder Dysfunction</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        {{-- <p >Guided exercise programs and Pilates improve health,
                                            discomfort, and flexibility, according to Omansh. We use these successful
                                            movement therapies to create customized wellness programs to assist people reach
                                            their health goals. Omansh helps individuals at any fitness level improve their
                                            physical and emotional health via exercise and Pilates with safe, effective, and
                                            personalized movement therapies.
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                        class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Services
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span pe-2"><a href="/services/womenhealth">Women Health</a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"><a>Bladder Dysfunction</a></span>
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
            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <p class="" > <a href="/blog/13/what-is-urinary-incontinence-types-causes-and-symptoms"> Urinary incontinence,</a> or bladder dysfunction, is common and
                            can impact daily life. Due to stigma and embarrassment, it is rarely mentioned despite its
                            prevalence. If the bladder can't contain urine, it leaks unintentionally. It can affect men and
                            women at any age, but older folks are more susceptible.
                        <p class="" >Pregnancy, delivery, and menopause all cause bladder
                            problems in women. Menopause hormones decrease pelvic muscles and bladder control. Men may have
                            bladder troubles due to prostate disorders or surgery.

                        </p>
                        <p class="" >Bladder dysfunction affects physical and mental health. Due
                            to unanticipated leaking, people may avoid social situations, feel embarrassed, or experience
                            anxiety. In severe circumstances, it might diminish self-esteem and independence.

                        </p>
                        <p class="" >Be aware that bladder trouble is curable. There are numerous
                            ways to treat or remove symptoms. <a href="https://omansh.org/blog/21/pelvic-floor-exercise">Pelvic floor exercises</a> strengthen urination muscles, dietary
                            adjustments reduce bladder irritants, and behavioral therapy retrain the bladder. Healthcare
                            professionals may recommend drugs or surgery in severe cases.

                        </p>
                        <p class="" >Understanding bladder dysfunction and receiving treatment
                            early helps. With the appropriate treatment, patients can regain bladder control and live a
                            better life without incontinence worries.

                        </p>


                    </div>
                </div>
            </div>


        </div>
    </section>



    <!-- Our Approach to Pelvic floor Pain Care -->
    <section class="aboutpage_aboutus_section   pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/women/bladderdysfunction.webp') }}"
                                alt="bladderdysfunction" class="img-fluid">
                        </figure>

                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="aboutus_top_shape" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="aboutus_bottom_shape" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">


                        <h2 class="pb-3">Bladder Dysfunction Types </h2>
                        <p class="" >Bladder dysfunction is varied. Successful bladder
                            dysfunction treatment requires understanding these types. Common categories are:</p>
                        <ul>
                            <li><b>Functional bladder dysfunction: </b>Mental or physical concerns delay toilet use.</li>
                            <li> <b>Overactive Bladder: </b>Urinating frequently and strongly.
                            </li>
                            <li> <b> Overflow bladder dysfunction: </b>Full bladder leaks small urine. </li>
                            <li> <b> Stress: </b>Stress and stomach strain from coughing, sneezing, and laughing create
                                incontinence. </li>
                            <li> <b> Malfunction: </b>Urinary infections, illnesses, and medication changes cause
                                temporary malfunction.</li>
                            <li> <b> Urge Incontinence: </b>Urinating strongly at night.
                            </li>

                        </ul>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="pt-5 pb-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">

                        <h2 class="pb-3">Bladder Dysfunction Symptom
                        </h2>
                        <p>Early bladder dysfunction diagnosis and treatment can help. Some common Bladder Dysfunction
                            symptoms are: </p>
                        <ul>
                            <li>Urinating more, especially waking up more than twice a night.</li>
                            <li> <b> Urine leakage: </b>Especially after exercise or quick movements.</li>
                            <li> <b>Painful Urination: </b>Burns or stings may suggest a problem.</li>
                            <li> <b>Urine Blood: </b>Haematuria poses risks.</li>
                            <li> <b>Difficulty Emptying the Bladder: </b>Full bladder after peeing.</li>
                        </ul>


                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="servicepage_aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('img/services/women/bladderdysfunction_2.webp') }}"
                                alt="bladderdysfunction_2" class="img-fluid">
                        </figure>

                    </div>
                 
                </div>
            </div>


        </div>
    </section>

    <section class="aboutpage_aboutus_section  pt-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center " >
                    <div class="service_page_aboutus_content">
                        <h2 class="pb-3">Bladder Dysfunction Treatment </h2>
                        <p class="" >Several treatments can fix bladder dysfunction. The
                            Bladder Dysfunction treatments are:

                        <ul>
                            <li><b>Lifestyle changes: </b>Restrict fluid intake at specific times, increase fiber intake,
                                maintain weight health, quit smoking, and avoid bladder-irritating foods.
                            </li>
                            <li> <b>Exercise: </b>Kegels strengthen the pelvic floor and sphincter, improving bladder
                                control.

                            </li>
                            <li> <b> Bladder Dysfunction Treatment: </b>Anticholinergics quiet bladder muscles and are
                                recommended for hyperactive bladder.
                            </li>
                            <li> <b> Bladder Training: </b>Delaying urinating prolongs pauses.</li>
                            <li> <b> Electrical Stimulation: </b>Damaged neurons are activated by electrostimulation,
                                improving bladder muscle control.
                            </li>
                            <li> <b> Surgery: </b>Repairing bladder function muscles or nerves may require surgery. </li>
                            <li> <b> Alternative therapy: </b>Acupuncture fixes bladder issues.
                            </li>
                            <li> <b> Botox Injection: </b>Cystoscopy-injection Botox treats hyperactive bladder. </li>
                            <li> <b> Antibiotics: </b>They quickly treat UTIs and bladder dysfunction.
                            </li>

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
                                    1. Is bladder dysfunction curable?



                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, bladder dysfunction can be treated or cured with exercises, drugs, or surgery.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What are Bladder problems signs?


                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Frequent, painful, bloody, and difficult bladder emptying are symptoms.




                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="collapsed accordion-button p-3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. How do I detect bladder weakness?



                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A weak bladder causes pee leaks during activities and a feeling of being full.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="collapsed accordion-button p-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. How to check bladder health?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Check for pain, frequent urination, and trouble emptying. See a doctor if problems
                                        emerge.
                                    </p>

                                    <p> Some bladder dysfunction types include vaginal childbirth, aging, weight increase,
                                        pelvic organ prolapse, chronic constipation, and others. Consult a specialist if you
                                        have these Bladder Dysfunction symptoms.</p>
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
    "name": "Is bladder dysfunction curable?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, bladder dysfunction can be treated or cured with exercises, drugs, or surgery."
    }
  },{
    "@type": "Question",
    "name": "What are Bladder problems signs?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Frequent, painful, bloody, and difficult bladder emptying are symptoms."
    }
  },{
    "@type": "Question",
    "name": "How do I detect bladder weakness?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A weak bladder causes pee leaks during activities and a feeling of being full."
    }
  },{
    "@type": "Question",
    "name": "How to check bladder health?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Check for pain, frequent urination, and trouble emptying. See a doctor if problems emerge.
Some bladder dysfunction types include vaginal childbirth, aging, weight increase, pelvic organ prolapse, chronic constipation, and others. Consult a specialist if you have these Bladder Dysfunction symptoms."
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
    "name": "Services",
    "item": "https://omansh.org/services"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Women Health",
    "item": "https://omansh.org/services/womenhealth"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "Bladder Dysfunction",
    "item": "https://omansh.org/services/womenhealth/bladder-dysfunction"
  }]
}
</script>
@endsection
