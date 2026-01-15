<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #004B2A 0%, #006837 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .success-badge {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #004B2A;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .info-box strong {
            color: #004B2A;
        }
        .details-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        .details-table td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }
        .details-table td:first-child {
            font-weight: bold;
            color: #004B2A;
            width: 40%;
        }
        .cta-button {
            display: inline-block;
            background-color: #004B2A;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: bold;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        .checkmark {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #28a745;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .checkmark svg {
            width: 30px;
            height: 30px;
            fill: white;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>🎉 Registration Successful!</h1>
        </div>
        
        <div class="content">
            <div style="text-align: center;">
                <div class="checkmark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <path d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                </div>
            </div>

            <h2 style="color: #004B2A; text-align: center;">Welcome to Online Rehab Program</h2>
            
            <p>Dear <strong>{{ $customerName }}</strong>,</p>
            
            <p>Thank you for registering for our <strong>{{ $programName }}</strong>. Your payment has been successfully processed, and your registration is now confirmed!</p>
            
            <div class="info-box">
                <strong>Important:</strong> Please save this email for your records. Your registration ID is required for program access.
            </div>

            <h3 style="color: #004B2A;">Registration Details</h3>
            <table class="details-table">
                <tr>
                    <td>Registration ID:</td>
                    <td><strong>{{ $registrationId }}</strong></td>
                </tr>
                <tr>
                    <td>Program Name:</td>
                    <td>{{ $programName }}</td>
                </tr>
                 <tr>
                    <td>OrderID:</td>
                    <td><strong>{{ $orderId }}</strong></td>
                </tr>
                 <tr>
                    <td>PaymentID:</td>
                    <td><strong>{{ $paymentId }}</strong></td>
                </tr>
                <tr>
                    <td>Amount Paid:</td>
                    <td>₹{{ number_format($amount, 2) }}</td>
                </tr>
                <tr>
                    <td>Payment Status:</td>
                    <td><span style="color: #28a745; font-weight: bold;">✓ Paid</span></td>
                </tr>
                <tr>
                    <td>Registration Date:</td>
                    <td>{{ $registration->created_at->format('d M Y, h:i A') }}</td>
                </tr>
            </table>

            <h3 style="color: #004B2A;">What's Next?</h3>
            <ul style="line-height: 2;">
                <li>You will receive program details and schedule within 24 hours</li>
                <li>WhatsApp group link will be shared before the program starts</li>
                <li>Zoom meeting links will be provided 1 day before each session</li>
                <li>Keep checking your email for updates</li>
            </ul>

            <div class="info-box" style="border-left-color: #CAA983;">
                <strong>Program Start Date:</strong> 19th January 2026<br>
                <strong>Duration:</strong> 4 Weeks<br>
                <strong>Frequency:</strong> 3 Days/Week<br>
                <strong>Mode:</strong> Live Zoom Sessions
            </div>

            <div style="text-align: center; margin: 30px 0;">
                <a href="{{ route('frontend.index') }}" class="cta-button">Visit Our Website</a>
            </div>

            <h3 style="color: #004B2A;">Need Help?</h3>
            <p>If you have any questions or concerns, please don't hesitate to contact us:</p>
            <ul style="list-style: none; padding: 0;">
                <li>📧 Email:  garimabiswas09@gmail.com</li>
                <li>📱 Phone: +91-8384019745</li>
                <li>🌐 Website: <a href="{{ route('frontend.index') }}">www.omanshhealth.com</a></li>
            </ul>

            <p style="margin-top: 30px;">We're excited to have you join us on this journey to healing and wellness!</p>
            
            <p style="margin-bottom: 0;">
                Best regards,<br>
                <strong>Dr. Garima Biswas</strong><br>
                Omansh Health and Fitness
            </p>
        </div>
        
        <div class="footer">
            <p>This is an automated email. Please do not reply to this message.</p>
            <p>&copy; {{ date('Y') }} Omansh Health and Fitness. All rights reserved.</p>
            <p>
                <a href="/privacy-policy" style="color: #004B2A; text-decoration: none;">Privacy Policy</a> | 
                <a href="/terms&condition" style="color: #004B2A; text-decoration: none;">Terms & Conditions</a>
            </p>
        </div>
    </div>
</body>
</html>