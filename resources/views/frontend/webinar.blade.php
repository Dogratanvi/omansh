@extends('frontend.layouts.app')
@section('content')
<main class="landing-page">
    <div class="main-header section-bg">
        <div class="container">
            <!-- desktop header -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h5 class="top-heading m-0 py-4 text-white text-center fw-bolder">Empower Your Labor Experience with
                        Expert Guidance</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-sec">
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-center">
                        <h1 class="heading-text text-uppercase text-white py-2 px-4 border border-white rounded">
                            Preparing for Labor?</h1>
                    </div>
                    <div class="col-12 text-center py-5">
                        <h2 class="sub-heading-text text-uppercase text-white"> Worried about Labor pain and
                            complications?</h2>
                        <p class="desc-sec text-white pb-4">(Join our child birth education class to prepare for your big day with confidence)</p>
                        <span class="zoom-webinar text-center text-white text-uppercase px-3 py-2 rounded">Zoom
                            webinar</span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <p class="date-sec text-center text-white p-3 rounded mb-3"><svg width="40" height="40"
                                viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9167 4.16669C12.9167 3.83517 12.785 3.51722 12.5505 3.2828C12.3161 3.04838 11.9982 2.91669 11.6667 2.91669C11.3351 2.91669 11.0172 3.04838 10.7828 3.2828C10.5484 3.51722 10.4167 3.83517 10.4167 4.16669V6.80002C8.01666 6.99169 6.44333 7.46169 5.28666 8.62002C4.12833 9.77669 3.65833 11.3517 3.465 13.75H36.535C36.3417 11.35 35.8717 9.77669 34.7133 8.62002C33.5567 7.46169 31.9817 6.99169 29.5833 6.79835V4.16669C29.5833 3.83517 29.4516 3.51722 29.2172 3.2828C28.9828 3.04838 28.6648 2.91669 28.3333 2.91669C28.0018 2.91669 27.6839 3.04838 27.4494 3.2828C27.215 3.51722 27.0833 3.83517 27.0833 4.16669V6.68835C25.975 6.66669 24.7317 6.66669 23.3333 6.66669H16.6667C15.2683 6.66669 14.025 6.66669 12.9167 6.68835V4.16669Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.33334 20C3.33334 18.6017 3.33334 17.3583 3.355 16.25H36.645C36.6667 17.3583 36.6667 18.6017 36.6667 20V23.3333C36.6667 29.6183 36.6667 32.7617 34.7133 34.7133C32.7617 36.6667 29.6183 36.6667 23.3333 36.6667H16.6667C10.3817 36.6667 7.23834 36.6667 5.28667 34.7133C3.33334 32.7617 3.33334 29.6183 3.33334 23.3333V20ZM28.3333 23.3333C28.7754 23.3333 29.1993 23.1577 29.5118 22.8452C29.8244 22.5326 30 22.1087 30 21.6667C30 21.2246 29.8244 20.8007 29.5118 20.4882C29.1993 20.1756 28.7754 20 28.3333 20C27.8913 20 27.4674 20.1756 27.1548 20.4882C26.8423 20.8007 26.6667 21.2246 26.6667 21.6667C26.6667 22.1087 26.8423 22.5326 27.1548 22.8452C27.4674 23.1577 27.8913 23.3333 28.3333 23.3333ZM28.3333 30C28.7754 30 29.1993 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333C30 27.8913 29.8244 27.4674 29.5118 27.1548C29.1993 26.8423 28.7754 26.6667 28.3333 26.6667C27.8913 26.6667 27.4674 26.8423 27.1548 27.1548C26.8423 27.4674 26.6667 27.8913 26.6667 28.3333C26.6667 28.7754 26.8423 29.1993 27.1548 29.5118C27.4674 29.8244 27.8913 30 28.3333 30ZM21.6667 21.6667C21.6667 22.1087 21.4911 22.5326 21.1785 22.8452C20.866 23.1577 20.442 23.3333 20 23.3333C19.558 23.3333 19.1341 23.1577 18.8215 22.8452C18.5089 22.5326 18.3333 22.1087 18.3333 21.6667C18.3333 21.2246 18.5089 20.8007 18.8215 20.4882C19.1341 20.1756 19.558 20 20 20C20.442 20 20.866 20.1756 21.1785 20.4882C21.4911 20.8007 21.6667 21.2246 21.6667 21.6667ZM21.6667 28.3333C21.6667 28.7754 21.4911 29.1993 21.1785 29.5118C20.866 29.8244 20.442 30 20 30C19.558 30 19.1341 29.8244 18.8215 29.5118C18.5089 29.1993 18.3333 28.7754 18.3333 28.3333C18.3333 27.8913 18.5089 27.4674 18.8215 27.1548C19.1341 26.8423 19.558 26.6667 20 26.6667C20.442 26.6667 20.866 26.8423 21.1785 27.1548C21.4911 27.4674 21.6667 27.8913 21.6667 28.3333ZM11.6667 23.3333C12.1087 23.3333 12.5326 23.1577 12.8452 22.8452C13.1577 22.5326 13.3333 22.1087 13.3333 21.6667C13.3333 21.2246 13.1577 20.8007 12.8452 20.4882C12.5326 20.1756 12.1087 20 11.6667 20C11.2246 20 10.8007 20.1756 10.4882 20.4882C10.1756 20.8007 10 21.2246 10 21.6667C10 22.1087 10.1756 22.5326 10.4882 22.8452C10.8007 23.1577 11.2246 23.3333 11.6667 23.3333ZM11.6667 30C12.1087 30 12.5326 29.8244 12.8452 29.5118C13.1577 29.1993 13.3333 28.7754 13.3333 28.3333C13.3333 27.8913 13.1577 27.4674 12.8452 27.1548C12.5326 26.8423 12.1087 26.6667 11.6667 26.6667C11.2246 26.6667 10.8007 26.8423 10.4882 27.1548C10.1756 27.4674 10 27.8913 10 28.3333C10 28.7754 10.1756 29.1993 10.4882 29.5118C10.8007 29.8244 11.2246 30 11.6667 30Z"
                                    fill="white" />
                            </svg> On 1st of Sep, 2024</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center"><button
                            class="webinar-btn shadow-none border border-white rounded text-white p-3 mb-3">Join
                            this
                            webinar at just ₹199</button></div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <p class="date-sec text-center text-white p-3 rounded mb-3"> <svg width="40" height="40"
                                viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 3.33331C17.8113 3.33331 15.6441 3.76441 13.622 4.60199C11.5999 5.43957 9.76257 6.66722 8.21493 8.21487C5.08932 11.3405 3.33337 15.5797 3.33337 20C3.33337 24.4203 5.08932 28.6595 8.21493 31.7851C9.76257 33.3327 11.5999 34.5604 13.622 35.398C15.6441 36.2355 17.8113 36.6666 20 36.6666C24.4203 36.6666 28.6595 34.9107 31.7852 31.7851C34.9108 28.6595 36.6667 24.4203 36.6667 20C36.6667 17.8113 36.2356 15.644 35.398 13.6219C34.5605 11.5998 33.3328 9.76251 31.7852 8.21487C30.2375 6.66722 28.4002 5.43957 26.3781 4.60199C24.356 3.76441 22.1887 3.33331 20 3.33331ZM27 27L18.3334 21.6666V11.6666H20.8334V20.3333L28.3334 24.8333L27 27Z"
                                    fill="white" />
                            </svg> 11:30 am </p>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- middle-sec -->
    <section class="middle-sec pt-5">
        <div class="container">
            <div class="Omansh-Health-sec">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="image-sec p-3 p-sm-3 p-xs-3 p-md-3 p-xl-5 p-lg-3 p-xxl-5">
                            <h2 class="sub-heading-text text-white pt-0 pt-sm-0 pt-xs-0 pt-md-4 pt-xl-5 pt-lg-5"> Omansh
                                Health & Fitness</h2>
                            <p class="health-des text-white">Discover essential tips to make your delivery smoother and
                                less stressful.</p>
                            <button
                                class="webinar-btn shadow-none border-0 rounded text-white py-2 px-3 mb-3 mb-sm-3 mb-xs-3 mb-md-3 mb-lg-0 mb-xl-0 mt-4">Sign up
                                now at ₹199</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- why-choose-us-sec -->
    <section class="why-choose-us-sec py-5">
        <div class="container">
            <div class="why-choose-us-sec">
                
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pt-0 pt-sm-0  pt-xs-0 pt-md-3 pt-lg-5 pt-xl-5">
                <h2 class="sub-heading  text-center pt-5">Why choose us</h2>
                <div class="omansh-listing pt-0 pt-sm-0  pt-xs-0 pt-md-3 pt-lg-5 pt-xl-5">
                    <ul class="list-group">
                        <li class="list-group-item border-0"> <svg width="25" height="38" viewBox="0 0 38 38"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M37.75 19C37.75 8.645 29.355 0.25 19 0.249999C8.645 0.249999 0.25 8.645 0.249999 19C0.249999 29.355 8.645 37.75 19 37.75C29.355 37.75 37.75 29.355 37.75 19ZM20.0594 22.2144L8.375 22.2144L8.375 15.7856L20.0594 15.7856L20.0594 9L29.625 19L20.0594 29L20.0594 22.2144Z"
                                    fill="#004B2A" />
                            </svg> At Omansh, we prioritize your well-being and aim to provide holistic support
                            throughout your pregnancy journey.</li>
                        <li class="list-group-item border-0"><svg width="25" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M37.75 19C37.75 8.645 29.355 0.25 19 0.249999C8.645 0.249999 0.25 8.645 0.249999 19C0.249999 29.355 8.645 37.75 19 37.75C29.355 37.75 37.75 29.355 37.75 19ZM20.0594 22.2144L8.375 22.2144L8.375 15.7856L20.0594 15.7856L20.0594 9L29.625 19L20.0594 29L20.0594 22.2144Z"
                                    fill="#004B2A" />
                            </svg> Our team of experts is dedicated to empowering you with knowledge and confidence.
                        </li>

                    </ul>
                    <div class="whychoose-btn text-center">
                        <button
                            class="webinar-btn shadow-none border-0 rounded text-white py-2 px-3 mt-4 text-center">Sign up now at ₹199</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="main-header section-bg">
        <div class="container">
            <h5 class="top-heading m-0 py-4 text-white text-center">Look What Our Previous Participants Have
                To Say</h5>
        </div>
    </div>
    <div class="container my-5">
        <div class="review-slider">
            <div class="row">
                <div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item">
                        <div class="bg-white rounded review-card">
                            <div class="review-header">
                                <img src="{{ asset('img/webinar/akriti.png ') }}" alt="User Image"
                                    class="review-avatar">
                                <div class="review-details">
                                    <h4>Akriti Jain</h4>
                                    <span class="review-time">2 month ago</span>
                                </div>
                            </div>
                            <div class="review-content">
                                <div class="review-stars">
                                    <span>⭐⭐⭐⭐⭐</span>
                                </div><p>
                                Yoga during pregnancy helped me in many ways. I joined Omansh after my 6th month. Dr.
                                Garima kept me motivated, gave suggestions/guidance at every step of my pregnancy. The
                                theory class on labour helped us a lot, specially in understanding what exactly labour
                                is and what we should do at the time of contractions. Exercises during the classes
                                helped in improving leg and arm strength. It has also helped me in normal delivery of my
                                baby. Contractions during the labour time were unbearable and exercises taught by Dr.
                                Garima helped me relax. I would like to thank Omansh team and specially Dr. Garima for
                                all the support and help.<p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item">
                        <div class="review-card bg-white rounded ">
                            <div class="review-header">
                                <img src="{{ asset('img/webinar/asees.png ') }}" alt="User Image" class="review-avatar">
                                <div class="review-details">
                                    <h4>Asees Kaur</h4>
                                    <span class="review-time">2 months ago</span>
                                </div>
                            </div>
                            <div class="review-content">
                                <div class="review-stars">
                                    <span>⭐⭐⭐⭐⭐</span>
                                </div>
                                <p>
                                    100% recommendation for this class for all the pregnant moms. I delivered my second
                                    baby
                                    normal without epidural. I mean that’s a big achievement for me and all thanks to
                                    Dr.
                                    Garima. Her voice was echoing throughout delivery time. Where to focus, what to
                                    meditate
                                    at what time. Trust me we need to work out during pregnancy for not just the sake of
                                    normal delivery but for fitness and our mental health.
                                    Dr. Garima was always there whenever I needed guidance throughout my pregnancy.
                                    Mostly
                                    near my delivery time. Thank you so much for your abundant support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item">
                        <div class="review-card">
                            <div class="review-header">
                                <img src="{{ asset('img/webinar/gopika-vyas.png') }}" alt="User Image" class="review-avatar">
                                <div class="review-details">
                                    <h4>Gopika Vyas</h4>
                                    <span class="review-time">4 months ago</span>
                                </div>
                            </div>
                            <div class="review-content">
                                <div class="review-stars">
                                    <span>⭐⭐⭐⭐⭐</span>
                                </div>
                                <p>
                                She has been a great support and guided me throughout my pregnancy. My labour was short and I had a very smooth normal delivery. I would strongly recommend Dr. Garima and Omansh for prenatal yoga. Just join her and you will get a feeling that it was the “Best decision ever”! Good luck Garima, I shall see you soon for post-natal training ! Love and Light !❤️✨
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="webinar-btn shadow-none border-0 rounded text-white py-2 px-3 mt-5 text-center">Sign up now at ₹199</button>
        </div>
    </div>
  
    <div class="container">
        <div class="video-webinar-section pb-5">
            <div class="row">
         <div class="col-md-4 mt-3 mt-sm-3 mt-xs-3 mt-md-0 mt-xl-0 mt-lg-0"> <a href="https://www.youtube.com/embed/aPtzvIxzgdU" data-toggle="lightbox" data-type="iframe" class=" h-100 position-relative">
                    <img src="{{ asset('img/webinar/istimage.png') }}" class="img-fluid">
                    <i class="fa-brands fa-youtube"></i>
                </a>
</div>
         <div class="col-md-4 mt-3 mt-sm-3 mt-xs-3 mt-md-0 mt-xl-0 mt-lg-0"> <a href="https://youtube.com/embed/wus_-JT68Kg" data-toggle="lightbox"  data-type="iframe" class="position-relative" >
		<img src="{{ asset('img/webinar/secondimage.png') }}" class="img-fluid">
        <i class="fa-brands fa-youtube"></i>
	</a></div>
         <div class="col-md-4 mt-3 mt-sm-3 mt-xs-3 mt-md-0 mt-xl-0 mt-lg-0">
         <a href="https://www.youtube.com/watch?v=bb7phQ6CjkA" data-toggle="lightbox"  data-type="iframe" class="position-relative">
		<img src="{{ asset('img/webinar/third.png') }}" class="img-fluid">
        <i class="fa-brands fa-youtube"></i>
	</a>
         </div>
            </div>
</div>
</div>
    <div class="main-header section-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h5 class="top-heading m-0 py-4 text-white text-center">We’ve got a good news for you!</h5>
                </div>


            </div>

        </div>

    </div>

    <div class="banner-sec-two">
        <div class="container">
            <!-- desktop header -->
            <div class="banner-text-two">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h5 class="top-heading m-0 py-0 py-lg-4 py-xl-4 py-md-4 py-xs-4 py-sm-4 text-white text-center">
                            Whether you are a first time mom or
                            experienced. our webinar cover from understanding labor signs to effective Breathing
                            Techniques, pain management, Empowering you with all knowledge you need for a confident
                            Birth Experience</h5>
                    </div>
                    <div class="whychoose-btn text-center">
                        <button
                            class="webinar-btn shadow-none border-0 rounded text-white py-2 px-3 mt-4 text-center">Sign up
                                now at ₹199</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <section class="why-choose-us-sec py-5">
        <div class="container">
            <div class="why-choose-us-sec">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                        <h2
                            class="sub-heading  text-center mb-0 mb-xs-0 pt-0 pt-sm-0 pt-xs-0 pt-md-2 pt-xl-5 pt-lg-5 mb-sm-0 mb-md-3 mb-xl-4 mb-lg-4">
                            Meet Our Expert</h2>
                        <div class="omansh-listing pt-3">
                            <p class="health-des text-dark text-center">Get personalized advice and answers to your
                                questions <br>from experts in the field</p>
                            <div class="image-sec text-center pt-3">
                                <img class="w-100 h-100" alt="expert" src="{{ asset('img/webinar/meet-expert.png ') }}">
                                <div class="client-name">
                                    <h5 class="top-heading m-0 pt-5 text-dark text-center">Dr. GARIMA BISWAS (PT)</h5>
                                    <p class="desc-sec pt-4 text-dark">Consultant Physiotherapist, Founder of Omansh
                                        Health and Fitness, Obstetrics and Pelvic Floor Rehab Therapist, Labor and Child
                                        Birth Educator, Antenatal and Post Natal Fitness Expert</p>
                                </div>
                            </div>
                            <div class="whychoose-btn text-center">
                                <button
                                    class="webinar-btn shadow-none border-0 rounded text-white py-2 px-3 my-4 text-center">Sign up
                                now at ₹199</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-0 mt-sm-0 mt-xs-0 mt-md-2 mt-xl-3 mt-lg-3">
                        <h2 class=" text-center pt-4 pt-sm-4 pt-xs-5 pt-md-4 pt-lg-5 pt-xl-5 sub-heading">Questions
                        </h2>
                        <div class="omansh-listing">
                            <p class="health-des text-dark pt-0 pt-sm-0 pt-xs-0 pt-md-2 pt-lg-4 pt-xl-4 text-center">
                                Still have any questions</p>
                            <ul class="list-group">
                                <li class="list-group-item border-0"> <svg width="25" height="38" viewBox="0 0 38 38"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M37.75 19C37.75 8.645 29.355 0.25 19 0.249999C8.645 0.249999 0.25 8.645 0.249999 19C0.249999 29.355 8.645 37.75 19 37.75C29.355 37.75 37.75 29.355 37.75 19ZM20.0594 22.2144L8.375 22.2144L8.375 15.7856L20.0594 15.7856L20.0594 9L29.625 19L20.0594 29L20.0594 22.2144Z"
                                            fill="#004B2A" />
                                    </svg> How can I manage my pain without epidural?</li>
                                <li class="list-group-item border-0"><svg width="25" height="38" viewBox="0 0 38 38"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M37.75 19C37.75 8.645 29.355 0.25 19 0.249999C8.645 0.249999 0.25 8.645 0.249999 19C0.249999 29.355 8.645 37.75 19 37.75C29.355 37.75 37.75 29.355 37.75 19ZM20.0594 22.2144L8.375 22.2144L8.375 15.7856L20.0594 15.7856L20.0594 9L29.625 19L20.0594 29L20.0594 22.2144Z"
                                            fill="#004B2A" />
                                    </svg> How to dilate cervix faster?
                                </li>
                                <li class="list-group-item border-0"><svg width="25" height="38" viewBox="0 0 38 38"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M37.75 19C37.75 8.645 29.355 0.25 19 0.249999C8.645 0.249999 0.25 8.645 0.249999 19C0.249999 29.355 8.645 37.75 19 37.75C29.355 37.75 37.75 29.355 37.75 19ZM20.0594 22.2144L8.375 22.2144L8.375 15.7856L20.0594 15.7856L20.0594 9L29.625 19L20.0594 29L20.0594 22.2144Z"
                                            fill="#004B2A" />
                                    </svg>What is the best position for delivery?
                                </li>
                                <li class="list-group-item border-0"><svg width="25" height="38" viewBox="0 0 38 38"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M37.75 19C37.75 8.645 29.355 0.25 19 0.249999C8.645 0.249999 0.25 8.645 0.249999 19C0.249999 29.355 8.645 37.75 19 37.75C29.355 37.75 37.75 29.355 37.75 19ZM20.0594 22.2144L8.375 22.2144L8.375 15.7856L20.0594 15.7856L20.0594 9L29.625 19L20.0594 29L20.0594 22.2144Z"
                                            fill="#004B2A" />
                                    </svg>What is the best way of pushing?
                                </li>
                                <li class="list-group-item border-0"><svg width="25" height="38" viewBox="0 0 38 38"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M37.75 19C37.75 8.645 29.355 0.25 19 0.249999C8.645 0.249999 0.25 8.645 0.249999 19C0.249999 29.355 8.645 37.75 19 37.75C29.355 37.75 37.75 29.355 37.75 19ZM20.0594 22.2144L8.375 22.2144L8.375 15.7856L20.0594 15.7856L20.0594 9L29.625 19L20.0594 29L20.0594 22.2144Z"
                                            fill="#004B2A" />
                                    </svg> What are your biggest questions about postpartum recovery?
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--join-webinar-->
    <section class="bottom-banner-section">
        <div class="container">
            <div class="webinar-sec">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="omansh-listing">
                            <p class="webinar-des text-center">Join our Webinar</p>
                        </div>
                        <div class="whychoose-btn text-center pt-4">
                            <button
                                class="webinar-btn shadow-none border-0 rounded text-white py-2 px-3  text-center">Sign up
                                now at ₹199</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bottom-footer section-sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h6 class="top-heading m-0 py-4 text-white text-center">Terms & Condition Apply*</h6>
                </div>

            </div>
        </div>

    </div>
    <!--<div class="section-bg">-->
    <!--    <div class="container text-center">-->
    <!--        <div class="row justify-content-center align-items-center py-4">-->
    <!--            <div class="col-12 col-xl-2 col-md-2 col-lg-2 col-sm-12 col-xs-12">-->
    <!--                <div class="timer-title-custom text-white">Offer Expires in</div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-xl-7 col-md-7 col-lg-7 col-sm-12 col-xs-12 d-flex time-box">-->
    <!--                <div id="days-custom" class="timer-section-custom timer-box-custom">-->
    <!--                    <div class="text-white">00</div>-->
    <!--                    <span class="text-white">Days</span>-->
    <!--                </div>-->
    <!--                <div id="hours-custom" class="timer-section-custom timer-box-custom">-->
    <!--                    <div class="text-white">00</div>-->
    <!--                    <span class="text-white">Hours</span>-->
    <!--                </div>-->
    <!--                <div id="minutes-custom" class="timer-section-custom timer-box-custom">-->
    <!--                    <div class="text-white">00</div>-->
    <!--                    <span class="text-white">Minutes</span>-->
    <!--                </div>-->
    <!--                <div id="seconds-custom" class="timer-section-custom timer-box-custom">-->
    <!--                    <div class="text-white">00</div>-->
    <!--                    <span class="text-white">Seconds</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-12 col-xl-2 col-md-2 col-lg-2 col-sm-12 col-xs-12">-->
    <!--                <button-->
    <!--                    class="webinar-btn shadow-none border-0 rounded text-white py-2 px-3 mt-3 mt-sm-0 mt-xs-0 mt-md-3 mt-lg-0 mt-xl-0  text-center">Sign up-->
    <!--                            now at ₹199</button>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

  <!-- Signup Modal -->
  <div class="modal booking-form fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">

      <div class="modal-content webinar-modal inner-appointment-box ">
          <div class="feedback-heading px-3 d-flex justify-content-center align-items-center">
              <img src="/img/aboutus_top_shape 2.png">
              <h2 class="text-white px-3 text-center">Registration Form</h2>
              <img src="/img/aboutus_top_shape 2.png">
          </div>

          <div class="modal-body p-5">
              <form id="signupForm">
                  @csrf
                  <div class="mb-3">
                      <label for="name" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-3">
                      <label for="whatsappNumber" class="form-label">Phone Number</label>
                     <input id="phone" name="whatsapp_number" type="tel" id="whatsappNumber" class="form-control w-100" placeholder="Enter Mobile Number"
                            pattern="[0-9]*" maxlength="10" required>
                  </div>
                  <div class="mb-3">
                      <label for="age" class="form-label">Age</label>
                      <input type="text" class="form-control" id="age" name="age" required>
                  </div>
                  
                  <div class="mb-3">
                      <label for="estimatedDueDate" class="form-label">Estimated Due Date (EDD)</label>
                      <input type="text" class="form-control datepicker" name="estimated_due_date"
                          id="estimatedDueDate" autocomplete="off" required />
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Current trimester</label>
                      <div class="checkbox-group">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="current_trimester"
                                  id="trimesterOne" value="First Trimester"
                                  {{ old('current_trimester') == 'First Trimester' ? 'checked' : '' }}>
                              <label class="form-check-label" for="trimester1">
                                  First Trimester (0-13 Weeks)
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="current_trimester"
                                  id="trimesterSecond" value="Second Trimester"
                                  {{ old('current_trimester') == 'Second Trimester' ? 'checked' : '' }}>
                              <label class="form-check-label" for="trimester2">
                                  Second Trimester (14-27 Weeks)
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="current_trimester"
                                  id="trimesterThird" value="Third Trimester"
                                  {{ old('current_trimester') == 'Third Trimester' ? 'checked' : '' }}>
                              <label class="form-check-label" for="trimester3">
                                  Third Trimester (27+ Weeks)
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Is this your first pregnancy</label>
                      <div class="checkbox-group">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="first_pregnancy"
                                  id="yes" value="Yes"
                                  {{ old('current_trimester') == 'Yes' ? 'checked' : '' }}>
                              <label class="form-check-label" for="yes">
                                  Yes
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="first_pregnancy"
                                  id="no" value="No"
                                  {{ old('current_trimester') == 'No' ? 'checked' : '' }}>
                              <label class="form-check-label" for="no">
                                  No
                              </label>
                          </div>

                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="previousPregnancies" class="form-label">If no, how many previous pregnancies
                          have you had?</label>
                      <textarea rows="3" name="previous_pregnancy" id="previous_pregnancy" class="form-control" ></textarea>
                  </div>
                  <div class="mb-3">
                      <label for="pregnancyComplications" class="form-label">Have you experienced any pregnancy
                          complications so far?</label>
                      <textarea rows="3" name="experience_pregnancy_complications" id="pregnancyComplications" class="form-control" required></textarea>
                  </div>
                  <div class="mb-3">
                      <label for="typeOfDelivery" class="form-label">Are you planning a specific type of
                          delivery ( e.g., natural birth, water birth, C-section)?</label>
                      <textarea rows="3" name="type_of_delivery" id="typeOfDelivery" class="form-control" required></textarea>
                  </div>
                  <div class="mb-3">
                      <label for="specialMedicalConditions" class="form-label">Are you receiving any special
                          care or have any medical conditions we should be aware of?</label>
                      <textarea rows="3" name="medical_conditions" id="specialMedicalConditions" class="form-control"
                          required></textarea>
                  </div>
                  <h5><strong>Your Birth Preferences</strong></h5>
                  <div class="mb-3">
                        <label class="form-label">What are your primary goals for this class?</label>
                            <div class="checkbox-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="primary_goal[]"
                                            id="learningPainManagementTechniques"
                                            value="Learning pain management techniques"
                                            {{ in_array('Learning pain management techniques', old('primary_goal', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="learningPainManagementTechniques">
                                            Learning pain management techniques
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="primary_goal[]"
                                            id="understandingLaborStages" value="Understanding labor stages"
                                            {{ in_array('Understanding labor stages', old('primary_goal', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="understandingLaborStages">
                                            Understanding labor stages
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="primary_goal[]"
                                            id="preparingForNaturalBirth" value="Preparing for natural birth"
                                            {{ in_array('Preparing for natural birth', old('primary_goal', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="preparingForNaturalBirth">
                                            Preparing for natural birth
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="primary_goal[]"
                                            id="partnerInvolvementAndSupport" value="Partner involvement and support"
                                            {{ in_array('Partner involvement and support', old('primary_goal', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="partnerInvolvementAndSupport">
                                            Partner involvement and support
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="primary_goal[]"
                                            id="postpartumRecovery" value="Postpartum recovery"
                                            {{ in_array('Postpartum recovery', old('primary_goal', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="postpartumRecovery">
                                            Postpartum recovery
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="primary_goal[]"
                                            id="other" value="Other"
                                            {{ in_array('Other', old('primary_goal', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="other">
                                            Other
                                        </label>
                                </div>
                            </div>
                        </div>
                  <div class="mb-3">
                      <label for="questionsAboutChildBirth" class="form-label">Do you have any specific concerns
                          or questions about childbirth ?</label>
                      <textarea rows="3" name="concerns_about_childbirth" id="questionsAboutChildBirth" class="form-control"
                          required></textarea>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">How did you hear about this class?</label>
                      <div class="checkbox-group">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="hear_about_us"
                                  id="socialMedia" value="Social media ( Instagram, Facebook, etc.)"
                                  {{ old('current_trimester') == 'Social media ( Instagram, Facebook, etc.)' ? 'checked' : '' }}>
                              <label class="form-check-label" for="socialMedia">
                                  Social media ( Instagram, Facebook, etc.)
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="hear_about_us" id="Website"
                                  value="Website" {{ old('current_trimester') == 'Website' ? 'checked' : '' }}>
                              <label class="form-check-label" for="Website">
                                  Website
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="hear_about_us" id="referral"
                                  value="Friend/Referral"
                                  {{ old('current_trimester') == 'Friend/Referral' ? 'checked' : '' }}>
                              <label class="form-check-label" for="preparingForNaturalBirth">
                                  Friend/Referral
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="hear_about_us" id="doctor"
                                  value="Doctor" {{ old('current_trimester') == 'Doctor' ? 'checked' : '' }}>
                              <label class="form-check-label" for="doctor">
                                  Doctor/Midwife
                              </label>
                          </div>

                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="hear_about_us" id="other"
                                  value="Other" {{ old('current_trimester') == 'Other' ? 'checked' : '' }}>
                              <label class="form-check-label" for="other">
                                  Other
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Would you like to receive updates and tips about pregnancy and
                          childbirth?</label>
                      <div class="checkbox-group">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="like_receive_updates"
                                  id="yes" value="Yes"
                                  {{ old('current_trimester') == 'Yes' ? 'checked' : '' }}>
                              <label class="form-check-label" for="updates_regarding_childbirth">
                                  Yes
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="like_receive_updates"
                                  id="no" value="No"
                                  {{ old('current_trimester') == 'No' ? 'checked' : '' }}>
                              <label class="form-check-label" for="updates_regarding_childbirth">
                                  No
                              </label>
                          </div>

                      </div>
                  </div>

                    <div class="text-center">
                            <button type="submit" class="mt-3 border-0 get_started_btn appointment-btn">Submit And
                                Pay</button></div>
              </form>
          </div>
      </div>
  </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="successModalLabel">Payment Successful</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Your payment was successful. Thank you for registering for the webinar!</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

<!-- Unsuccessful Modal -->
<div class="modal fade" id="unsuccessfulModal" tabindex="-1" aria-labelledby="unsuccessfulModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="unsuccessfulModalLabel">Payment Unsuccessful</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>We're sorry, but your payment was unsuccessful. Please try again or contact support if the issue
                persists.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="retryPayment()">Try Again</button>
        </div>
    </div>
</div>
</div>


    <!-- video -->
     <!-- modal for testimonal -->
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
</main>
<script>
function countdownTimerCustom() {
    // Set the date we're counting down to
    const countDownDate = new Date("Aug 18, 2024 00:00:00").getTime();

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
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    $('#clse').click(function() {

        $('#signupModal').modal().hide();
        setTimeout(() => {
            $('.modal-backdrop').remove();
        }, 200);
    })
    // Get all buttons with the class 'webinar-btn'
    var buttons = document.querySelectorAll('.webinar-btn');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('signupModal'));
            myModal.show();
        });
    });

    // Handle form submission
    document.getElementById('signupForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        var formData = new FormData(this);

          // Get form data
          var formData = new FormData(this);
                if (!validateForm()) {
                    alert(
                        "Please ensure all required fields are filled and at least one option is selected where applicable."
                    );
                    return;
                }
                
                if (!validatePrimaryGoal()) {
                    alert("Please select at least one primary goal.");
                }

                function validateForm() {
                    // Check radio button groups
                    var radioGroups = ['current_trimester', 'first_pregnancy','hear_about_us','like_receive_updates'
                    ];
                    for (var group of radioGroups) {
                        if (!document.querySelector(`input[name="${group}"]:checked`)) {
                            return false;
                        }
                    }
                    return true;

                }
                
                 function validatePrimaryGoal() {
                    var selectedGoals = $('input[name="primary_goal[]"]:checked').length;
                    return selectedGoals > 0;
                }


        // Send POST request to the route
        fetch("{{ route('frontend.payment.store') }}", {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                        .getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
               

                $('#signupModal').modal().hide();
                setTimeout(() => {
                    $('.modal-backdrop').remove();
                }, 200);


                // Open Razorpay checkout
                if (data.order_id && data.razorpay_key) {
                    var options = {
                        "key": data.razorpay_key,
                        "amount": data.amount,
                        "currency": "INR",
                        "name": "Omansh Health & Fitness",
                        "description": "Webinar Registration",
                        "image": "https://omansh.org/img/logo.png",
                        "order_id": data.order_id,
                        "handler": function(response) {
                            // Send the payment ID to your server to verify the payment
                            fetch("{{ route('frontend.payment.verify') }}", {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector(
                                                'meta[name="csrf-token"]')
                                            .getAttribute('content')
                                    },
                                    body: JSON.stringify({
                                        razorpay_payment_id: response
                                            .razorpay_payment_id,
                                        razorpay_order_id: response
                                            .razorpay_order_id,
                                        razorpay_signature: response
                                            .razorpay_signature
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        var successModal = new bootstrap.Modal(
                                                    document.getElementById(
                                                        'successModal'));
                                                successModal.show();
                                    } else {
                                        var unsuccessfulModal = new bootstrap.Modal(
                                                    document.getElementById(
                                                        'unsuccessfulModal'));
                                                unsuccessfulModal.show();
                                    }
                                });
                        },
                        "prefill": {
                            "name": formData.get('name'),
                            "email": formData.get('email'),
                            "contact": formData.get('whatsapp_number')
                        },
                        "theme": {
                            "color": "#cba983"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                } else {
                    console.error('Order details not received');
                }

            })
            .catch((error) => {
                console.error('Error:', error);
                // Handle errors here
                // For example, show an error message to the user
            });
    });
});
 // Function to retry payment
        function retryPayment() {
            // Close the unsuccessful modal
            var unsuccessfulModal = bootstrap.Modal.getInstance(document.getElementById('unsuccessfulModal'));
            unsuccessfulModal.hide();

            // Reopen the Razorpay payment window
            rzp1.open();
        }

        // Close button for signup modal
        document.getElementById('clse').addEventListener('click', function() {
            $('#signupModal').modal('hide');
            setTimeout(() => {
                $('.modal-backdrop').remove();
            }, 200);
        });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

       <script>
          $(function() {
    $("#estimatedDueDate").datepicker();
});
        </script>

@endsection