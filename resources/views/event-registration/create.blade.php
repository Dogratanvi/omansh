<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 32px;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-section {
            margin-bottom: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .section-title {
            color: #667eea;
            font-size: 20px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
        }

        label .required {
            color: #e74c3c;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input-wrapper input[type="file"] {
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            display: block;
            padding: 12px 15px;
            background: white;
            border: 2px dashed #667eea;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .file-input-label:hover {
            background: #f0f4ff;
            border-color: #764ba2;
        }

        .file-preview {
            margin-top: 15px;
            text-align: center;
        }

        .file-preview img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 10px;
            border: 3px solid #667eea;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .radio-option input[type="radio"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        .error-message {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }

        .info-box {
            background: #e7f3ff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #2196F3;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Event Registration Form</h1>
        <p class="subtitle">Please fill in all required fields marked with <span style="color: #e74c3c;">*</span></p>

        <div class="info-box">
            <strong>📋 Registration Information:</strong><br>
            Upon successful registration, you will receive a unique 16-character Registration ID via email.
        </div>

        <form id="registrationForm" enctype="multipart/form-data">
            <!-- Personal Information Section -->
            <div class="form-section">
                <h2 class="section-title">Personal Information</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name <span class="required">*</span></label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name <span class="required">*</span></label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="aadhaar_number">Aadhaar Card Number (12 digits) <span class="required">*</span></label>
                    <input type="text" id="aadhaar_number" name="aadhaar_number" maxlength="12" pattern="[0-9]{12}" placeholder="Enter 12-digit Aadhaar number" required>
                    <small class="error-message" id="aadhaar_error"></small>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth <span class="required">*</span></label>
                        <input type="date" id="date_of_birth" name="date_of_birth" required>
                    </div>
                    <div class="form-group">
                        <label>Gender <span class="required">*</span></label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="male" name="gender" value="male" required>
                                <label for="male" style="margin: 0; font-weight: normal;">Male</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="female" name="gender" value="female" required>
                                <label for="female" style="margin: 0; font-weight: normal;">Female</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="other" name="gender" value="other" required>
                                <label for="other" style="margin: 0; font-weight: normal;">Other</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="profile_picture">Profile Picture <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required>
                        <label for="profile_picture" class="file-input-label">
                            📷 Click to upload your photo (JPG, PNG - Max 2MB)
                        </label>
                    </div>
                    <div class="file-preview" id="imagePreview"></div>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="form-section">
                <h2 class="section-title">Contact Information</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" maxlength="15" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Address <span class="required">*</span></label>
                    <textarea id="address" name="address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="city">City <span class="required">*</span></label>
                        <input type="text" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State <span class="required">*</span></label>
                        <input type="text" id="state" name="state" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="pincode">Pincode <span class="required">*</span></label>
                        <input type="text" id="pincode" name="pincode" maxlength="6" pattern="[0-9]{6}" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country <span class="required">*</span></label>
                        <input type="text" id="country" name="country" value="India" required>
                    </div>
                </div>
            </div>

            <!-- Event Information Section -->
            <div class="form-section">
                <h2 class="section-title">Event & Emergency Contact</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="event_name">Event Name</label>
                        <input type="text" id="event_name" name="event_name">
                    </div>
                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <input type="date" id="event_date" name="event_date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="special_requirements">Special Requirements / Dietary Restrictions</label>
                    <textarea id="special_requirements" name="special_requirements" rows="3"></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="emergency_contact_name">Emergency Contact Name</label>
                        <input type="text" id="emergency_contact_name" name="emergency_contact_name">
                    </div>
                    <div class="form-group">
                        <label for="emergency_contact_phone">Emergency Contact Phone</label>
                        <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit">🎉 Complete Registration</button>
        </form>
    </div>

    <script>
        // Image preview functionality
        document.getElementById('profile_picture').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('imagePreview');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="Profile Preview">`;
                }
                reader.readAsDataURL(file);
            }
        });

        // Aadhaar validation
        document.getElementById('aadhaar_number').addEventListener('input', function(e) {
            const value = e.target.value;
            const error = document.getElementById('aadhaar_error');
            
            if (value.length > 0 && value.length !== 12) {
                error.textContent = 'Aadhaar number must be exactly 12 digits';
            } else if (!/^[0-9]*$/.test(value)) {
                error.textContent = 'Only numbers are allowed';
            } else {
                error.textContent = '';
            }
        });

        // Form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const aadhaar = document.getElementById('aadhaar_number').value;
            if (aadhaar.length !== 12) {
                alert('Please enter a valid 12-digit Aadhaar number');
                return;
            }

            alert('✅ Registration form validated! Ready to submit to Laravel backend.');
            // In actual implementation, this would submit via AJAX or standard form POST
        });

        // Set max date for date of birth (must be at least 1 year old)
        const today = new Date();
        today.setFullYear(today.getFullYear() - 1);
        document.getElementById('date_of_birth').setAttribute('max', today.toISOString().split('T')[0]);
    </script>
</body>
</html>