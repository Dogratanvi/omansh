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
                                <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right"
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
                <form>
                    <fieldset>
                        <h3>What are the top 3 things you liked most about the class? *
                        </h3>
                        <div class="row justify-content-center pt-3">
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Breathing</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Postures</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check ">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Social</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Philosophy</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Relaxation</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Meditation</label>
                                </div>
                            </div>



                        </div>
                   
                        <table class="table table-borderless ">
                            <tr>
                                <th>
                                    <h3>Please rate these:</h3>
                                </th>
                                <th class="text-center"><h4 class="fw-normal">Very satisfied</h4></th>
                                <th class="text-center"><h4 class="fw-normal">Satisfied</h4></th>
                                <th class="text-center"><h4 class="fw-normal">Unsatisfied</h4></th>

                            </tr>
                            <tr>
                                <th class="fw-bolder">Teacher knowledge</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                            </tr>

                            <tr>
                                <th class="fw-bolder">The amount of instruction given</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                            </tr>

                            <tr>
                                <th class="fw-bolder">Yoga sequence restorative</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"></td>
                            </tr>
                        </table>


                        <h3 class="pt-3">Did the class meet your expectations? *

                        </h3>
                        <div class="row pt-3">
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">No</label>
                                </div>
                            </div>
                        </div>

                        <h3 class="pt-3">What did you like about the class? *

                            <textarea id="text-box" name="text-box" placeholder="Write something..." rows="3"
                                cols="50"></textarea>
                        </h3>

                        <h3 class="pt-3">Can you think of anything else to help us improve the class? *

                            <textarea id="text-box" name="text-box" placeholder="Write something..." rows="3"
                                cols="50"></textarea>

                            <h3 class="pt-3">Where did you hear about Omansh? * </h3>
                            <div class="row justify-content-center pt-3">
                                <div class="col-md-4">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Social media</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Campaign</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-check ">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Friends</label>
                                    </div>
                                </div>

                            </div>
                            <h3 class="pt-3">Verification *
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




@endsection