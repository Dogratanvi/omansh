@extends('frontend.layouts.app')

@section('content')

<div class="sub-banner-section contact-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Contact Us</h1>
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                    <p class="text-center" data-aos="fade-right">Your health is our priority. Don't
                                        hesitate to contact us.</p>
                                </div>
                            </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home </a> </span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span">
                                    Contact</span>
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
        </section>
    </div>
</div>
<!-- MESSAGE SECTION -->
<section class="message_section contact">
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
                    <form id="contactpage" name="contactpage" method="POST" action="{{ url('contact') }}"
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
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="email" name="email" id="email" class="form-control form_style"
                                        placeholder="Email">
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
                                    <img src="{{ asset('images/contact_location.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Location</h3>
                                <p class="mb-0 pt-2">Plot No-290, Gate No.1
                                    Sector-4, Vaishali
                                    (Landmark: In front of Ramprastha Green)
                                    Ghaziabad, 201010, Uttar Pradesh, India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box d-flex align-items-center">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('images/contact_phone.png ') }}" alt="" class="img-fluid">
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
                                    <img src="{{ asset('images/contact_mail.png') }}" alt="" class="img-fluid">
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
<!-- CONTACT MAP SECTION -->
<div class="contact_map_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7002.747430236534!2d77.3425918!3d28.6485268!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390cfbc47d49c4a9%3A0xdd53c603f71f8207!2sOMANSH%20PHYSIOTHERAPY%20YOG%20AND%20PREGNANCY%20CLINIC%20Gate%20No-%201%20Shop%20no%20290%2C%20Basement%20Opposite%20Ramprastha%20Green%20No%20-1%20next%20to%20Rockers%20Pizza%2C%20near%20Ramprastha%20Greens%2C%20Sector%204%2C%20Vaishali%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201010!3m2!1d28.6485268!2d77.3425918!5e0!3m2!1sen!2sin!4v1712644738384!5m2!1sen!2sin"
                width="1920" height="728" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


<script async src="https://www.google.com/recaptcha/api.js"></script>
{{-- @push ('after-scripts')
    <script type="text/javascript">
   
    $('#contactpage').on('submit', function(e) {
        e.preventDefault();
        var email = $("#email").val();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var phone  = $("#phone").val();
        var service = $("#service").val(); 
        var message = $("#message").val(); 
        var g-recaptcha-response = $('#recaptchaToken').val();
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}
        });
     
    $.ajax({
     type: "POST",
     url: "{{url('contact')}}",
data: {
'email': email,
'first_name':first_name,
"last_name":last_name,
"phone":phone,
"service":service,
"message":message,
"g-recaptcha-response":g-recaptcha-response
},
success: function()
{
console.log(data);
$('.flash-message-mba').html("Contact Submit Successfully");
$('.flash-message-mba').fadeOut(5000);
setTimeout(() => {
element.reset();
}, 5500);
},
error:function(){
console.log(data);
$('.flash-message-mba').html("Contact Not Submit Successfully");
$('.flash-message-mba').fadeOut(5000);
setTimeout(() => {
grecaptcha.reset();

element.reset();
}, 5500);
}
});


});
</script>
@endpush --}}


@endsection