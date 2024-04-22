@extends('frontend.layouts.app')

@section('content')


<div class="sub-banner-section doctortraning-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Corporate Training</h1>
                            <p class="text-center" data-aos="fade-right">Elevate your team's performance and well-being
                                with our bespoke corporate training programs, designed to inspire, engage, and
                                transform.</p>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a></span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span">
                                    doctortraining</span>
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
    </div>
    </section>
</div>
<!-- ABOUT US SECTION -->
<section class="aboutpage_aboutus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                <div class="aboutpage_aboutus_image workshop">
                    <figure class="mb-0">
                        <img src="{{asset($workshops[0]->featured_image)}}" alt="corporate-training" class="img-fluid">
                    </figure>

                </div>
                <figure class="aboutus_top_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="aboutus_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="ps-4 ">


                    <h5>Omansh’s Corporate Training</h5>
                    <h2> {!! $workshops[0]->name!!}</h2>
                    <div> {!! $workshops[0]->content!!} </div>
                    <div class="btn_wrapper main-btn">
                        <a href="/contact" class="text-decoration-none read_more_btn">Enroll Now</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>

<!-- why it is important -->
<section class="why-it-is-important py-4">
    <div class="container">
        <h2 class="text-center">Why it is Important?</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8 col-md-10 col-sm-12 col-xs-12 col-12  ">
                <p class="text-center">Corporate yoga, the practice of offering yoga sessions within a workplace
                    environment, has gained popularity due to several reasons:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="corporate-box">
                    <div class="heading d-flex align-items-center"> <span><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 15.127L13.208 16.335C13.2947 16.4217 13.392 16.465 13.5 16.465C13.608 16.465 13.7053 16.4217 13.792 16.335L15 15.127L15.662 15.788C15.7473 15.8747 15.8483 15.921 15.965 15.927C16.0817 15.9337 16.1893 15.8873 16.288 15.788C16.3873 15.6893 16.437 15.585 16.437 15.475C16.437 15.365 16.3873 15.2607 16.288 15.162L15.292 14.165C15.2053 14.0783 15.108 14.035 15 14.035C14.892 14.035 14.7947 14.0783 14.708 14.165L13.5 15.373L12.292 14.165C12.2053 14.0783 12.108 14.035 12 14.035C11.892 14.035 11.7947 14.0783 11.708 14.165L10.5 15.373L9.292 14.165C9.20533 14.0783 9.108 14.035 9 14.035C8.892 14.035 8.79467 14.0783 8.708 14.165L7.712 15.162C7.62533 15.2473 7.579 15.3483 7.573 15.465C7.56633 15.5817 7.61267 15.6893 7.712 15.788C7.81067 15.8873 7.915 15.937 8.025 15.937C8.135 15.937 8.23933 15.8873 8.338 15.788L9 15.127L10.208 16.335C10.2947 16.4217 10.392 16.465 10.5 16.465C10.608 16.465 10.7053 16.4217 10.792 16.335L12 15.127ZM9.187 10L7.54 11.2C7.438 11.2693 7.379 11.3623 7.363 11.479C7.34633 11.5957 7.373 11.7053 7.443 11.808C7.513 11.9107 7.609 11.9763 7.731 12.005C7.85367 12.0337 7.96633 12.007 8.069 11.925L10.244 10.323C10.352 10.2363 10.406 10.1287 10.406 10C10.406 9.87133 10.352 9.76367 10.244 9.677L8.05 8.075C7.94733 7.993 7.84067 7.96633 7.73 7.995C7.62 8.02367 7.524 8.08933 7.442 8.192C7.37267 8.29467 7.34533 8.40467 7.36 8.522C7.37333 8.638 7.43333 8.73067 7.54 8.8L9.187 10ZM14.813 10L16.46 8.8C16.562 8.73067 16.6213 8.63767 16.638 8.521C16.654 8.40433 16.6273 8.29467 16.558 8.192C16.4887 8.08933 16.3923 8.02367 16.269 7.995C16.1463 7.96633 16.0337 7.993 15.931 8.075L13.756 9.677C13.648 9.76367 13.594 9.87133 13.594 10C13.594 10.1287 13.648 10.2363 13.756 10.323L15.95 11.925C16.0527 12.007 16.1593 12.0337 16.27 12.005C16.38 11.9763 16.476 11.9107 16.558 11.808C16.6273 11.7053 16.6547 11.5953 16.64 11.478C16.6267 11.362 16.5667 11.2693 16.46 11.2L14.813 10ZM12 21C10.758 21 9.58933 20.7633 8.494 20.29C7.39867 19.8167 6.44633 19.1743 5.637 18.363C4.82567 17.553 4.18333 16.6007 3.71 15.506C3.23667 14.4107 3 13.242 3 12C3 10.758 3.23667 9.58933 3.71 8.494C4.184 7.39933 4.82633 6.447 5.637 5.637C6.447 4.82567 7.39933 4.18333 8.494 3.71C9.58933 3.23667 10.758 3 12 3C13.242 3 14.4107 3.23667 15.506 3.71C16.6007 4.184 17.553 4.82633 18.363 5.637C19.1737 6.447 19.8157 7.39933 20.289 8.494C20.763 9.58933 21 10.758 21 12C21 13.242 20.7633 14.4107 20.29 15.506C19.816 16.6007 19.1737 17.553 18.363 18.363C17.553 19.1737 16.6007 19.8157 15.506 20.289C14.4107 20.763 13.242 21 12 21Z"
                                    fill="#004B2A" />
                            </svg>
                        </span>
                        <h3 class="ms-2 mt-1">Stress Reduction</h3>
                    </div>
                    <p>Modern workplaces often come with high levels of stress due to demanding deadlines, long
                        working hours, and pressure to perform. Yoga offers techniques such as breathing
                        exercises, meditation, and physical postures that can help reduce stress levels and
                        promote relaxation among employees.</p>

                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="corporate-box">
                    <div class="heading d-flex align-items-center"> <svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.962 18.469C6.019 16.214 2 12.489 2 8.96698C2 3.08298 7.5 0.885975 12 5.42998C16.5 0.885975 22 3.08298 22 8.96698C22 12.489 17.98 16.214 15.038 18.469C13.706 19.489 13.04 20 12 20C10.96 20 10.294 19.49 8.962 18.469ZM16.5 6.24998C16.6989 6.24998 16.8897 6.32899 17.0303 6.46965C17.171 6.6103 17.25 6.80106 17.25 6.99998V8.24998H18.5C18.6989 8.24998 18.8897 8.32899 19.0303 8.46965C19.171 8.6103 19.25 8.80106 19.25 8.99998C19.25 9.19889 19.171 9.38965 19.0303 9.53031C18.8897 9.67096 18.6989 9.74998 18.5 9.74998H17.25V11C17.25 11.1989 17.171 11.3897 17.0303 11.5303C16.8897 11.671 16.6989 11.75 16.5 11.75C16.3011 11.75 16.1103 11.671 15.9697 11.5303C15.829 11.3897 15.75 11.1989 15.75 11V9.74998H14.5C14.3011 9.74998 14.1103 9.67096 13.9697 9.53031C13.829 9.38965 13.75 9.19889 13.75 8.99998C13.75 8.80106 13.829 8.6103 13.9697 8.46965C14.1103 8.32899 14.3011 8.24998 14.5 8.24998H15.75V6.99998C15.75 6.80106 15.829 6.6103 15.9697 6.46965C16.1103 6.32899 16.3011 6.24998 16.5 6.24998Z"
                                fill="#004B2A" />
                        </svg>

                        </span>
                        <h3 class="ms-2 mt-1">Improved Physical Health</h3>
                    </div>
                    <p>Sedentary desk jobs can lead to various health issues such as back pain, stiffness, and poor
                        posture. Corporate yoga sessions encourage employees to engage in physical activity, promoting
                        flexibility, strength, and overall physical well-being.</p>

                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="corporate-box">
                    <div class="heading d-flex align-items-center"> <span><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.0008 2C12.9434 2.00013 14.8195 2.70688 16.2794 3.98843C17.7392 5.26999 18.6831 7.03882 18.9348 8.965L21.1848 12.504C21.3328 12.737 21.3028 13.084 20.9598 13.232L19.0008 14.07V17C19.0008 17.5304 18.7901 18.0391 18.415 18.4142C18.0399 18.7893 17.5312 19 17.0008 19H15.0018L15.0008 22H6.00081V18.306C6.00081 17.126 5.56481 16.009 4.75581 15.001C3.81351 13.8245 3.22279 12.4056 3.0517 10.908C2.88061 9.41036 3.13613 7.89486 3.7888 6.53611C4.44147 5.17737 5.46474 4.03066 6.74071 3.22811C8.01668 2.42557 9.49343 1.99985 11.0008 2ZM10.4708 7.763C10.1408 7.44416 9.6988 7.26768 9.23995 7.27157C8.78111 7.27546 8.34215 7.45942 8.01762 7.78382C7.69309 8.10822 7.50896 8.5471 7.50488 9.00595C7.5008 9.46479 7.6771 9.90688 7.99581 10.237L11.0008 13.243L14.0058 10.237C14.1729 10.0755 14.3062 9.8824 14.3979 9.66888C14.4895 9.45535 14.5378 9.22571 14.5397 8.99334C14.5417 8.76098 14.4974 8.53055 14.4094 8.3155C14.3213 8.10045 14.1913 7.90509 14.027 7.74081C13.8626 7.57653 13.6672 7.44662 13.4521 7.35868C13.2371 7.27073 13.0066 7.2265 12.7742 7.22856C12.5419 7.23063 12.3123 7.27895 12.0988 7.37071C11.8853 7.46247 11.6922 7.59582 11.5308 7.763L11.0008 8.293L10.4708 7.763Z"
                                    fill="#004B2A" />
                            </svg>

                        </span>
                        <h3 class="ms-2 mt-1">Enhanced Mental Clarity and Focus</h3>
                    </div>
                    <p>Yoga practices, particularly mindfulness meditation, can improve mental clarity, focus, and
                        concentration. Employees who regularly practice yoga may experience better productivity and
                        decision-making abilities.</p>

                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="corporate-box">
                    <div class="heading d-flex align-items-center"> <span><svg width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99935 8.33329C10.8834 8.33329 11.7312 7.9821 12.3564 7.35698C12.9815 6.73186 13.3327 5.88401 13.3327 4.99996C13.3327 4.1159 12.9815 3.26806 12.3564 2.64294C11.7312 2.01782 10.8834 1.66663 9.99935 1.66663C9.11529 1.66663 8.26745 2.01782 7.64233 2.64294C7.0172 3.26806 6.66602 4.1159 6.66602 4.99996C6.66602 5.88401 7.0172 6.73186 7.64233 7.35698C8.26745 7.9821 9.11529 8.33329 9.99935 8.33329ZM4.58268 10.8333C5.13522 10.8333 5.66512 10.6138 6.05582 10.2231C6.44652 9.8324 6.66602 9.30249 6.66602 8.74996C6.66602 8.19742 6.44652 7.66752 6.05582 7.27682C5.66512 6.88612 5.13522 6.66663 4.58268 6.66663C4.03015 6.66663 3.50024 6.88612 3.10954 7.27682C2.71884 7.66752 2.49935 8.19742 2.49935 8.74996C2.49935 9.30249 2.71884 9.8324 3.10954 10.2231C3.50024 10.6138 4.03015 10.8333 4.58268 10.8333ZM17.4993 8.74996C17.4993 9.30249 17.2799 9.8324 16.8892 10.2231C16.4985 10.6138 15.9685 10.8333 15.416 10.8333C14.8635 10.8333 14.3336 10.6138 13.9429 10.2231C13.5522 9.8324 13.3327 9.30249 13.3327 8.74996C13.3327 8.19742 13.5522 7.66752 13.9429 7.27682C14.3336 6.88612 14.8635 6.66663 15.416 6.66663C15.9685 6.66663 16.4985 6.88612 16.8892 7.27682C17.2799 7.66752 17.4993 8.19742 17.4993 8.74996ZM9.99935 9.16663C11.1044 9.16663 12.1642 9.60561 12.9456 10.387C13.727 11.1684 14.166 12.2282 14.166 13.3333V18.3333H5.83268V13.3333C5.83268 12.2282 6.27167 11.1684 7.05307 10.387C7.83447 9.60561 8.89428 9.16663 9.99935 9.16663ZM4.16602 13.3333C4.16602 12.7558 4.24935 12.1983 4.40602 11.6716L4.26435 11.6833C3.55008 11.7617 2.8899 12.1011 2.4104 12.6362C1.9309 13.1714 1.66583 13.8647 1.66602 14.5833V18.3333H4.16602V13.3333ZM18.3327 18.3333V14.5833C18.3328 13.8403 18.0493 13.1252 17.5401 12.5841C17.0309 12.043 16.3343 11.7166 15.5927 11.6716C15.7485 12.1983 15.8327 12.7558 15.8327 13.3333V18.3333H18.3327Z"
                                    fill="#004B2A" />
                            </svg>


                        </span>
                        <h3 class="ms-2 mt-1">Team Building and Camaraderie</h3>
                    </div>
                    <p>Participating in group yoga sessions fosters a sense of community and teamwork among employees.
                        It provides an opportunity for colleagues to connect outside of work tasks, strengthening
                        relationships and creating a more positive work environment.</p>

                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="corporate-box">
                    <div class="heading d-flex align-items-center"> <span><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_254_101)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 3C12.2652 3 12.5196 3.10536 12.7071 3.29289C12.8946 3.48043 13 3.73478 13 4V5H13.764C14.0743 5.00002 14.3804 5.07226 14.658 5.211L16.236 6H20C20.2652 6 20.5196 6.10536 20.7071 6.29289C20.8946 6.48043 21 6.73478 21 7C21 7.26522 20.8946 7.51957 20.7071 7.70711C20.5196 7.89464 20.2652 8 20 8H19.618L21.894 12.553C21.964 12.692 22 12.845 22 13C22 14.0609 21.5786 15.0783 20.8284 15.8284C20.0783 16.5786 19.0609 17 18 17C16.9391 17 15.9217 16.5786 15.1716 15.8284C14.4214 15.0783 14 14.0609 14 13C14 12.845 14.036 12.692 14.106 12.553L16.382 8H16.236C15.9257 7.99998 15.6196 7.92774 15.342 7.789L13.764 7H13V19H16C16.2652 19 16.5196 19.1054 16.7071 19.2929C16.8946 19.4804 17 19.7348 17 20C17 20.2652 16.8946 20.5196 16.7071 20.7071C16.5196 20.8946 16.2652 21 16 21H8C7.73478 21 7.48043 20.8946 7.29289 20.7071C7.10536 20.5196 7 20.2652 7 20C7 19.7348 7.10536 19.4804 7.29289 19.2929C7.48043 19.1054 7.73478 19 8 19H11V7H10.236L8.658 7.789C8.38041 7.92774 8.07433 7.99998 7.764 8H7.618L9.894 12.553C9.96354 12.6918 9.99983 12.8448 10 13C10 14.0609 9.57857 15.0783 8.82843 15.8284C8.07828 16.5786 7.06087 17 6 17C4.93913 17 3.92172 16.5786 3.17157 15.8284C2.42143 15.0783 2 14.0609 2 13C2.00017 12.8448 2.03646 12.6918 2.106 12.553L4.382 8H4C3.73478 8 3.48043 7.89464 3.29289 7.70711C3.10536 7.51957 3 7.26522 3 7C3 6.73478 3.10536 6.48043 3.29289 6.29289C3.48043 6.10536 3.73478 6 4 6H7.764L9.342 5.211C9.61959 5.07226 9.92567 5.00002 10.236 5H11V4C11 3.73478 11.1054 3.48043 11.2929 3.29289C11.4804 3.10536 11.7348 3 12 3Z"
                                        fill="#004B2A" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_254_101">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </span>
                        <h3 class="ms-2 mt-1">Promotion of Work-Life Balance</h3>
                    </div>
                    <p>Encouraging employees to take regular breaks for yoga sessions promotes a healthier work-life
                        balance. It sends a message that work is not just about productivity but also about holistic
                        well-being.</p>

                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="corporate-box">
                    <div class="heading d-flex align-items-center"> <span><svg width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_254_105)">
                                    <path
                                        d="M8.41602 13.25L9.59935 12.0667C7.32435 10.0417 5.83268 8.67504 5.83268 7.37504C5.83268 6.50004 6.49935 5.83337 7.37435 5.83337C8.29935 5.83337 8.65768 6.37504 9.60768 7.50004H10.3827C11.316 6.40837 11.6577 5.83337 12.616 5.83337C13.341 5.83337 13.9077 6.28337 14.091 6.93337C14.3827 6.90004 14.6577 6.88337 14.9243 6.88337C15.2243 6.88337 15.5077 6.90837 15.7827 6.95004C15.5827 5.35837 14.2743 4.16671 12.6243 4.16671C12.5243 4.16671 12.4327 4.19171 12.3327 4.20004C12.4327 3.92504 12.4993 3.64171 12.4993 3.33337C12.4993 1.95004 11.3827 0.833374 9.99935 0.833374C8.61602 0.833374 7.49935 1.95004 7.49935 3.33337C7.49935 3.64171 7.56602 3.92504 7.66602 4.20004C7.56602 4.19171 7.47435 4.16671 7.37435 4.16671C5.57435 4.16671 4.16602 5.57504 4.16602 7.37504C4.16602 9.39171 5.86602 10.9667 8.41602 13.25Z"
                                        fill="#004B2A" />
                                    <path
                                        d="M18.7507 13.5334C18.484 13.3834 18.2007 13.2917 17.9173 13.2417C17.9757 13.1584 18.0423 13.0917 18.0923 13.0084C18.9923 11.45 18.4757 9.52505 16.9173 8.62505C15.1757 7.61671 12.9507 8.30005 9.70898 9.37505L10.1423 10.9917C13.034 10.0417 14.9673 9.42505 16.0923 10.075C16.8507 10.5167 17.0923 11.4167 16.659 12.1834C16.1923 12.9834 15.5507 13.0167 14.1007 13.2834L13.709 13.9584C14.1923 15.3084 14.5173 15.9 14.034 16.725C13.5923 17.4834 12.6923 17.725 11.9257 17.2917C11.8757 17.2667 11.834 17.2167 11.784 17.1834C11.534 17.7417 11.2507 18.2167 10.9257 18.625C10.984 18.6584 11.034 18.7 11.0923 18.7417C12.6507 19.6417 14.5757 19.125 15.4757 17.5667C15.5257 17.4834 15.5507 17.3917 15.5923 17.3C15.7757 17.525 15.9923 17.725 16.259 17.875C17.4507 18.5667 18.984 18.1584 19.6757 16.9584C20.3673 15.7584 19.9423 14.2167 18.7507 13.5334Z"
                                        fill="#004B2A" />
                                    <path
                                        d="M10.266 11.675C9.64936 14.6583 9.20769 16.6333 8.08269 17.2833C7.32436 17.725 6.41603 17.4833 5.97436 16.7167C5.50769 15.9167 5.80769 15.3333 6.29936 13.95L5.91603 13.275C4.49936 13.0167 3.83269 13 3.35769 12.175C2.91603 11.4167 3.15769 10.5083 3.92436 10.0667C3.99936 10.025 4.08269 10 4.16603 9.97502C3.87436 9.50835 3.63269 9.00002 3.48269 8.43335C3.34936 8.49168 3.21603 8.55002 3.08269 8.62502C1.52436 9.52502 1.00769 11.45 1.90769 13.0083C1.95769 13.0917 2.02436 13.1583 2.08269 13.2417C1.79936 13.2917 1.51603 13.3833 1.24936 13.5333C0.0576927 14.225 -0.358974 15.75 0.332693 16.95C1.02436 18.15 2.54936 18.5583 3.74936 17.8667C4.01603 17.7167 4.23269 17.5167 4.41603 17.2917C4.45769 17.3833 4.48269 17.475 4.53269 17.5583C5.43269 19.1167 7.35769 19.6333 8.91603 18.7333C10.6577 17.725 11.1744 15.4583 11.8744 12.1167L10.266 11.675Z"
                                        fill="#004B2A" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_254_105">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>
                        <h3 class="ms-2 mt-1">Cultural Inclusivity and Diversity</h3>
                    </div>
                    <p>Yoga is a practice that transcends cultural and religious boundaries. It can be tailored to
                        accommodate people of different fitness levels, abilities, and backgrounds, making it inclusive
                        for all employees</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallary -->
<section class="pb-3 aboutus_content">
    <div class="container">
        <h2 class="text-center">Gallery</h2>
        <div class="row pt-5">
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
        </div>
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

        <div class="row pt-4">
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3 pt-3">
                <a href="">
                    <img src="{{ asset('img/testimonial.png') }}" alt="" class="img-fluid">
                </a>
            </div>


        </div>
    </div>
</section>
<!-- discount-section -->
<section class="aboutus_section discount-section">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="discount-box">
            <h2 class="text-center">Get 10% Discount For Yoga Training
            </h2>
            <p class="margin_bottom text-center">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla
                pariatur
                nostrud exercitation</p>
            <div class="btn_wrapper main-btn text-center">
                <a href="/contact" class="text-decoration-none read_more_btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>


@endsection