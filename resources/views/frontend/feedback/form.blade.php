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
                                <span class="sub_home_span"><a href="href={{ route('frontend.index') }}">Home</a>
                                </span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span
                                    class="sub_span"> Feedback form</span>
                            </div>
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
    </div>
    </section>
</div>
<section class="feedback-section">
    <div class="container ">
        <div class="feedback-form-box shadow">
            <div class="feedback-heading d-flex justify-content-center align-items-center">
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
                <form id="feedbackForm" name="feedbackForm" method="POST"
                    action="{{ route('frontend.feedback.store') }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <h3>What are the top 3 things you liked most about the class ?
                        </h3>
                        <div class="row justify-content-center pt-3">
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                        name="like_most_about_class[]" value="breathing" >
                                    <label for="breathing" class="form-check-label"
                                        for="exampleCheck1">Breathing</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                        name="like_most_about_class[]" value="postures" >
                                    <label class="form-check-label" for="exampleCheck1">Postures</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check ">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                        name="like_most_about_class[]" value="social" >
                                    <label class="form-check-label" for="exampleCheck1">Social</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                        name="like_most_about_class[]" value="philsophy" >
                                    <label class="form-check-label" for="exampleCheck1">Philosophy</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                        name="like_most_about_class[]" value="relaxation" >
                                    <label class="form-check-label" for="exampleCheck1">Relaxation</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                        name="like_most_about_class[]" value="meditation" >
                                    <label class="form-check-label" for="exampleCheck1">Meditation</label>
                                </div>
                            </div>



                        </div>
                        <div id="error-message" class="alert alert-danger" style="display: none;">
                            Maximum of 3 options can be selected.
                        </div>
                        @error('like_most_about_class')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <table class="table table-borderless ">
                            <tr>
                                <th>
                                    <h3>Please rate these:</h3>
                                </th>
                                <th class="text-center">
                                    <h4 class="fw-normal">Very satisfied</h4>
                                </th>
                                <th class="text-center">
                                    <h4 class="fw-normal">Satisfied</h4>
                                </th>
                                <th class="text-center">
                                    <h4 class="fw-normal">Unsatisfied</h4>
                                </th>

                            </tr>
                            <tr>
                                <th class="fw-bolder">Teacher knowledge</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="teacher_knowledge" value="very satisfied" >
                                </td>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="teacher_knowledge" value="satisfied" ></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="teacher_knowledge" value="unsatisfied" ></td>
                            </tr>

                            <tr>
                                <th class="fw-bolder">The amount of instruction given</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="instruction_given" value="very satisfied" >
                                </td>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="instruction_given" value="satisfied" ></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="instruction_given" value="unsatisfied" ></td>
                            </tr>

                            <tr>
                                <th class="fw-bolder">Yoga sequence restorative</th>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="yoga_sequence" value="very satisfied" ></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="yoga_sequence" value="satisfied" ></td>
                                <td class="text-center"><input type="checkbox" class="form-check-input rate-this"
                                        id="exampleCheck1" name="yoga_sequence" value="unsatisfied" ></td>
                            </tr>
                        </table>

                        <div id="teacher_knowledge_error" class="text-danger"></div>
                        <h3 class="pt-3">Did the class meet your expectations ?</h3>
                        <div class="row pt-3">
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input expect" id="expect_yes"
                                        name="meet_your_expectations" value="yes" >
                                    <label class="form-check-label" for="expect_yes">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input expect" id="expect_no"
                                        name="meet_your_expectations" value="no" >
                                    <label class="form-check-label" for="expect_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div id="meet_your_expectations_error" class="text-danger"></div>


                        <h3 class="pt-3">What did you like about the class ?

                            <textarea id="text-box" class="text" name="like about class"
                                placeholder="Write something..." rows="3" cols="50"></textarea>
                        </h3>

                        <h3 class="pt-3">Can you think of anything else to help us improve the class ?

                            <textarea id="text-box" name="help us improve" placeholder="Write something..." rows="3"
                                cols="50"></textarea>

                            <h3 class="pt-3">Where did you hear about Omansh? </h3>
                            <div class="row justify-content-center pt-3">
                                <div class="col-md-4">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input hear" id="exampleCheck1"
                                            name="hear about omansh" value="social media">
                                        <label class="form-check-label" for="exampleCheck1">Social media</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input hear" id="exampleCheck1"
                                            name="hear about omansh" value="campaign">
                                        <label class="form-check-label" for="exampleCheck1">Campaign</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 form-check ">
                                        <input type="checkbox" class="form-check-input hear" id="exampleCheck1"
                                            name="hear about omansh" value="friends">
                                        <label class="form-check-label" for="exampleCheck1">Friends</label>
                                    </div>
                                </div>

                            </div>
                            <div id="teacher_knowledge_errors" class="text-danger"></div>
                            <h3 class="pt-3">Verification
                                <input type="hidden" name="g-token" id="recaptchaToken" required>
                                <div class="g-recaptcha mt-4 mb-4" data-sitekey={{ config('services.recaptcha.key') }}>
                                </div>
                                <span class="text-danger">{{ $errors->first('Click to verify') }}</span>
                            </h3>


                            <div class="btn_wrapper main-btn mt-4 text-center">
                                <button href="#" class="text-decoration-none read_more_btn border-0"
                                    type="submit">Submit</button>
                            </div>
                    </fieldset>
                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>


<script async src="https://www.google.com/recaptcha/api.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('input[name="like_most_about_class[]"]');
    var minChecked = 3;
    var maxChecked = 3;
    var errorMessage = document.getElementById('error-message');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var checkedCount = document.querySelectorAll(
                'input[name="like_most_about_class[]"]:checked').length;

            if (checkedCount > maxChecked) {
                this.checked = false;
                errorMessage.style.display = 'block';
            }else if (checkedCount < minChecked) {
                errorMessage.style.display = 'block';

            }
             else {
                errorMessage.style.display = 'none';
            }
        });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('.rate-this');
    var errorMessageElement = document.getElementById('teacher_knowledge_error');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var checkedCount = document.querySelectorAll('input[name="' + this.name +
                '"]:checked').length;

            if (checkedCount > 1) {
                errorMessageElement.textContent = 'Please select only one option for ' + this
                    .name.replace('_', ' ');
                this.checked = false;
            } else {
                errorMessageElement.textContent = '';
            }
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('.expect');
    var errorMessageElement = document.getElementById('meet_your_expectations_error');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var checkedCount = document.querySelectorAll('input[name="' + this.name +
                '"]:checked').length;

            if (checkedCount > 1) {
                errorMessageElement.textContent =
                    'Please select only one option for "Did the class meet your expectations?"';
                this.checked = false;
            } else {
                errorMessageElement.textContent = '';
            }
        });
    });

    // Clear error message when form elements are clicked
    var formElements = document.querySelectorAll('.expect, #meet_your_expectations_error');
    formElements.forEach(function(element) {
        element.addEventListener('click', function() {
            errorMessageElement.textContent = '';
        });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('.hear');
    var errorMessageElement = document.getElementById('teacher_knowledge_errors');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var checkedCount = document.querySelectorAll('input[name="' + this.name +
                '"]:checked').length;

            if (checkedCount > 1) {
                errorMessageElement.textContent = 'Please select only one option for ' + this
                    .name.replace('_', ' ');
                this.checked = false;
            } else {
                errorMessageElement.textContent = '';
            }
        });
    });
});
</script>
<script>
function validateForm() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var isValid = true;

    checkboxes.forEach(function(checkbox) {
        if (checkbox.hasAttribute('required') && !checkbox.checked) {
            checkbox.setCustomValidity("Please check this box to proceed.");
            isValid = false;
        } else {
            checkbox.setCustomValidity('');
        }
    });

    if (isValid) {
        document.getElementById('feedbackForm').submit();
    }
}
</script>


@endsection
