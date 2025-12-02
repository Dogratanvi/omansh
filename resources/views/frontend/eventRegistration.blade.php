<!-- Event Registration Form -->

<div class="btn_wrapper text-center mt-3">
    <button class="text-decoration-none border-0 appointment-btn" data-bs-toggle="modal"
        data-bs-target="#eventRegistrationModal">
        Register for Event
    </button>
</div>

<div class="booking-form py-5 modal fade" id="eventRegistrationModal" data-bs-backdrop="static" 
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="eventRegistrationModalLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-xl h-100">
           
            <div class="modal-content inner-appointment-box px-3 my-5 py-xl-2 py-lg-2 py-md-2 py-xs-2 py-sm-2 py-2">
                 <div class="col-md-6 mt-5 text-lg-start text-xl-start text-md-start text-sm-end text-xsend text-end">
                                    <button type="submit" class="position-absolute close-btn-cus" data-bs-dismiss="modal"><i class="fas fa-times"></i></button></div>
                                   
                <div class="row justify-content-center">
                    <div class="col-g-10 col-xl-10 col-md-12 col-xs-12 col-sm-12 col-12">
                        <h2 class="text-xs-center px-3 px-sm-3 px-xs-3 px-md-3 px-xl-0 px-lg-0 text-sm-center text-center text-lg-center text-xl-center text-md-center">
                            Event Registration Form
                        </h2>
                        
                        <form action="{{ route('frontend.event-registration.store') }}" method="post" 
                            id="eventRegistrationForm" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Event Selection -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
    <div class="form-group mb-0">
        <label>Event Name</label><br>

        {{-- Visible readonly name --}}
        <input type="text" 
               class="form-control border-0 py-4" 
               value="{{ $event->name }}" 
               readonly>

        {{-- Hidden event_id for submission --}}
        <input type="hidden" name="event_id" value="{{ $event->id }}">
    </div>
</div>

                            </div>

                            <!-- Personal Information -->
                            <div class="row mt-3">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="first_name">First Name <span class="text-danger">*</span></label><br>
                                        <input type="text" name="first_name" id="first_name" 
                                            class="form-control border-0 py-4" placeholder="First Name" required>
                                        @error('first_name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="last_name">Last Name <span class="text-danger">*</span></label><br>
                                        <input type="text" name="last_name" id="last_name" 
                                            class="form-control border-0 py-4" placeholder="Last Name" required>
                                        @error('last_name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="email">Email Address <span class="text-danger">*</span></label><br>
                                        <input type="email" name="email" id="email" 
                                            class="form-control border-0 py-4" placeholder="Email" required>
                                        @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label><br>
                                        <input type="tel" name="phone" id="phone" 
                                            class="form-control border-0 py-4" placeholder="+91 1234567890" required>
                                        @error('phone')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="date_of_birth">Date of Birth <span class="text-danger">*</span></label><br>
                                        <input type="date" name="date_of_birth" id="date_of_birth" 
                                            class="form-control border-0 py-4" required>
                                        @error('date_of_birth')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="gender">Gender <span class="text-danger">*</span></label><br>
                                        <select name="gender" id="gender" class="form-select border-0 py-4" required>
                                            <option value="">Select Gender...</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        @error('gender')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="aadhaar_number">Aadhaar Number <span class="text-danger">*</span></label><br>
                                        <input type="text" name="aadhaar_number" id="aadhaar_number" 
                                            class="form-control border-0 py-4" placeholder="Enter 12-digit Aadhaar number" 
                                            maxlength="12" pattern="[0-9]{12}" required>
                                        @error('aadhaar_number')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="profile_picture">Profile Picture (Optional)</label><br>
                                        <input type="file" name="profile_picture" id="profile_picture" 
                                            class="form-control border-0 py-3" accept="image/*">
                                        @error('profile_picture')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="row mt-3">
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="address">Street Address <span class="text-danger">*</span></label><br>
                                        <textarea rows="2" name="address" id="address" 
                                            class="form-control border-0 w-100 py-4" 
                                            placeholder="Enter your complete address" required></textarea>
                                        @error('address')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="city">City <span class="text-danger">*</span></label><br>
                                        <input type="text" name="city" id="city" 
                                            class="form-control border-0 py-4" placeholder="City" required>
                                        @error('city')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="state">State <span class="text-danger">*</span></label><br>
                                        <input type="text" name="state" id="state" 
                                            class="form-control border-0 py-4" placeholder="State" required>
                                        @error('state')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="pincode">PIN Code <span class="text-danger">*</span></label><br>
                                        <input type="text" name="pincode" id="pincode" 
                                            class="form-control border-0 py-4" placeholder="Enter 6-digit PIN code" 
                                            maxlength="6" pattern="[0-9]{6}" required>
                                        @error('pincode')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 col-sm-12 pt-2">
                                    <div class="form-group mb-0">
                                        <label for="country">Country <span class="text-danger">*</span></label><br>
                                        <input type="text" name="country" id="country" 
                                            class="form-control border-0 py-4" placeholder="Country" 
                                            value="India" required>
                                        @error('country')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                           
                            <!-- Form Buttons -->
                            <div class="btn_wrapper mb-3 row">
                                <div class="col-md-12 mt-5 pb-4 text-lg-center text-xl-center text-md-center text-sm-center text-xs-center text-center">
                                    <button type="submit" class="border-0 get_started_btn appointment-btn" id="submitBtn">
                                        Submit 
                                    </button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Aadhaar number validation - only numbers
    $('#aadhaar_number').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // PIN code validation - only numbers
    $('#pincode').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Phone number validation
    $('#phone').on('input', function() {
        this.value = this.value.replace(/[^0-9+\s-]/g, '');
    });

    // Form submission
    $('#eventRegistrationForm').on('submit', function(e) {
        var aadhaar = $('#aadhaar_number').val();
        var pincode = $('#pincode').val();

        if (aadhaar.length !== 12) {
            e.preventDefault();
            alert('Please enter a valid 12-digit Aadhaar number');
            return false;
        }

        if (pincode.length !== 6) {
            e.preventDefault();
            alert('Please enter a valid 6-digit PIN code');
            return false;
        }
    });

    // Show success message after form submission
    @if(session('success'))
        alert('{{ session("success") }}');
        $('#eventRegistrationModal').modal('hide');
    @endif

    // Show error messages
    @if($errors->any())
        $('#eventRegistrationModal').modal('show');
    @endif
});
</script>