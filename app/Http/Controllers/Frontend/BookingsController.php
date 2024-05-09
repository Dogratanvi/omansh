<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BookingMail;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use DateTime;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        return view('frontend.bookingform');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required|string',
            'phone' => 'required',
            'date_time' => 'required',
            'message' => 'required'
            // Add more validation rules for other form fields
        ]);

        Booking::create($validatedData);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $body = $request->message;
        $service = $request->service;
        $dateTimeString = $request->date_time;
        $dateTime = new DateTime($dateTimeString);
       
        // Extract date and time components
        $date = $dateTime->format('d-m-Y'); // Format: YYYY-MM-DD
        $time = $dateTime->format('H:i');   // Format: HH:MM
        $omanshEmail = 'omansh.health@gmail.com'; // Update with your email
         // Send email to user

        
        Mail::to($email)
        ->cc($omanshEmail)
        ->send(new BookingMail($name,$email,$phone, $service, $date, $time, $body));


        return redirect()->route('booking.create')->with('success', 'Booking created successfully!');
    }
}
