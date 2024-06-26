<!-- Omansh Appointment Request Form -->

<div class="btn_wrapper   text-center mt-3">
    <button class="text-decoration-none border-0 appointment-btn" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">Book an
        Appointment
    </button>
</div>
<div class="booking-form  py-5 modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-xl h-100">
            <div class="modal-content inner-appointment-box  px-3 my-5 py-xl-5 py-lg-5 py-md-5 py-xs-5 py-sm-5 py-5">
                <div class="row justify-content-center">
                    <div class="col-g-10 col-xl-10 col-md-12 col-xs-12 col-sm-12 col-12 ">
                        <h2
                            class="text-xs-center px-3 px-sm-3 px-xs-3 px-md-3 px-xl-0 px-lg-0 text-sm-center text-center text-lg-center text-xl-center text-md-center">
                            Omansh Appointment Request Form </h2>
                        <form action="{{ route('frontend.bookingform.store') }}" method="post" id="contactForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="name">Full Name</label><br>
                                        <input type="text" name="name" class="form-control border-0 py-4"
                                            placeholder="Name" required>
                                        @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="service">Service Name</label><br>
                                        <select name="service" id="service" class="form-select border-0" required>
                                            <option value="women_health">Women Health</option>
                                            <option value="physiotherapy">Physiotherapy</option>
                                            <option value="yoga">Yoga</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="phone">Phone</label><br>
                                        <input type="tel" name="phone" id="phone" class="form-control border-0 py-4"
                                            placeholder="Phone" required>
                                        @error('phone')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="email">Email</label><br>
                                        <input type="email" name="email" id="email" class="form-control border-0 py-4"
                                            placeholder="Email" required>
                                        @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
                                    <div class="form-group">
                                        <label for="date_time">Preferred Appointment Date & Time</label><br>
                                        <input class="form-control border-0 py-4" placeholder="" name="date_time"
                                            type="datetime-local" id="ends_at" value="2016-05-13T20:00:00" required>
                                        @error('date_time')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="message">Message</label><br>
                                        <textarea rows="3" name="message" id="message"
                                            class="form-control border-0 w-100 py-4" placeholder="Message"
                                            required></textarea>
                                        @error('message')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="btn_wrapper  mb-3 row">
                                    <div
                                        class="col-md-6 mt-5 text-lg-end text-xl-end text-md-end text-sm-center text-xs-center text-center">
                                        <button type="submit" class="border-0 get_started_btn appointment-btn"
                                            id="started">Submit</button>
                                    </div>
                                    <div
                                        class="col-md-6 mt-5 text-lg-end text-xl-end text-md-end text-sm-center text-xs-center text-center">
                                        <button type="submit" class="border-0 close-btn"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
    if (!Modernizr.touch || !Modernizr.inputtypes.date) {
        $('input[type="datetime-local"]').each(function() {
            var defaultVal = $(this).val();
            console.log(this.name, defaultVal);
            $(this).attr('type', 'text').val(moment(defaultVal).format('M/D/YYYY h:mm A'))
                .datetimepicker({
                    format: 'M/D/YYYY h:mm A',
                    // widgetParent: ???,
                    widgetPositioning: {
                        horizontal: "bottom",
                        vertical: "auto"
                    }
                });
        });
    }
});
</script>
