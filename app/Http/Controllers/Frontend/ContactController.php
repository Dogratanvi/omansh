<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Rules\Recaptcha;
use Exception;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function create()
    {
        $meta_page_type = 'contact';
        $settings = Setting::all();
        return view('frontend.contact',compact( 'settings','meta_page_type'));
    }

    public function store(Request $request)
    {
        
      
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
            '_token' => 'required|string',
            'g-recaptcha-response' => 'required|string',

        ],[
            'first_name.required' => 'We need to know your first name!',
            'last_name.required' => 'We need to know your first name!',
            'email.required' => 'Without an email, how can we reach you?',
            'email.email' => 'Your email does not appear to be valid.',
            'phone.required' => 'Your phone number is not valid.',
            'service.required' => 'Service is required',
            'message.required' => 'Message is required'

        ]);

        try {
            
        if ($validator->fails()) {
            return redirect()->back()->with([
                'message' => 'Thank you for contacting us. We will get back to you within 24 hours.', 
                 'status' => 'danger',
            ]);
        }

            $input = $request->except(['_token','g-recaptcha-response','g-token']);
       
      
            Contact::create($input);

            return redirect()->back()->with([
                'message' => 'Thank you for contacting us. We will get back to you within 24 hours.', 
                 'status' => 'success',
            ]);


        }catch (Exception $e) {

            return redirect()->back()->with([
                'message' => 'Thank you for contacting us. We will get back to you within 24 hours.', 
                 'status' => 'danger',
            ]);
        }



        // Store the contact data in the database
      
        
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
        // $recipient = auth()->user();
        // Notification::make()
        // ->title('Contact Notification')
        // ->sendToDatabase($recipient);

      
    }
}
