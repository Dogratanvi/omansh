@extends('frontend.layouts.app')

@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/author.css') }}">
@endpush

<section class="insta_posts_section achievement_section pb-0">
<div class="container py-5 mt-5 mt-sm-5 mt-md-5 mt-lg-0">
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="/images/optimal-health.png" class="img-fluid mb-3 mt-5 mt-sm-5 mt-md-5 mt-lg-0" alt="Profile Image">
            <div class="d-flex mb-3">
                <a href="https://www.linkedin.com/company/omansh/" target="_blank" class="btn btn-outline-dark btn-sm linkedin-btn pt-2 me-1">
                    <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                </a>
                
            </div>
        </div>

        <div class="col-md-6">
            <h2 class="fw-bold">Dr Garima Biswas (PT)</h1>
            <div class="underline mb-4 mt-3"></div>
            <p><strong class="text-uppercase">Currently:</strong><br> Founder of Omansh Health and Fitness </p>
            <p><strong class="text-uppercase">Resides:</strong><br>at Delhi </p>
            <p><strong class="text-uppercase">Education:</strong> <br>B.P.T ,M.PT(obstetrics and Gynaecology)</p>
            <p><strong class="text-uppercase">Expertise:</strong><br><a href="/services/yoga">Yoga</a> | <a href="/services/physiotherapy">Physiotherapy</a>  | <a href="/services/womenhealth">Women's Health</a>  | <a href="/services/womenhealth/pregnancy-and-postpartum">Pregnancy & Postnatal Fitness</a>  | <a href="/services/womenhealth/pelvic-floor-dysfunctions">Pelvic floor Rehab</a> </p>

            <h2 class="mt-4">Summary</h2>
            <ul>
                <li>Former owner and operator of a weekly newspaper in North Carolina</li>
                <li>Former Congressional press secretary and speechwriter in the energy and technology sectors</li>
                <li>Veteran journalist with experience covering Congress</li>
            </ul>

            <h2 class="mt-4">Experience</h2>
            <p>I am a certified antenatal and postnatal fitness expert, pelvic floor rehab therapist, and physiotherapist specializing in women's health. With years of experience,
                I help women navigate pregnancy, labor, and postpartum recovery through scientifically-backed exercises and holistic wellness.
                My approach focuses on safe movement, strength building, and rehabilitation, empowering women to have
                a healthy pregnancy, smooth labor, and faster postpartum recovery.</p>
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
