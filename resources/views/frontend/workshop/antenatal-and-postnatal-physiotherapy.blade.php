@extends('frontend.layouts.app')

@section('content')


<div class="sub-banner-section antenatal-banner ">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <div>
                                <h1 data-aos="fade-up">Prenatal & Postnatal Care for a Healthy Motherhood Journey
Expert-led classes & workshops in Vaishali, Ghaziabad for 
<br><span class="mid-text" style="color:#CAA983;">Parents, Physiotherapists & Hospitals.</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p class="text-center" data-aos="fade-right">Strengthen, heal, and embrace motherhood with confidence at every stage
                                        </p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                        class="sub_span"> Antenatal & Postnatal Physiotherapy
                                    </span>
                                </div>
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
    </div>
    </section>
</div>

<section class=" position-relative aboutpage_aboutus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 position-relative ">
                <div class="aboutus_image workshop">
                    <figure class="mb-0 text-sm-center text-xs-center text-lg-start text-xl-start text-md-start text-center">
                        <img src="{{ asset('img/antenatal1.webp') }}"  alt="better-life"  class="ane-img img-fluid ">
                    </figure>
                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" loading="lazy" alt="shape" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" loading="lazy" alt="shape" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12 aboutus_content">
                <div class="aboutus_content pt-lg-0 pt-xl-0 pt-md-4 pt-sm-2 pt-xs-2 pt-2">
                         <h5>Antenatal & Postnatal Physiotherapy
                    </h5>
                    <h2>Prenatal & Postnatal Care for a Healthy Motherhood Journey
Expert-led classes & workshops in Vaishali, Ghaziabad for Parents, Physiotherapists & Hospitals.
                    </h2>
                    <ul>
                        <li>Prenatal & Postnatal Classes for Parents
                        </li>
                        <li> Physiotherapy Workshops for Professionals
                        </li>
                        <li>Hospital Tie-ups for Childbirth Education
                        </li>
                    </ul>
<div class="btn_wrapper main-btn">
                        <a href="/workshop/antenatal-and-postnatal-physiotherapy#parents"
                            class="text-decoration-none get_started_btn">
                            Join as a Parent
                        </a>

                    </div>
                    <div class="btn_wrapper main-btn">
                        <a href="/workshop/antenatal-and-postnatal-physiotherapy#physiotherapist"
                            class="text-decoration-none get_started_btn"> Register as a Physiotherapist
                        </a>
                    </div>
                    <div class="btn_wrapper main-btn">
                        <a href="/workshop/antenatal-and-postnatal-physiotherapy#hospital"
                            class="text-decoration-none get_started_btn">Partner as a Hospital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<style>
.tagline-marquee {
    background: #004B2A;
    padding: 0.75rem 0;
    overflow: hidden;
    white-space: nowrap;
    position: relative;
}

.tagline-marquee .marquee-track {
    display: inline-block;
    white-space: nowrap;
    animation: scroll-left 18s linear infinite;
}

.tagline-marquee h2 {
    display: inline-block;
    font-weight: 600;
    font-size: 30px;
    color: #fff;
    margin: 0;
    padding-right: 3rem;
    /* spacing between items */
}

@keyframes scroll-left {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}
.scroll-sec{
      scroll-margin-top: 200px !important;

}
</style>
@if($announcements->count())
<div class="tagline-marquee">
    <div class="marquee-track">
        @foreach($announcements as $announcement)
            <h2>
                @if($announcement->link)
                    <a href="{{ $announcement->link }}" >
                        {{ $announcement->message }}
                    </a>
                @else
                    {{ $announcement->message }}
                @endif
            </h2>
        @endforeach

        {{-- duplicate once for seamless loop --}}
        @foreach($announcements as $announcement)
            <h2>
                @if($announcement->link)
                    <a href="{{ $announcement->link }}" >
                        {{ $announcement->message }}
                    </a>
                @else
                    {{ $announcement->message }}
                @endif
            </h2>
        @endforeach
    </div>
</div>
@endif
<section class="aboutus_section">
    <div class="container">
       
                <div class="aboutus_content text-center pt-lg-5 pt-xl-5 pt-md-4 pt-sm-2 pt-xs-2 pt-2">
         
                    <h2>Your Partner in Pregnancy, Postpartum & Beyond.
</h2>
                    <p>Begin your motherhood journey with expert prenatal & postnatal care today.</p>
                   
         

                    <div class="btn_wrapper">
                        <a href="/contact" class="text-decoration-none border-0 appointment-btn">Contact Us</a>

               
            </div>
        </div>
    </div>
</section>
<section class="aboutpage_aboutus_section  scroll-sec women-health"   id="physiotherapist">
    <div class="container">


                    <h2 class="text-center">For Physiotherapists

                    </h2>
                    <p class="text-center">Prenatal & Postnatal Physiotherapy Workshops in Delhi NCR
                    </p>
                    <div class="box-wrapper p-2" style="background:#004B2A;">
                        <h4 class="fs-6 mb-0  text-center" style="color:#fff;">Gain advanced skills in women’s health and maternal fitness through a certified, hands-on workshop led by Dr. Garima Biswas.</h4>
                        </div>
                
  

                <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0 image-round-side">
                    <div class="col-md-4 mt-4">
                        <div class="card shadow health-card border-0">
                          <img src="{{ asset('img/services/Prenatal.webp') }}"
                                    class="w-100" alt="bladder">
                            <div class="card-content">
                                <h4>Prenatal Sessions</h4>
                                <ul>
                                    <li>⁠Basic Anatomy & Physiology</li>
                                    <li>Changes During Pregnancy</li>
                                    <li>Trimester-Based Exercises</li>
                                    <li>Exercises Using Ball, Dumbbells & Bands</li>
                                    <li>Pregnancy Yoga & Pilates Garbh Sanskar</li>
                                    <li>Exercise Prescription and Format</li>
                                </ul>
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow health-card  border-0">
                           <img src="{{ asset('img/services/postnatal.webp') }}"
                                    class="w-100" alt="bladder">
                                <div class="card-content">
                                    <h4>Postnatal Sessions</h4>
                                    <ul>
                                        <li>Hormonal Changes</li>
                                        <li>Sexual Changes</li>
                                        <li>Return to Exercises</li>
                                        <li>Management of LSCS (C-section)</li>
                                        <li>Management of Normal Labor</li>
                                        <li>Management of Pelvic Girdle Pain</li>
                                    </ul>
                               
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow health-card  border-0">
                                 <img src="{{ asset('img/services/labour-management.webp') }}"
                                    class="w-100" alt="bladder">
                                <div class="card-content">
                                    <h4>Labor Management</h4>
                                    <ul>
                                        <li>Pain Management</li>
                                        <li>Breathing Techniques</li>
                                        <li>Positioning</li>
                                    </ul>
                                 
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow health-card  border-0"><img
                                class="w-100" src="{{ asset('img/services/special-management.webp') }}" alt="Postpartum">
                                <div class="card-content">
                                    <h4>Special Management</h4>
                                    <ul>
                                        <li>⁠Diastasis Recti Management </li>
                                        <li>Postpartum & Post-Caesarean Exercises</li>
                                        <li>Baby Handling Techniques & Ball Exercises</li>
                                
                                    </ul>
                                 
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <div class="card shadow health-card  border-0"><img
                                class="w-100" src="{{ asset('img/services/certification.webp') }}" alt="Excercise Programs">
                                <div class="card-content">
                                    <h4>Certification & Benefits</h4>
                                    <ul>
                                        <li>Internationally Approved Certificate</li>
                                        <li>Comprehensive Study Notes</li>
                                        <li>Free Yoga Mat</li>
                                         <li>16 Credit Hours</li>
                                    </ul>
                          

                                </div>
                        </div>
                    </div>
                     <div class="col-md-4 mt-4">
                        <div class="card shadow health-card  border-0 d-flex align-items-center">
                                <div class="card-content h-100 d-flex align-items-center">
                                    <div>
                                 <p>Register now to upgrade your physiotherapy practice with hands-on prenatal & postnatal workshops.
</p>
                          
  <div class="btn_wrapper">
                        <a href="/contact" class="text-decoration-none border-0 appointment-btn">Register Now</a>
                                </div>
                        </div>
                    </div>
                </div>

   </div>

        </div>


    </div>
</section>
<section class="aboutpage_aboutus_section  position-relative   bg-section scroll-sec" id="parents">
    <div class="container">
     <h2 class="text-center"> For Parents</h2>
                    <p class="text-center">Prenatal Classes in Vaishali Ghaziabad for Normal Delivery Preparation
                    </p>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 col-12">
                <div class="aboutus_image ">
                    <figure class="mb-0 text-sm-center text-xs-center text-lg-start text-xl-start text-md-start text-center">
                        <img src="{{ asset('img/parents.png') }}"  alt="better-life"  class="ane-img img-fluid ">
                    </figure>
                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/blog_posts_left_shape.png') }}" loading="lazy" alt="shape" class="img-fluid">
                </figure>
          
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12" data-aos="fade-right">
                <div class="para ">

                    <h2> Pregnancy is beautiful — but it needs the right support.</h2>
               
                    <p>Our prenatal classes are designed for expecting mothers, fathers, and caregivers to help you prepare for childbirth and recovery with confidence.</p>
                    <ul>
                        <li> Handling pregnancy discomfort
                        </li>
                        <li>Trimester based focused exercise
                        </li>
                        <li>Specific yog aasan for Normal delivery </li>
                        <li>Diet and Nutrition</li>
                        <li> Meditation</li>
                        <li>Strength training</li>
                        <li> Specific breathing techniques during labor and delivery</li><li> Coping technique during labor</li><li> Pelvic floor rehabilitaion</li>
                        <li>Teaching infant care</li>
                        <li>Right technique of breast feeding</li>
                        <li>Sessions for husband teaching relaxation techniques for their pregnant wife</li>
                        <li> Relaxation techniques and stress management garbh sanskar</li>
                    </ul>
                    <h5>Register now to upgrade your physiotherapy practice with hands-on prenatal & postnatal workshops.
</h5>
       

                    <div class="btn_wrapper main-btn">
                        <a href="/workshop/antenatal-and-postnatal-physiotherapy#contact-us" class="text-decoration-none read_more_btn">Register Now
                        </a>
                    </div>



                </div>
            </div>
        </div>


    </div>
</section>
<section class=" position-relative aboutpage_aboutus_section" id="hospital">
    <div class="container">
        <div class="row">
             <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12 aboutus_content">
                <div class="aboutus_content pt-lg-0 pt-xl-0 pt-md-4 pt-sm-2 pt-xs-2 pt-2">
                       <h2>Childbirth Education Programs & Antenatal Tie-ups in Delhi NCR</h2>
                    <p>We collaborate with hospitals, gynecologists, and maternity centers to enhance patient care with our structured prenatal & postnatal programs.
                    </p>
                    <h5>Benefits:</h5>
                    <ul>
                        <li> Value-added service for your patients
                        </li>
                        <li>Evidence-based exercise & childbirth education </li>
                        <li>Expert-led workshops</li>
                        <li>Enhanced patient satisfaction & outcomes</li>
                        <li> Flexible formats: in-hospital group sessions or referral-based programs </li>
                    </ul>

                    <p> Together, let’s empower expecting families with knowledge & safe practices.</p>

                    <div class="btn_wrapper main-btn">
                        <a href="/workshop/antenatal-and-postnatal-physiotherapy#contact-us" class="text-decoration-none read_more_btn">Register Now

                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 position-relative ">
                <div class="aboutus_image workshop">
                    <figure class="mb-0 text-sm-center text-xs-center text-lg-start text-xl-start text-md-start text-center">
                        <img src="{{ asset('img/child-birth.png') }}"  alt="better-life"  class="ane-img img-fluid ">
                    </figure>
                </div>
        
                
            </div>
           
        </div>
    </div>
            <figure class="aboutus_top_shape left_shape" style="right:0px !important; left:auto !important; display: flex
;
    justify-content: end;">
                    <img src="{{ asset('images/blog_posts_right_shape.png') }}" loading="lazy" alt="shape" class="w-50 img-fluid">
                </figure>
</section>

<section class=" position-relative aboutpage_aboutus_section bg-section" >
    <div class="container">
        <div class="row">
             <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 position-relative ">
                <div class="aboutus_image workshop">
                    <figure class="mb-0 text-sm-center text-xs-center text-lg-start text-xl-start text-md-start text-center">
                        <img src="{{ asset('img/partner.png') }}"  alt="better-life"  class="ane-img img-fluid ">
                    </figure>
                </div>
        
                
            </div>
             <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12 aboutus_content">
                <div class="aboutus_content pt-lg-0 pt-xl-0 pt-md-4 pt-sm-2 pt-xs-2 pt-2">
                       <h2>Why Partner with Us?</h2>
                    
                    <ul>
                        <li>Value-added patient support

                        </li>
                        <li>Evidence-based prenatal & postnatal education</li>
                        <li>Professionally led workshops</li>
                        <li>Better maternal outcomes & patient satisfaction</li>
                        <li>Flexible formats: in-hospital or external referrals</li>
                    </ul>

                    <p> Partner with us to offer expert childbirth education and maternal wellness to your patients.</p>

                    <div class="btn_wrapper main-btn">
                        <a href="/workshop/antenatal-and-postnatal-physiotherapy#contact-us" class="text-decoration-none read_more_btn">Register Now

                        </a>
                    </div>

                </div>
            </div>
           
           
        </div>
    </div>
            <figure class="aboutus_top_shape left_shape" style="left:0px !important; display: flex
;
    justify-content: end;">
                    <img src="{{ asset('images/blog_posts_left_shape.png') }}" loading="lazy" alt="shape" class="w-50 img-fluid">
                </figure>
</section>

<!-- MESSAGE SECTION -->
<section class="message_section contact scroll-sec " id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="message_content">
                    <h5>Get in Touch.</h5>
                    <h2>Send us a Message</h2>
                    <p>Your health is our priority. Don't hesitate to contact us.</p>

                    @if(session('message'))
                    <div class="alert-message alert-{{ session('status') }} alert-dismissible fade show mb-3  mt-3 d-flex"
                        role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="btn-close-contact border-0" data-bs-dismiss="alert"><i
                                class="fas fa-times"></i></button>
                    </div>
                    @endif
                    <form id="contactPage" name="contactpage" method="POST" action="{{ url('contact') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="first_name" id="first_name"
                                        class="@error('first_name') is-invalid @enderror form-control"
                                        placeholder="First Name" required>
                                    @error('first_name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="last_name" id="last_name" class="form-control form_style"
                                        placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-input-btn">
                                <div class="form-group mb-0">
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="email" name="email" id="email"
                                        class="@error('email') is-invalid @enderror form-control form_style"
                                        placeholder="Email">
                                    @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-0">

                                    <select name="service" id="service" class="form-select" required>
                                        <option selected disabled>Services</option>
                                        <option value="women_health">Women Health</option>
                                        <option value="physiotherapy">Physiotherapy</option>
                                        <option value="yoga">Yoga</option>
                                        <option value="yoga">Corporate Training</option>
                                        <option value="yoga">Yoga Training</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" form-group mb-0">
                                    <textarea rows="3" name="message" id="message" class="form-control"
                                        placeholder="Message" required></textarea>

                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="g-token" id="recaptchaToken" required>
                        <div class="g-recaptcha mt-4 mb-4" data-sitekey={{ config('services.recaptcha.key') }}></div>
                        <span class="text-danger">{{ $errors->first('Click to verify') }}</span>

                        <div class="btn_wrapper mb-3">
                            <button type="submit" class="border-0" id="started">Submit</button>
                        </div>
                        <!-- <h6 style="mt-3 color:var(--primary-green);"><span class="text-danger mt-4 pb-4 mb-4">*</span>All the fields are required.</h6> -->


                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="row pt-5" data-aos="fade-up">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box box_padding d-flex align-items-center">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('images/contact_location.png') }}" alt="location"
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Location</h3>
                                <p class="mb-0 pt-2"> Shop NO- 290,<br> Basement Shop, 1, opposite Ramprastha Green
                                    Road, Sector 4, Vaishali, Ghaziabad, Uttar Pradesh 201010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box d-flex align-items-center">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('images/contact_phone.png ') }}" alt="contact-phone"
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Phone</h3>
                                <p class="pt-2"><a href="tel:+91 85270 45759" class="text-decoration-none">+91 85270
                                        45759</a></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box mb-0 d-flex align-items-center">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('images/contact_mail.png') }}" alt="email" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Email</h3>
                                <p class="pt-2"><a href="mailto:garimabiswas09@gmail.com"
                                        class="text-decoration-none">garimabiswas09@gmail.com</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallary -->
<section class="pt-5 mt-4 aboutus_content gallery-anne">
    <div class="container">
            <div class="box-wrapper p-2" style="background:#004B2A;">
                        <h4 class="fs-6 mb-0  text-center" style="color:#fff;">Join Omansh Health & Fitness and be part of a healthier, safer motherhood journey — whether you’re a parent, a physiotherapy professional, or a hospital partner.</h4>
                        </div>
                         <div class=" pt-4 d-flex align-items-center justify-content-center btn_wrapper main-btn">
                        <a href="/workshop/antenatal-and-postnatal-physiotherapy#contact-us" class="text-decoration-none read_more_btn">Register Now

                        </a>
                    </div>
        <h2 class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start pt-5">Antenatal &
            Postnatal Physiotherapy
            Gallery</h2>

        <div class="row pt-sm-0 pt-lg-5 pt-0 pt-xl-5 pt-md-5 pt-xs-0">
            <div class="col-md-4 mt-3 innertext">
                <div class="card border-0">
                    <img src="{{ asset('img/antenatal1.webp') }}" alt="gallary1">
                </div>
            </div>
            <div class="col-md-4 mt-3 innertext">
                <div class="card border-0">
                    <img src="{{ asset('img/antenatal2.webp') }}" alt="gallary2">
                </div>
            </div>
            <div class="col-md-4 mt-3 innertext">
                <div class="card border-0">
                    <img src="{{ asset('img/antenatal3.webp') }}" alt="gallary3">
                </div>
            </div>
            <div class="col-md-4 mt-3 innertext">
                <div class="card border-0">
                    <img src="{{ asset('img/antenatal4.webp') }}" alt="gallary4">
                </div>
            </div>
            <div class="col-md-4 mt-3 innertext">
                <div class="card border-0">
                    <img src="{{ asset('img/antenatal5.webp') }}" alt="gallary5">
                </div>
            </div>
            <div class="col-md-4 mt-3 innertext">
                <div class="card border-0">
                    <img src="{{ asset('img/antenatal6.webp') }}" alt="gallary6">
                </div>
            </div>

        </div>
        <!--<div class="btn_wrapper d-flex justify-content-center mt-5">-->
        <!--    <a href="#" id="loadMor" class="text-decoration-none get_started_btn"> Load More </a>-->
        <!--</div>-->
    </div>
</section>

<!-- Testimonial -->
<section class="our_specialties_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="our_specialties_heading_content">

                    <h2> Testimonial
                    </h2>
                    <p class="text-center">Thank you for your trust and stories; we're truly humbled by your support</p>
                </div>
            </div>
        </div>

        <div class="row pt-4" id="data">
            @foreach ($testimonials as $testimonial)
            @if($testimonial->category == "antenatal")
            <div class="col-md-3 pt-3">

                <div class="card border-0 videoCard">
                    <a class="btn btn-block videoLink" data-item="{{ $testimonial->featured_video}}" data-toggle="modal"
                        data-target="#deleteLineItemModal">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <img class="loads" src="{{$testimonial->featured_image }}" class="play-btn btn-watch-video w-100"
                        alt="thumbnail" />

                </div>
            </div>

            @endif
            @endforeach
        </div>
    </div>
</section>



<div class="modal videoModal fade" id="deleteLineItemModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteLineItemModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content mt-4 bg-transparent border-0">
            <div class="modal-header bg-transparent border-0">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close me-0 pe-0 border-0 bg-transparent" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body edit-content pt-2">
                <iframe id="lineitem" class="embed-responsive-item" src="" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<figure class="blog_posts_left_shape left_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_left_shape.png" alt="left-shape" class="img-fluid">
</figure>
<figure class="blog_posts_right_shape right_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_right_shape.png" alt="right-shape" class="img-fluid">
</figure>
@endsection