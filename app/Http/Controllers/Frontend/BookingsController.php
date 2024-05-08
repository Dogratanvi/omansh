<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
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
            // Add more validation rules for other form fields
        ]);

        Booking::create($validatedData);

        return redirect()->route('booking.create')->with('success', 'Booking created successfully!');
    }
}
