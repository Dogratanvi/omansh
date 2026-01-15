<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type='image/x-icon'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">



    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- StyleSheet link CSS -->

    <!-- Google Fonts link for Poppins and Mulish -->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Shortcut Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.css" rel="stylesheet">

    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/special-classes.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/booking.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/gallary.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webinar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/mediaqueries.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/service.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/rehab.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/author.css') }}" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/css/intlTelInput.css">
    <!-- CSRF Token -->
   
    <!-- Google tag (gtag.js) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HealthClub",
        "name": "Omansh Health Fitness",
        "image": "https://omansh.org/img/logo.png",
        "@id": "https://omansh.org/",
        "url": "https://omansh.org/",
        "telephone": "+918384019745",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Shop NO- 290, Basement Shop, 1, opposite Ramprastha Green Road, Sector 4, Vaishali, Ghaziabad, Uttar Pradesh",
            "addressLocality": "Ghaziabad",
            "postalCode": "201010",
            "addressCountry": "IN"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ],
            "opens": "06:00",
            "closes": "21:00"
        },
        "sameAs": [
            "https://www.facebook.com/profile.php?id=100064050489036",
            "https://www.instagram.com/omansh_health_fitness/",
            "https://www.linkedin.com/company/omansh/",
            "https://www.youtube.com/@drgarimabiswas6613"
        ]
    }
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9VT5D5K2V4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-9VT5D5K2V4');
    </script>

    @php
    $pageTitle = config('meta.' . ( $meta_page_type ?? '') . '.title');
    $pageDescription = config('meta.' . ( $meta_page_type ?? '') . '.description');
    $url = url()->current();
    @endphp

    @if ($url == 'https://omansh.org')

    <title>OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga</title>
    <meta name="url" content="https://www.omansh.org" />
    <meta name="title" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Specialized women's health services, physiotherapy, & rejuvenating yoga sessions at Omansh Health & Fitness." />

    <meta property="og:url" content="https://www.omansh.org" />
    <meta property="og:title" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta property="og:site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta property="og:description"
        content="Specialized women's health services, physiotherapy, & rejuvenating yoga sessions at Omansh Health & Fitness." />
    <meta property="og:image" content="https://omansh.org/img/logo.png" />

    @elseif($url == "https://omansh.org/about")
    <title>OMANSH | Elevating Lives with Holistic Health Solutions</title>
    <meta name="url" content="https://omansh.org/about" />
    <meta name="title" content="OMANSH | Elevating Lives with Holistic Health Solutions" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Experience personalized physiotherapy, yoga, and women's health care at OMANSH, founded by Dr. Garima Biswas, guiding individuals to vitality and happiness" />
    @elseif($url == "https://omansh.org/services/womenhealth")
    <title>Empowering Women's Health | Omansh</title>
    <meta name="url" content="https://omansh.org/services/womenhealth" />
    <meta name="title" content="Empowering Women's Health | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Comprehensive women's health services including treatment for bladder dysfunctions, bowel issues, pelvic pain, pregnancy, and postpartum care at Omansh" />
    @elseif($url == "https://omansh.org/services/physiotherapy")
    <title>Physiotherapy Services at Omansh Health & Fitness</title>
    <meta name="url" content="https://omansh.org/services/physiotherapy" />
    <meta name="title" content="Physiotherapy Services at Omansh Health & Fitness" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Discover a range of specialized physiotherapy services orthopedic, neuro, sports, geriatric, and pediatric physiotherapy at Omansh Health & Fitness." />
    @elseif($url == "https://omansh.org/services/yoga")
    <title>Yoga Training in Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/yoga" />
    <meta name="title" content="Yoga Training in Ghaziabad | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Improve flexibility, strength, and mindfulness with expert-led yoga training Ghaziabad. Suitable for all levels, our sessions promote overall well-being and balance" />
    @elseif($url == "https://omansh.org/workshop/yoga-teacher-training")
    <title>Transform Your Life with Yoga Training | Omansh</title>
    <meta name="url" content="https://omansh.org/workshop/yoga-teacher-training" />
    <meta name="title" content="Transform Your Life with Yoga Training | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="A journey of self-discovery and personal transformation with Omansh's yoga training. Transform your life and unlock full potential with yoga training program" />
    @elseif($url == "https://omansh.org/services/yoga/corporate-yoga")
    <title>Corporate Yoga Traning for Employee Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/yoga/corporate-yoga" />
    <meta name="title" content="Corporate Yoga Traning for Employee Ghaziabad  | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Boost workplace wellness with Corporate Yoga Training in Ghaziabad . Reduce stress, enhance productivity, and improve employee well-being with expert-led sessions" />
    @elseif($url == "https://omansh.org/services/yoga/pregnancy-yoga")
    <title>Pregnancy Yoga Traning for Women Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/yoga/pregnancy-yoga" />
    <meta name="title" content="Pregnancy Yoga Traning  for Women Ghaziabad | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Learn safe and effective techniques with Pregnancy Yoga Training in  Ghaziabad. Support maternal health, reduce stress, and prepare for childbirth with expert guidance" />

    @elseif($url == "https://omansh.org/services/yoga/medical-yoga")
    <title>Medical Yoga Training Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/yoga/medical-yoga" />
    <meta name="title" content="Medical Yoga Training Ghaziabad | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Enhance healing with Medical Yoga Training in Ghaziabad. Learn therapeutic techniques to improve mobility, manage pain, and promote overall well-being safely" />

    @elseif($url == "https://omansh.org/services/yoga/general-yoga-and-pilates")
    <title>General Yoga & Pilates Training Ghaziabad | Omansh</title>
    <meta name="url" content=https://omansh.org/services/yoga/general-yoga-and-pilates" />
    <meta name="title" content="General Yoga & Pilates Training Ghaziabad | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Improve strength, flexibility, and mindfulness with General Yoga & Pilates Training in Ghaziabad. Suitable for all levels, promoting overall health and well-being." />

    @elseif($url == "https://omansh.org/services/yoga/aerial-yoga")
    <title>Aerial Yoga Training Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/yoga/aerial-yoga" />
    <meta name="title" content="Aerial Yoga Training Ghaziabad | Omansh" />
    <meta name="site_name" content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga" />
    <meta name="description"
        content="Master the art of Aerial Yoga with expert training in Ghaziabad. Build strength, flexibility, and balance while enjoying the benefits of suspended yoga practice" />
    @elseif($url == 'https://omansh.org/workshop/antenatal-and-postnatal-physiotherapy')
    <title>Antenatal & Postnatal Physiotherapy Workshop | Omansh</title>
    <meta name="url" content="https://omansh.org/workshop/antenatal-and-postnatal-physiotherapy" />
    <meta name="title" content="Antenatal & Postnatal Physiotherapy Workshop | Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Join the antenatal & postnatal physiotherapy workshop by Omansh Physiotherapy & Yoga Center in Vaishali, Ghaziabad, for parents, professionals & hospitals" />
    @elseif($url == 'https://omansh.org/workshop/corporatesessions')
    <title>Empower Your Team with Corporate Yoga Training | Omansh</title>
    <meta name="url" content="https://omansh.org/workshop/corporatesessions" />
    <meta name="title" content="Empower Your Team with Corporate Yoga Training | Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Transform your workplace with Omansh's corporate yoga training program, designed to empower your team with stress reduction techniques, improved physical health" />
    @elseif($url == "https://omansh.org/services/womenhealth/bladder-dysfunction")
    <title>Women Bladder Dysfunction Treatment Services | Omansh</title>
    <meta name="url" content="https://omansh.org/services/womenhealth/bladder-dysfunction" />
    <meta name="title" content="Women  Bladder Dysfunction Treatment Services | Omansh" />
    <meta name="keywords"
        content="Bladder Dysfunction, bladder dysfunction types, bladder dysfunction symptoms, bladder dysfunction treatment, women's bladder health, urinary incontinence, overactive bladder, urinary retention, pelvic floor therapy" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Expert treatment for women's bladder dysfunction with personalized care to relieve symptoms,  types, and treatment to improve bladder control" />
    @elseif($url == "https://omansh.org/services/womenhealth/bowel-issues-and-prolapse")
    <title>Female Bowel Issues and Prolapse Treatment Services | Omansh</title>
    <meta name="url" content="https://omansh.org/services/womenhealth/bladder-dysfunction" />
    <meta name="title" content="Female Bowel Issues and Prolapse Treatment Services | Omansh" />
    <meta name="keywords"
        content="female bowel Issues and prolapse, female prolapsed bowel, female prolapsed bowel symptoms, female prolapsed bowel treatment, prolapsed bowel exercises, female prolapsed bowel pictures, enterocele prolapse" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Learn about female bowel issues and prolapse (enterocele), including causes, symptoms, and effective treatment options and exercise pictures for relief." />
    @elseif($url == "https://omansh.org/services/womenhealth/pelvic-floor-dysfunctions")
    <title>Women Pelvic Floor Dysfunction Treatment Services | Omansh</title>
    <meta name="url" content="https://omansh.org/services/womenhealth/bladder-dysfunction" />
    <meta name="title" content="Women Pelvic Floor Dysfunction Treatment Services | Omansh" />
    <meta name="keywords" content="pelvic floor,bladder dysfuction" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Understand pelvic floor dysfunctions, their causes, types, symptoms, and treatment options to manage discomfort and improve daily life." />
    @elseif($url == "https://omansh.org/services/womenhealth/pregnancy-and-postpartum")
    <title>Pregnancy and Postpartum Care Services | Omansh</title>
    <meta name="url" content="https://omansh.org/services/womenhealth/pregnancy-and-postpartum" />
    <meta name="title" content="Pregnancy and Postpartum Care Services | Omansh" />
    <meta name="keywords" content="pregnancy,postpartum" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="We expert care for pregnancy and postpartum health. We offer tailored solutions for a smooth journey, including fitness, recovery, and emotional support." />
    @elseif($url =="https://omansh.org/services/womenhealth/exercise-programs-and-pilates")
    <title>Exercise Programs & Pilates | Strength and Wellness | Omansh</title>
    <meta name="url" content="https://omansh.org/services/womenhealth/exercise-programs-and-pilates" />
    <meta name="title" content="Exercise Programs & Pilates | Strength and Wellness | Omansh" />
    <meta name="keywords" content="exercise,program,pilates" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Enhance your strength and flexibility with tailored exercise programs and Pilates. Achieve fitness goals with expert guidance and safe, effective routines." />
    @elseif($url == "https://omansh.org/events/upcoming")
    <title>Transform Your Body and Mind | Join Omansh Fitness Events</title>
    <meta name="url" content="https://omansh.org/events/upcoming" />
    <meta name="title" content="Transform Your Body and Mind | Join Omansh Fitness Events" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Embark on a transformative journey with Omansh health and fitness events. Explore holistic wellness practices that nourish both body and mind." />
    @elseif($url == "https://omansh.org/events/past")
    <title>Recap of Omansh's Past Health and Fitness Events</title>
    <meta name="url" content="https://omansh.org/events/past" />
    <meta name="title" content="Recap of Omansh's Past Health and Fitness Events" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Relive the inspiring moments from Omansh's previous health and fitness events. Explore the enriching workshops, workouts, and holistic wellness practices." />
    @elseif($url == "https://omansh.org/contact")
    <title>Contact Us for Your Health Needs | Omansh</title>
    <meta name="url" content="https://omansh.org/contact" />
    <meta name="title" content="Contact Us for Your Health Needs | Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Your health is our priority. Reach out to us without hesitation for any inquiries or assistance. Our dedicated team is here to support you on journey to wellness" />
    @elseif($url == "https://omansh.org/services/orthopedic-physiotheraphy")
    <title>Orthopedic Physiotherapy Services in Ghaziabad - Omansh</title>
    <meta name="url" content="https://omansh.org/services/orthopedic-physiotheraphy" />
    <meta name="title" content="Orthopedic Physiotherapy Services in Ghaziabad - Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="keywords"
        content="orthopedic physiotherapy,orthopedic physical therapy services,orthopedic physical therapy services in Ghaziabad, Types of orthopedic physical therapy, orthopedic physiotherapy conditions" />
    <meta name="description"
        content="Explore expert orthopedic physiotherapy services in Ghaziabad. Treat various conditions with personalized care. Learn about types of orthopedic physical therapy" />
    @elseif($url == "https://omansh.org/services/neuro-physiotherapy")
    <title>Neuro Physiotherapy Services in Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/neuro-physiotherapy" />
    <meta name="title" content="Neuro Physiotherapy Services in Ghaziabad | Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Expert neuro physiotherapy services in Ghaziabad. Specialized rehabilitation programs, types of neuro therapies, and advanced care for neurological recovery" />
    <meta name="keywords"
        content="neuro physiotherapy,neuro physiotherapy Services in Ghaziabad,Types of neuro physiotherapy, neuro physiotherapy rehabilitation" />
    @elseif($url == "https://omansh.org/services/sport-physiotherapy")
    <title>Sports physiotherapy Services in Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/sport-physiotherapy" />
    <meta name="title" content="Sports physiotherapy Services in Ghaziabad | Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Get expert sports physiotherapy services in Ghaziabad for injury recovery, pain relief, and performance enhancement. Personalized care for athletes of all levels." />
    <meta name="keywords" content="sport physiotherapy,
Sport physiotherapy Services,
sport physiotherapy Ghaziabad,
" />
    @elseif($url == "https://omansh.org/services/geriatric-physiotherapy")
    <title>Geriatric Physiotherapy Services in Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/geriatric-physiotherapy" />
    <meta name="title" content="Geriatric Physiotherapy Services in Ghaziabad | Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Specialized Geriatric Physiotherapy in Ghaziabad to help seniors manage chronic pain, improve mobility, and lead independent lives. Book your consultation today" />
    <meta name="keywords" content="Geriatric Physiotherapy,
Geriatric Physiotherapy Services in Ghaziabad,
Geriatric Physiotherapy rehabilitation,
" />
    @elseif($url == "https://omansh.org/services/pediatric-physiotherapy")
    <title>Pediatric Physiotherapy Services in Ghaziabad | Omansh</title>
    <meta name="url" content="https://omansh.org/services/pediatric-physiotherapy" />
    <meta name="title" content="Pediatric Physiotherapy Services in Ghaziabad | Omansh" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Expert Pediatric Physiotherapy Services in Ghaziabad for children. Improve mobility, manage conditions, and boost development with personalized care plans" />
    <meta name="keywords" content="pediatric physiotherapy,
pediatric physiotherapy Services in Ghaziabad
" />

    @elseif($url == "https://omansh.org/blog")
    <title>Latest Blog | Wellness During Pregnancy | Yoga and Fitness</title>
    <meta name="url" content="https://omansh.org/blog" />
    <meta name="title" content="Latest Blog | Wellness During Pregnancy | Yoga and Fitness" />
    <meta name="site_name"
        content="OMANSH Health & Fitness - Women's Health, Physiotherapy, Yogpregnancy-and-postpartuma" />
    <meta name="description"
        content="Dive into our latest blog, where we explore yoga, fitness, and best pregnancy wellness. Gain expert insights and valuable tips to enrich your journey." />
    @endif



    <!--Local Schema-->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HealthClub",
        "name": "Omansh",
        "image": "",
        "@id": "",
        "url": "https://www.omansh.org/",
        "telephone": "+9185270 45759",
        "priceRange": "INR",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Plot No-290, Gate No.1 Sector-4, Vaishali (Landmark: In front of Ramprastha Green)",
            "addressLocality": "Ghaziabad",
            "postalCode": "201019",
            "addressCountry": "IN"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Tuesday"
            ],
            "opens": "06:00",
            "closes": "21:00"
        },
        "sameAs": [
            "https://www.facebook.com/profile.php?id=100064050489036",
            "https://www.instagram.com/omansh_health_fitness/",
            "https://www.youtube.com/@drgarimabiswas6613",
            "https://www.linkedin.com/company/omansh/"
        ]
    }
    </script>

</head>


<body>

    @if (request()->is('webinar'))
    <!-- No header for the webinar page -->
    @else
    @include('frontend.includes.header')
    @endif
    <main>
        @yield('content')
    </main>

    @if (request()->is('webinar'))
    <!-- No header for the webinar page -->
    @else
    @include('frontend.includes.footer')
    @endif

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>

<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/video-popup.js') }}"></script>
<script src="{{ asset('js/close.js') }}"></script>


<!-- Add jQuery (required for Slick Slider) -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Include Bootstrap 5 Datepicker JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('js/video-section.js') }}"></script>
<script src="{{ asset('js/animation.js') }}"></script>
<script src="https://unpkg.com/ityped@0.0.10"></script>
<script src="{{ asset('js/thumb.js') }}"></script>
<script src="{{ asset('js/top.js') }}"></script>
<script src="{{ asset('js/pages.js') }}"></script>
<script src="{{ asset('js/webinar.js') }}"></script>
<script src="{{ asset('js/type.js') }}"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('contactPage');
    form.addEventListener('submit', function() {
        // Save the current scroll position
        sessionStorage.setItem('scrollPosition', window.scrollY);
    });

    // Check if there's a stored scroll position and scroll to it
    var scrollPosition = sessionStorage.getItem('scrollPosition');
    if (scrollPosition) {
        window.scrollTo(0, scrollPosition);
        sessionStorage.removeItem('scrollPosition'); // Clear the stored position
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('newsletter_form');
    form.addEventListener('submit', function() {
        // Save the current scroll position
        sessionStorage.setItem('scrollPosition', window.scrollY);
    });

    // Check if there's a stored scroll position and scroll to it
    var scrollPosition = sessionStorage.getItem('scrollPosition');
    if (scrollPosition) {
        window.scrollTo(0, scrollPosition);
        sessionStorage.removeItem('scrollPosition'); // Clear the stored position
    }
});
</script>


<script>
$(document).ready(function() {
    $(".content").slice(0, 8).show();
    $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".content:hidden").slice(0, 8).slideDown();
        if ($(".content:hidden").length == 0) {
            $("#loadMore").text("No Content").addClass("noContent");
        }
    });
})
</script>
<script>
$(document).ready(function() {
    $(".contents").slice(0, 8).show();
    $("#loadMoree").on("click", function(e) {
        e.preventDefault();
        $(".contents:hidden").slice(0, 8).slideDown();
        if ($(".contents:hidden").length == 0) {
            $("#loadMoree").text("No Content").addClass("noContent");
        }
    });
})
</script>
<script>
$(document).ready(function() {
    $(".innertext").slice(0, 6).show();
    $("#loadMor").on("click", function(e) {
        e.preventDefault();
        $(".innertext:hidden").slice(0, 6).slideDown();
        if ($(".innertext:hidden").length == 0) {
            $("#loadMor").text("No Content").addClass("noContent");
        }
    });
})
</script>

<script>
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        items: 4,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            700: {
                items: 4
            },
            1000: {
                items: 4
            }
        },

    });
});
</script>

</html>