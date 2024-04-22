<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Rules\Recaptcha;

class ContactController extends Controller
{
    public function create()
    {
        $settings = Setting::all();
        return view('frontend.contact',compact( 'settings'));
    }

    public function store(Request $request)
    {
        
       
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
            '_token' => 'required|string'

        ]);

        // Store the contact data in the database
        $input = $request->except('_token');
      
        Contact::create($input);
        
        // // Send mail to admin
        // Mail::send('contactMail', [
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'phone' => $data['phone'],
        //     'subject' => 'New message from "Omansh"',
        //     'user_query' => $data['message'],
        // ], function ($message) use ($data) {
        //     $message
        //         ->from($data['email'])
        //         ->to('dogratanvi1996@gmail.com', 'Admin')
        //         ->subject('New message from "Avasotech"');
        // });


        // Optionally, you can also send a notification or perform other actions here

        return redirect()->route('frontend.contact.create')->with('success', 'Contact information saved successfully.');
    }
}
