<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form Submission</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2>Feedback</h2>
       
        <div class="row">
            <div class="col-md-6">
        <p><strong>Name:</strong> {{ $name }}</p></div>
        <div class="col-md-6">  <p><strong>Email:</strong> {{ $email }}</p></div>
            <div class="col-md-6">  <p><strong>Phone:</strong> {{ $phone }}</p></div>
                <div class="col-md-6">  <p><strong>Service:</strong> {{ $service }}</p></div>
                    <div class="col-md-6">  <p><strong>Date:</strong> {{ $date }}</p></div>
                        <div class="col-md-6">  <p><strong>Time:</strong> {{ $time }}</p></div>
                      
        
        <hr>
        <div class="col-md-12">
        <p><strong>Message:</strong></p>
        <p>{{ $body }}</p>
        
        <hr>
        
        <p>This email was sent from the contact form on your website.</p>   </div>
    </div>
    </div>
</body>
</html>