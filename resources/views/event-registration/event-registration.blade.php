<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .content {
            padding: 30px;
        }
        .registration-box {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .registration-id {
            font-size: 24px;
            font-weight: bold;
            color: #667eea;
            text-align: center;
            padding: 15px;
            background-color: #e7f3ff;
            border-radius: 5px;
            margin: 20px 0;
            letter-spacing: 2px;
        }
        .event-details {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .detail-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: bold;
            width: 180px;
            color: #555;
        }
        .detail-value {
            color: #333;
        }
        .icon {
            margin-right: 8px;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #777;
            font-size: 12px;
        }
        .important-note {
            background-color: #d1ecf1;
            border-left: 4px solid #17a2b8;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        @media only screen and (max-width: 600px) {
            .detail-row {
                flex-direction: column;
            }
            .detail-label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>🎉 Registration Confirmed!</h1>
            <p style="margin: 10px 0 0 0;">Thank you for registering</p>
        </div>
        
        <div class="content">
            <p>Dear <strong>{{ $registration->full_name }}</strong>,</p>
            
            <p>Congratulations! Your registration has been successfully confirmed.</p>
            
            <div class="registration-id">
                <div style="font-size: 12px; color: #666; margin-bottom: 5px;">Your Registration ID</div>
                {{ $registration->registration_id }}
            </div>

            <div class="important-note">
                <strong>📌 Important:</strong> Please save this Registration ID. You will need it for event check-in and future reference.
            </div>

            <!-- Event Details -->
            <div class="event-details">
                <h2 style="margin-top: 0; color: #333;">📅 Event Details</h2>
                
                <div class="detail-row">
                    <div class="detail-label"><span class="icon">🎪</span>Event Name:</div>
                    <div class="detail-value">{{ $registration->event->event_name }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label"><span class="icon">📍</span>Location:</div>
                    <div class="detail-value">{{ $registration->event->location }}</div>
                </div>

                @if($registration->event->venue_address)
                <div class="detail-row">
                    <div class="detail-label"><span class="icon">🏢</span>Venue Address:</div>
                    <div class="detail-value">{{ $registration->event->venue_address }}</div>
                </div>
                @endif

                <div class="detail-row">
                    <div class="detail-label"><span class="icon">📆</span>Event Date:</div>
                    <div class="detail-value">{{ $registration->event->formatted_date }}</div>
                </div>

                @if($registration->event->start_time)
                <div class="detail-row">
                    <div class="detail-label"><span class="icon">🕐</span>Time:</div>
                    <div class="detail-value">{{ $registration->event->time_range }}</div>
                </div>
                @endif

                @if($registration->event->description)
                <div class="detail-row">
                    <div class="detail-label"><span class="icon">📝</span>Description:</div>
                    <div class="detail-value">{{ $registration->event->description }}</div>
                </div>
                @endif
            </div>

            <!-- Participant Details -->
            <div class="registration-box">
                <h2 style="margin-top: 0; color: #333;">👤 Your Registration Details</h2>
                
                <div class="detail-row">
                    <div class="detail-label">Full Name:</div>
                    <div class="detail-value">{{ $registration->full_name }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Email:</div>
                    <div class="detail-value">{{ $registration->email }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Phone:</div>
                    <div class="detail-value">{{ $registration->phone }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Registration Status:</div>
                    <div class="detail-value">
                        <span style="background-color: #28a745; color: white; padding: 3px 10px; border-radius: 3px; font-size: 12px;">
                            ✓ CONFIRMED
                        </span>
                    </div>
                </div>

                @if($registration->special_requirements)
                <div class="detail-row">
                    <div class="detail-label">Special Requirements:</div>
                    <div class="detail-value">{{ $registration->special_requirements }}</div>
                </div>
                @endif
            </div>

            <!-- Organizer Contact -->
            @if($registration->event->organizer_name || $registration->event->organizer_email)
            <div class="registration-box">
                <h3 style="margin-top: 0; color: #333;">📞 Contact Information</h3>
                
                @if($registration->event->organizer_name)
                <div class="detail-row">
                    <div class="detail-label">Organizer:</div>
                    <div class="detail-value">{{ $registration->event->organizer_name }}</div>
                </div>
                @endif

                @if($registration->event->organizer_email)
                <div class="detail-row">
                    <div class="detail-label">Email:</div>
                    <div class="detail-value">{{ $registration->event->organizer_email }}</div>
                </div>
                @endif

                @if($registration->event->organizer_phone)
                <div class="detail-row">
                    <div class="detail-label">Phone:</div>
                    <div class="detail-value">{{ $registration->event->organizer_phone }}</div>
                </div>
                @endif
            </div>
            @endif

            <div style="text-align: center; margin-top: 30px;">
                <p>We look forward to seeing you at the event!</p>
                <p style="color: #666; font-size: 14px;">Please arrive 15 minutes before the event starts.</p>
            </div>
        </div>
        
        <div class="footer">
            <p><strong>Need Help?</strong></p>
            <p>If you have any questions, please contact us at {{ $registration->event->organizer_email ?? env('MAIL_FROM_ADDRESS') }}</p>
            <p style="margin-top: 15px;">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>