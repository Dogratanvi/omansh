<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Event Notification</h1>
    </div>
    
    <div class="content">
        <h2>Hello!</h2>
        
        @if(isset($eventData['title']))
            <h3>{{ $eventData['title'] }}</h3>
        @endif
        
        @if(isset($eventData['message']))
            <p>{{ $eventData['message'] }}</p>
        @endif
        
        @if(isset($eventData['date']))
            <p><strong>Date:</strong> {{ $eventData['date'] }}</p>
        @endif
        
        @if(isset($eventData['location']))
            <p><strong>Location:</strong> {{ $eventData['location'] }}</p>
        @endif
        
        @if(isset($eventData['link']))
            <a href="{{ $eventData['link'] }}" class="button">View Event Details</a>
        @endif
    </div>
    
    <div class="footer">
        <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</body>
</html>