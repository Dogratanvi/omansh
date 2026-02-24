@extends('frontend.layouts.app')
@section('content')
<main class="web-page  landing-page rehab-page">

    <section class="rehab-banner position-relative z-2 mt-0 ">
        <img src="{{ asset('img/belly/belly.webp') }}"
            class="position-absolute w-100 h-100 z-1 top-0 start-0 object-fit-cover" alt="banner image"
            style="object-fit: cover;">
        <div class="position-relative  z-2 ">
            <div class="box-wrapper  p-5 position-reltaive">
                <h1 class=" fw-bolder text-center text-uppercase text-white ">
                    Still Struggling With Belly Bulge After Delivery Even Years Later!</h1>

            </div>
        </div>




    </section>
    <div class="bottom-footer section-sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h6 class="top-heading m-0  fs-4 lh-normal py-4 text-white text-center">Discover why your tummy
                        still bulges after pregnancy and learn the step-by-step recovery system in this live paid <a
                            class="text-theme">Zoom session.</a></h6>
                </div>

            </div>
        </div>

    </div>
    <section class="position-relative">
        <div class="container position-relative py-5">

            <!-- Top Info -->
            <div class="py-5 px-3  shadow rounded">
                <div class="row g-3  justify-content-center text-center mb-4">

                    <div class="col-12 d-flex justify-content-center col-md-4">
                        <div class="time-pill">
                            <div class="time-icon">
                                <img src="{{ asset('img/belly/calendar.png') }}" alt="calendar">
                            </div>
                            <div class="icon-wrap"><span class="time-text">1 March,<br>
                                    2026</span> </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex justify-content-center ">
                        <div class="time-pill">
                            <div class="time-icon">
                                <img src="{{ asset('img/belly/back-in-time.svg') }}" alt="calendar">
                            </div>
                            <div class="icon-wrap"><span class="time-text">12:00 PM</span> </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex justify-content-center ">
                        <div class="time-pill">
                            <div class="time-icon">
                                <img src="{{ asset('img/belly/mode.svg') }}" alt="calendar">
                            </div>
                            <div class="icon-wrap"><span class="time-text">Live on <br> Zoom</span> </div>
                        </div>
                    </div>

                </div>
                <div class="text-center mb-5">

                    <button class="signup-btn open-popup mb-3 mt-5" data-price="499">
                        SIGNUP NOW: ₹ 499</span>
                    </button>

                </div>

            </div>
            <!-- Signup -->

            <!-- Content -->
            <div class="row align-items-end mt-5">

                <!-- Cards -->
                <div class="col-lg-8">
                    <div class="row g-4">

                        <div class="col-md-6">
                            <div class="feature-card">
                                <img src="{{ asset('img/belly/healthy.webp') }}" alt="You’re Eating Healthy">
                                <div class="feature-label">You’re Eating Healthy</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-card">
                                <img src="{{ asset('img/belly/excercise.webp') }}" alt="You’re Eating Healthy">
                                <div class="feature-label">You’ve Tried Exercises</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('img/belly/tummy.webp') }}" alt="You’re Eating Healthy"
                        class="img-fluid hero-img">
                    <div class="feature-label ">But tummy still looks pregnant</div>
                </div>

            </div>

        </div>
    </section>
    <!-- meet our expert -->
    <section class="rehab-expert  position-relative">
        <div class="position-absolute top-0">
            <figure class="banner_left_top_shape left_shape mb-0">
                <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="banner_left_top_shape"
                    class="img-fluid">
            </figure>
            <figure class="banner_left_bottom_shape left_shape mb-0">
                <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="banner_left_bottom_shape"
                    class="img-fluid">
            </figure>

        </div>
        <div class="position-absolute top-0 end-0 bottom-0">

            <figure class="banner_right_top_shape right_shape mb-0">
                <img src="{{ asset('images/our_specialties_right_shape.png') }}" alt="banner_right_top_shape"
                    class="img-fluid">
            </figure>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/belly/belly-fat.webp') }}" alt="expert image" class="w-100 mt-4 mt-sm-4 mt-md-0 rounded-3">
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1000">
                    <div>

                        <h3 class="fw-bolder mb-3 pt-4 text-theme">Belly bulge is often not fat.

                        </h3>
                        <ul class="rehab-list">
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                It’s incomplete core recovery.
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                And yes — recovery is possible.
                            </li>

                        </ul>

                        <button class="signup-btn open-popup mb-3 mt-3" data-price="">
                            Reserve Your Seat Now
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="rehab-expert  position-relative">
        <div class="position-absolute top-0">
            <figure class="banner_left_top_shape left_shape mb-0">
                <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="banner_left_top_shape"
                    class="img-fluid">
            </figure>
            <figure class="banner_left_bottom_shape left_shape mb-0">
                <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="banner_left_bottom_shape"
                    class="img-fluid">
            </figure>

        </div>
        <div class="position-absolute top-0 end-0 bottom-0">

            <figure class="banner_right_top_shape right_shape mb-0">
                <img src="{{ asset('images/our_specialties_right_shape.png') }}" alt="banner_right_top_shape"
                    class="img-fluid">
            </figure>

        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1000">
                    <div>

                        <h3 class="fw-bolder mb-3 pt-4 text-theme">What You’ll Learn In This Webinar


                        </h3>
                        <ul class="rehab-list">
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                Why belly bulge happens even after weight loss
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                Diastasis Recti explained in simple language

                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                Why coughing makes your tummy pop out


                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                Scar tightness & pressure connection

                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                The biggest mistakes mothers make

                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                Step-by-step recovery roadmap


                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/belly/recovery.webp') }}" alt="expert image" class="w-100 rounded-3">
                    <p style="font-style:Italic" class="text-dark pt-2">You’ll also see live demonstrations of breathing
                        & core activation.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="rehab-expert  position-relative">

        <div class="container">
            <div class="p-4 olive" style="background:#004B2A;">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('img/belly/c-section.webp') }}" alt="expert image" class=" w-100 rounded-3">

                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1000">
                        <div>

                            <h3 class="fw-bolder mb-3 pt-4 text-white">Who This Is For


                            </h3>
                            <p class="text-white pt-2">This session is for you if:</p>
                            <ul class="rehab-list">
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    You had C-section or normal delivery
                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    Your tummy still bulges years later


                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    You see doming while coughing or getting up

                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    You feel weak in your core


                                </li>
                                <li>
                                    <i class="fa-solid fa-arrow-right"></i>
                                    You want safe, science-based recovery


                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="rehab-expert  position-relative">
        <img src="{{ asset('img/belly/bg.webp') }}" alt="expert image"
            class="  w-100 h-100 position-absolute top-0 start-0 z-1 rounded-3">
        <div class="container position-relative z-2">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1000">
                    <div>
                        <div class="p-2" style="background-color:#CAA983; width: max-content;">
                            <h2 class="fw-bolder mb-0" style="color:#004B2A;">Meet Our Expert</h2>
                        </div>
                        <h3 class="fw-bolder mb-3 pt-4 text-theme">Dr. Garima Biswas</h3>
                        <p>MPT (Obs & Gyne)
                            Consultant Physiotherapist<br>
                            Founder of OMANSH Health and Fitness<br>
                            Obstetrics and Pelvic Floor Rehab Therapist<br>
                            Labor and Child Birth Educator</p>

                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('img/belly/garima.webp') }}" alt="expert image" class=" w-100 rounded-3">

                </div>
            </div>

        </div>
    </section>
    <section class="rehab-expert  py-5 position-relative">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-duration="1000">
                    <div>

                        <h3 class="fw-bolder mb-3 pt-4 text-theme">What Makes This Different?

                        </h3>
                        <ul class="rehab-list">
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                This is not a generic fitness session.
                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                This is a structured, science-based rehabilitation approach designed specifically for
                                postpartum recovery.



                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                No random ab workouts.

                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                No unrealistic promises.


                            </li>
                            <li>
                                <i class="fa-solid fa-arrow-right"></i>
                                Only guided, safe progression.


                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center" data-aos="fade-right"
                    data-aos-duration="1000">
                    <img src="{{ asset('img/belly/workouts.webp') }}" alt="expert image" class=" w-100 rounded-3">

                </div>

            </div>
        </div>
    </section>
    <div class="mb-0 mt-5 text-center">
        <span class="section-badge">About the Webinar</span>
    </div>
    <div class="container-fluid section-bg text-white py-5">
        <div class="container">
            <div class="row text-center text-md-start align-items-center mobile-size-img gy-3">

                <div
                    class="col-6 col-md-4 d-flex align-items-center justify-content-center justify-content-md-center gap-2 border-end border-white">
                    <img src="{{ asset('img/belly/schedule_1.webp') }}" class="img-fluid" alt="banner image">
                    <div>
                        <small class="fw-semibold text-badge fs-4 d-block">Date & Time</small>
                        <span>1 March, 2026
                            12:00 PM</span>
                    </div>
                </div>

                <div
                    class="col-6 col-md-4 d-flex align-items-center justify-content-center justify-content-md-center gap-2 border-end border-white mobile-border">
                    <img src="{{ asset('img/back-in-time.svg') }}" class="img-fluid" alt="banner image">
                    <div>
                        <small class="fw-semibold text-badge fs-4 d-block">DURATION:</small>
                        <span>60 Minutes</span>
                    </div>
                </div>

                <div
                    class="col-6 col-md-4 d-flex align-items-center justify-content-center justify-content-md-center gap-2  border-white">
                    <img src="{{ asset('img/mode.svg') }}" class="img-fluid" alt="banner image">
                    <div>
                        <small class="fw-semibold text-badge fs-4 d-block">MODE:</small>
                        <span>Live Zoom sessions</span>
                    </div>
                </div>



            </div>
        </div>
    </div> 
<section class="position-relative  py-5"> 
   <img src="{{ asset('img/belly/belly-budge.webp') }}" alt="expert image"
            class="  w-100 h-100 position-absolute top-0 start-0 z-1 rounded-3">
    <div class="container text-center  z-2 position-relative">

        <!-- Price Badge -->
        <div class="text-center my-4">

            <button class="signup-btn open-popup fs-5 mb-3 mt-3" data-price="499">
                SIGNUP NOW: ₹499
            </button>

        </div>

        <!-- Content -->
        <h2 class="fw-bold mt-4 text-theme">
         For Videos Related to Belly Bulge
        </h2>

        <p class="mb-4 text-dark">
            Visit to Our Youtube &amp; Instagram
        </p>

        <!-- Social Icons -->
        <div class="d-flex justify-content-center gap-4">
            <a href="https://www.youtube.com/@drgarimabiswas6613" target="_blank" class="social-icon youtube">

                <img src="{{ asset('img/youtube.svg') }}" class="img-fluid" alt="social icon">
            </a>

            <a href="https://www.instagram.com/omansh_health_fitness/" target="_blank" class="social-icon instagram">
                <img src="{{ asset('img/instagram.svg') }}" class="img-fluid" alt="social icon">
            </a>
        </div>

    </div>
</section>
    <div class="bottom-footer section-sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h6 class="top-heading m-0 py-4 text-theme text-center">Terms & Condition Apply*</h6>
                </div>

            </div>
        </div>

    </div>
    <div class="section-bg ">
        <div class="container text-center">
            <div class="row justify-content-center align-items-center py-4">
                <div class="col-12 col-xl-2 col-md-2 col-lg-2 col-sm-12 col-xs-12">
                    <div class="timer-title-custom text-white">Offer Expires in</div>
                </div>
                <div class="col-12 col-xl-5 col-md-5 col-lg-5 col-sm-12 col-xs-12 d-flex time-box">
                    <div id="days-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Days</span>
                    </div>
                    <div id="hours-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Hours</span>
                    </div>
                    <div id="minutes-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Minutes</span>
                    </div>
                    <div id="seconds-custom" class="timer-section-custom timer-box-custom">
                        <div class="text-white">00</div>
                        <span class="text-white">Seconds</span>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-md-4 col-lg-4 col-sm-12 col-xs-12 mt-4 mt-sm-4 mt-md-0">
                    <button
                        class="signup-btn open-popup text-decoration-none fs-5  shadow-none border-0 rounded text-theme py-2 px-3"
                        data-price="499">
                        Sign up now at ₹499
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
    .avatar-upload {
        position: relative;
        max-width: 205px;
        margin: 0 auto 30px;
    }

    .avatar-upload .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
    }

    .avatar-upload .avatar-edit input {
        display: none;
    }

    .avatar-upload .avatar-edit input+label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
    }

    .avatar-upload .avatar-edit input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit input+label:after {
        content: "\f040";
        font-family: 'FontAwesome';
        color: #757575;
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }

    .avatar-upload .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .error-message {
        color: #dc3545;
        font-size: 0.875em;
        margin-top: 0.25rem;
        display: none;
    }

    .form-control.is-invalid {
        border-color: #dc3545;
    }

    .form-control.is-valid {
        border-color: #28a745;
    }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em;
    }

    /* Custom Modal Styles */
    #messageModal .modal-content {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    }

    #messageModal .modal-header {
        padding: 20px 30px;
        border-bottom: none;
    }

    #messageModal .modal-body {
        font-size: 16px;
        color: #333;
        padding: 30px;
    }

    #messageModal .modal-footer {
        padding: 15px 30px 30px;
        justify-content: center;
    }

    #messageModal .btn {
        min-width: 120px;
        padding: 10px 30px;
        font-weight: 600;
        border-radius: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Animation for modal */
    #messageModal.fade .modal-dialog {
        transform: scale(0.8);
        transition: transform 0.3s ease-out;
    }

    #messageModal.show .modal-dialog {
        transform: scale(1);
    }
    </style>

    {{-- Replace the form inside the popup with this --}}
    <div id="imagePopup" class="price-popup">
        <div class="price-popup-content p-5">
            <span class="price-popup-close">&times;</span>

            <form id="landingForm" action="{{ route('frontend.landing.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    {{-- Aadhaar Number --}}


                    {{-- First Name --}}
                    <div class="col-md-6 mb-2">
                        <input type="text" name="first_name" id="first_name" class="form-control"
                            placeholder="First Name *" required>
                        <div class="error-message" id="error-first_name"></div>
                    </div>

                    {{-- Last Name --}}
                    <div class="col-md-6 mb-2">
                        <input type="text" name="last_name" id="last_name" class="form-control"
                            placeholder="Last Name *" required>
                        <div class="error-message" id="error-last_name"></div>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6 mb-2">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email *" required>
                        <div class="error-message" id="error-email"></div>
                    </div>

                    {{-- Phone --}}
                    <div class="col-md-6 mb-2">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone *" required
                            maxlength="10">
                        <div class="error-message" id="error-phone"></div>
                    </div>

                    {{-- Gender --}}


                    {{-- City --}}
                    <div class="col-md-6 mb-2">
                        <input type="text" name="city" id="city" class="form-control" placeholder="City *" required>
                        <div class="error-message" id="error-city"></div>
                    </div>

                    {{-- State --}}
                    <div class="col-md-6 mb-2">
                        <input type="text" name="state" id="state" class="form-control" placeholder="State *" required>
                        <div class="error-message" id="error-state"></div>
                    </div>

                    {{-- Pincode --}}
                    <div class="col-md-6 mb-2">
                        <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode *"
                            required maxlength="6">
                        <div class="error-message" id="error-pincode"></div>
                    </div>

                    {{-- Country --}}
                    <div class="col-md-6 mb-2">
                        <input type="text" name="country" id="country" class="form-control" placeholder="Country *"
                            required>
                        <div class="error-message" id="error-country"></div>
                    </div>

                    {{-- Address --}}
                    <div class="col-md-12 mb-2">
                        <textarea name="address" id="address" class="form-control" placeholder="Address *" rows="3"
                            required></textarea>
                        <div class="error-message" id="error-address"></div>
                    </div>

                    {{-- Special Requirements --}}


                    {{-- Payment --}}
                    <div class="col-md-12 mb-3">
                        <select name="payment" id="paymentSelect" class="form-control" required>
                            <option value="">Select Payment *</option>
                            <option value="499">₹499</option>
                            <option value="3500">₹3500</option>
                        </select>
                        <div class="error-message" id="error-payment"></div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success px-4" id="submitBtn">
                            <span class="btn-text">Submit</span>
                            <span class="spinner-border spinner-border-sm d-none" role="status"
                                aria-hidden="true"></span>
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    {{-- Add this JavaScript at the bottom of your page, before closing </body> tag --}}
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Avatar Upload Preview
        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target
                        .result + ')';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }



        const form = document.getElementById('landingForm');
        const submitBtn = document.getElementById('submitBtn');

        // Clear error on input
        form.querySelectorAll('input, select, textarea').forEach(element => {
            element.addEventListener('input', function() {
                clearError(this.name);
            });
        });

        // Validation Functions
        function showError(fieldName, message) {
            const field = document.getElementById(fieldName) || document.querySelector(`[name="${fieldName}"]`);
            const errorDiv = document.getElementById(`error-${fieldName}`);

            if (field) field.classList.add('is-invalid');
            if (errorDiv) {
                errorDiv.textContent = message;
                errorDiv.style.display = 'block';
            }
        }

        function clearError(fieldName) {
            const field = document.getElementById(fieldName) || document.querySelector(`[name="${fieldName}"]`);
            const errorDiv = document.getElementById(`error-${fieldName}`);

            if (field) field.classList.remove('is-invalid');
            if (errorDiv) {
                errorDiv.textContent = '';
                errorDiv.style.display = 'none';
            }
        }

        function clearAllErrors() {
            document.querySelectorAll('.error-message').forEach(el => {
                el.textContent = '';
                el.style.display = 'none';
            });
            document.querySelectorAll('.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });
        }

        function validateForm() {
            let isValid = true;
            clearAllErrors();



            // Name validation
            const firstName = document.getElementById('first_name').value.trim();
            if (!firstName) {
                showError('first_name', 'First name is required');
                isValid = false;
            } else if (firstName.length < 2) {
                showError('first_name', 'First name must be at least 2 characters');
                isValid = false;
            }

            const lastName = document.getElementById('last_name').value.trim();
            if (!lastName) {
                showError('last_name', 'Last name is required');
                isValid = false;
            }

            // Email validation
            const email = document.getElementById('email').value.trim();
            if (!email) {
                showError('email', 'Email is required');
                isValid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showError('email', 'Please enter a valid email');
                isValid = false;
            }

            // Phone validation
            const phone = document.getElementById('phone').value.trim();
            if (!phone) {
                showError('phone', 'Phone number is required');
                isValid = false;
            } else if (!/^[6-9]\d{9}$/.test(phone)) {
                showError('phone', 'Please enter a valid 10-digit phone number');
                isValid = false;
            }



            // City validation
            if (!document.getElementById('city').value.trim()) {
                showError('city', 'City is required');
                isValid = false;
            }

            // State validation
            if (!document.getElementById('state').value.trim()) {
                showError('state', 'State is required');
                isValid = false;
            }

            // Pincode validation
            const pincode = document.getElementById('pincode').value.trim();
            if (!pincode) {
                showError('pincode', 'Pincode is required');
                isValid = false;
            } else if (!/^\d{6}$/.test(pincode)) {
                showError('pincode', 'Pincode must be 6 digits');
                isValid = false;
            }

            // Country validation
            if (!document.getElementById('country').value.trim()) {
                showError('country', 'Country is required');
                isValid = false;
            }

            // Address validation
            if (!document.getElementById('address').value.trim()) {
                showError('address', 'Address is required');
                isValid = false;
            }

            // Payment validation
            if (!document.getElementById('paymentSelect').value) {
                showError('payment', 'Please select a payment option');
                isValid = false;
            }

            return isValid;
        }

        // Show Bootstrap Modal
        function showModal(title, message, type = 'info') {
            const modalHtml = `
            <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0 ${type === 'success' ? 'bg-success' : type === 'error' ? 'bg-danger' : 'bg-info'} text-white">
                            <h5 class="modal-title" id="messageModalLabel">
                                <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-times-circle' : 'fa-info-circle'} me-2"></i>
                                ${title}
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center py-4">
                            <p class="mb-0">${message}</p>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn ${type === 'success' ? 'btn-success' : type === 'error' ? 'btn-danger' : 'btn-primary'}" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

            // Remove existing modal if any
            const existingModal = document.getElementById('messageModal');
            if (existingModal) {
                existingModal.remove();
            }

            // Add modal to body
            document.body.insertAdjacentHTML('beforeend', modalHtml);

            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('messageModal'));
            modal.show();

            // Remove modal from DOM after hidden
            document.getElementById('messageModal').addEventListener('hidden.bs.modal', function() {
                this.remove();
            });
        }

        // Initialize Razorpay Payment
        function initiateRazorpayPayment(orderData) {
            const options = {
                key: orderData.razorpay_key,
                amount: orderData.amount,
                currency: "INR",
                name: "Omansh Health and Fitness",
                description: "Diastasis Recti Online Rehab Program",
                order_id: orderData.order_id,
                prefill: {
                    name: orderData.customer_name,
                    email: orderData.customer_email,
                    contact: orderData.customer_contact
                },
                theme: {
                    color: "#004B2A"
                },
                handler: function(response) {
                    verifyPayment(response);
                },
                modal: {
                    ondismiss: function() {
                        showModal('Payment Cancelled',
                            'Payment was cancelled. Please try again if you wish to complete the registration.',
                            'error');
                        resetSubmitButton();
                    }
                }
            };

            const razorpay = new Razorpay(options);
            razorpay.on('payment.failed', function(response) {
                showModal('Payment Failed', response.error.description ||
                    'Payment failed. Please try again.', 'error');
                resetSubmitButton();
            });
            razorpay.open();
        }

        // Verify Payment
        function verifyPayment(paymentResponse) {
            fetch('{{ route("frontend.landing.verify") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        razorpay_order_id: paymentResponse.razorpay_order_id,
                        razorpay_payment_id: paymentResponse.razorpay_payment_id,
                        razorpay_signature: paymentResponse.razorpay_signature
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        // Redirect to success page
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            window.location.href = '{{ route("frontend.landing.success") }}';
                        }
                    } else {
                        alert(data.message || 'Payment verification failed');
                        resetSubmitButton();
                    }
                })
                .catch(error => {
                    console.error('Verification Error:', error);
                    alert('Payment verification failed. Please contact support.');
                    resetSubmitButton();
                });
        }

        // Reset Submit Button
        function resetSubmitButton() {
            submitBtn.disabled = false;
            submitBtn.querySelector('.btn-text').textContent = 'Submit';
            submitBtn.querySelector('.spinner-border').classList.add('d-none');
        }

        // AJAX Form Submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!validateForm()) {
                return;
            }

            const formData = new FormData(form);
            const btnText = submitBtn.querySelector('.btn-text');
            const spinner = submitBtn.querySelector('.spinner-border');

            // Disable button and show loading
            submitBtn.disabled = true;
            btnText.textContent = 'Processing...';
            spinner.classList.remove('d-none');

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => Promise.reject(err));
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success && data.order_id) {
                        // Registration successful, initiate Razorpay payment
                        btnText.textContent = 'Opening Payment Gateway...';
                        initiateRazorpayPayment(data);
                    } else if (data.errors) {
                        // Validation errors
                        Object.keys(data.errors).forEach(key => {
                            showError(key, data.errors[key][0]);
                        });
                        resetSubmitButton();
                    } else {
                        alert(data.message || 'Something went wrong. Please try again.');
                        resetSubmitButton();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);

                    // Handle validation errors
                    if (error.errors) {
                        Object.keys(error.errors).forEach(key => {
                            showError(key, error.errors[key][0]);
                        });
                    } else {
                        alert(error.message || 'An error occurred. Please try again.');
                    }
                    resetSubmitButton();
                });
        });

        // Popup Controls
        const popup = document.getElementById('imagePopup');
        const closeBtn = document.querySelector('.price-popup-close');
        const paymentSelect = document.getElementById('paymentSelect');

        document.querySelectorAll('.open-popup').forEach(btn => {
            btn.addEventListener('click', function() {
                paymentSelect.value = this.dataset.price;
                popup.classList.add('active');
            });
        });

        closeBtn.addEventListener('click', () => {
            popup.classList.remove('active');
            form.reset();
            clearAllErrors();
            document.getElementById('imagePreview').style.backgroundImage =
                'url(https://via.placeholder.com/192x192.png?text=Upload+Photo)';
        });

        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.classList.remove('active');
                form.reset();
                clearAllErrors();
                document.getElementById('imagePreview').style.backgroundImage =
                    'url(https://via.placeholder.com/192x192.png?text=Upload+Photo)';
            }
        });
    });
    </script>
</main>
<script>
function countdownTimerCustom() {
    // Set the date we're counting down to
    const countDownDate = new Date("Jan 19, 2026 00:00:00").getTime();

    const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days-custom").children[0].textContent = days < 10 ? '0' + days : days;
        document.getElementById("hours-custom").children[0].textContent = hours < 10 ? '0' + hours : hours;
        document.getElementById("minutes-custom").children[0].textContent = minutes < 10 ? '0' + minutes :
            minutes;
        document.getElementById("seconds-custom").children[0].textContent = seconds < 10 ? '0' + seconds :
            seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("days-custom").children[0].textContent = "00";
            document.getElementById("hours-custom").children[0].textContent = "00";
            document.getElementById("minutes-custom").children[0].textContent = "00";
            document.getElementById("seconds-custom").children[0].textContent = "00";
        }
    }, 1000);
}

function startTimer() {
    let timer;
    let totalSeconds = 300; // 5 minutes

    if (timer) clearInterval(timer);
    timer = setInterval(function() {
        if (totalSeconds <= 0) {
            totalSeconds = 300; // Reset timer to 5 minutes
        } else {
            totalSeconds--;
        }

        let minutes = Math.floor(totalSeconds / 60);
        let seconds = totalSeconds % 60;

        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
    }, 1000);
}

// Combine both functions under one onload handler
window.onload = function() {
    countdownTimerCustom();
    startTimer();
};
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById('imagePopup');
    const closeBtn = document.querySelector('.price-popup-close');
    const paymentSelect = document.getElementById('paymentSelect');

    document.querySelectorAll('.open-popup').forEach(btn => {
        btn.addEventListener('click', function() {
            paymentSelect.value = this.dataset.price;
            popup.classList.add('active');
        });
    });

    closeBtn.addEventListener('click', () => {
        popup.classList.remove('active');
    });

    popup.addEventListener('click', (e) => {
        if (e.target === popup) {
            popup.classList.remove('active');
        }
    });
});
</script>

@endsection