@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section about-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Feedback form</h1>
                            <p class="text-center" data-aos="fade-right">We value your feedback. It will help us to
                                improve our services.</p>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="href={{ route('frontend.index') }}">Home</a> </span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span"> Feedback form</span>
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
<section class="feedback-section">
    <div class="container ">
        <div class="feedback-form-box shadow">
            <div class="feedback-heading d-flex justify-content-center">
                <img src="{{ asset('img/aboutus_top_shape 2.png') }}">
                <h2 class="text-white px-3 text-center">Omansh Feedback Form</h2>
                <img src="{{ asset('img/aboutus_top_shape 2.png') }}">
            </div>
            <div class="feedback-form">
                @if(session('data'))
                <div class="alert-message alert-{{ session('status') }} alert-dismissible fade show mb-3  mt-3 d-flex"
                    role="alert">
                    <strong>{{ session('data') }}</strong>
                    <button type="button" class="btn-close-contact border-0" data-bs-dismiss="alert"><i
                            class="fas fa-times"></i></button>
                </div>
                @endif
                <form id="feedbackForm" name="feedbackForm"  method="POST" action="{{ route('frontend.feedback.store') }}"
                enctype="multipart/form-data">
                @csrf
                    <fieldset>
                        <h3>What are the top 3 things you liked most about the class? *
                        </h3>
                        <div class="row justify-content-center pt-3">
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="like_most_about_class[]" value="breathing">
                                    <label for="breathing" class="form-check-label" for="exampleCheck1">Breathing</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="like_most_about_class[]" value="postures">
                                    <label class="form-check-label" for="exampleCheck1">Postures</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check ">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="like_most_about_class[]" value="social">
                                    <label class="form-check-label" for="exampleCheck1">Social</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="like_most_about_class[]" value="philsophy">
                                    <label class="form-check-label" for="exampleCheck1">Philosophy</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="like_most_about_class[]" value="relaxation">
                                    <label class="form-check-label" for="exampleCheck1">Relaxation</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="like_most_about_class[]" value="meditation">
                                    <label class="form-check-label" for="exampleCheck1">Meditation</label>
                                </div>
                            </div>



                        </div>
                   
                        <table class="table table-borderless ">
                            <tr>
                                <th>
                                    <h3>Please rate these:</h3>
                                </th>
                                <th class="text-center" ><h4 class="fw-normal" >Very satisfied</h4></th>
                                <th class="text-center"><h4 class="fw-normal" >Satisfied</h4></th>
                                <th class="text-center"><h4 class="fw-normal" >Unsatisfied</h4></th>

                            </tr>
                            <tr>
                                <th class="fw-bolder">Teacher knowledge</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="teacher_knowledge" value="very satisfied"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="teacher_knowledge" value="satisfied"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="teacher_knowledge" value="unsatisfied"></td>
                            </tr>

                            <tr>
                                <th class="fw-bolder">The amount of instruction given</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="instruction_given" value="very satisfied"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="instruction_given" value="satisfied"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="instruction_given" value="unsatisfied"></td>
                            </tr>

                            <tr>
                                <th class="fw-bolder">Yoga sequence restorative</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="yoga_sequence" value="very satisfied"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="yoga_sequence" value="satisfied"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1" name="yoga_sequence" value="unsatisfied"></td>
                            </tr>
                        </table>


                        <h3 class="pt-3">Did the class meet your expectations? *

                        </h3>
                        <div class="row pt-3">
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="meet your expectations" value="yes">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="meet your expectations" value="no">
                                    <label class="form-check-label" for="exampleCheck1">No</label>
                                </div>
                            </div>
                        </div>

                        <h3 class="pt-3">What did you like about the class? *

                            <textarea id="text-box" class="text" name="like about class" placeholder="Write something..." rows="3"
                                cols="50"></textarea>
                        </h3>

                        <h3 class="pt-3">Can you think of anything else to help us improve the class? *

                            <textarea id="text-box" name="help us improve" placeholder="Write something..." rows="3"
                                cols="50"></textarea>

                            <h3 class="pt-3">Where did you hear about Omansh? * </h3>
                            <div class="row justify-content-center pt-3">
                                <div class="col-md-4">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="hear about omansh" value="social media">
                                        <label class="form-check-label" for="exampleCheck1">Social media</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="hear about omansh" value="campaign">
                                        <label class="form-check-label" for="exampleCheck1">Campaign</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-check ">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="hear about omansh" value="friends">
                                        <label class="form-check-label" for="exampleCheck1">Friends</label>
                                    </div>
                                </div>

                            </div>
                            <h3 class="pt-3">Verification *
                                <input type="hidden" name="g-token" id="recaptchaToken" required>
                                <div class="g-recaptcha mt-4 mb-4" data-sitekey={{ config('services.recaptcha.key') }}></div>
                                <span class="text-danger">{{ $errors->first('Click to verify') }}</span>
                            </h3>


                            <div class="btn_wrapper main-btn mt-4 text-center">
                                <button href="./pricing.html" class="text-decoration-none read_more_btn border-0"
                                    type="submit">Submit</button>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>


<script async src="https://www.google.com/recaptcha/api.js"></script>

@endsection