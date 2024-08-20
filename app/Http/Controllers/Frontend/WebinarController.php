<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webinar;
use App\Models\Setting;
use Exception;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Api;
use Session;

class WebinarController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('frontend.webinar', compact('settings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp_number' => 'required|string|max:20',
            'age' => 'required',
            'emergency_contact_number' => 'required|string|max:20',
            'pregnancy_information' => 'required|string',
            'estimated_due_date' => 'required',
            'current_trimester' => 'required|string',
            'first_pregnancy' => 'required|string',
            'previous_pregnancy' => 'nullable',
            'experience_pregnancy_complications' => 'required|string',
            'type_of_delivery' => 'required|string',
            'medical_conditions' => 'required|string',
            'primary_goal' => 'required|string',
            'concerns_about_childbirth' => 'required',
            'hear_about_us' => 'required',
            'like_receive_updates' => 'required',

        ]);

    $name = $request->name;
    $whatsapp_number = $request->whatsapp_number;
    $email = $request->email;

    $api = new Api('rzp_live_cKTuo7fj9oQFjL', '6SUWepgqpDUQRU0HxXx5OoJH');

    $totalAmount = 199;

    $order = $api->order->create([
        'amount' => $totalAmount,
        'currency' => 'INR',
        'receipt' => 'order_' . time(),
        'payment_capture' => 1 // Auto capture

    ]);


    try {

        // Store the user details and order information in your database
        Webinar::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'whatsapp_number' => $validated['whatsapp_number'],
            'order_id' => $order['id'],
            'currency' => 'INR',
            'age' =>  $validated['age'],
            'emergency_contact_number' => $validated['emergency_contact_number'],
            'pregnancy_information' => $validated['pregnancy_information'],
            'estimated_due_date' => $validated['estimated_due_date'],
            'current_trimester' => $validated['current_trimester'],
            'first_pregnancy' => $validated['first_pregnancy'],
            'previous_pregnancy' => $validated['previous_pregnancy'],
            'experience_pregnancy_complications' => $validated['experience_pregnancy_complications'],
            'type_of_delivery' => $validated['type_of_delivery'],
            'medical_conditions' => $validated['medical_conditions'],
            'primary_goal' => $validated['primary_goal'],
            'concerns_about_childbirth' => $validated['concerns_about_childbirth'],
            'hear_about_us' => $validated['hear_about_us'],
            'like_receive_updates' => $validated['like_receive_updates'],
            'status' => 'pending'
        ]);
            //
            return response()->json([
                'order_id' => $order['id'],
                'razorpay_key' => 'rzp_live_cKTuo7fj9oQFjL',
                'amount' => 19900
            ]);
        } catch (Exception $e) {
            return $e->getMessage();
            Session::put('error', $e->getMessage());
            return redirect()->back();
        }
    }


    public function verify(Request $request)
    {


        $api = new Api(config('razorpay.key'), config('razorpay.secret'));

        try {

            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // Payment successful, update the database
            $registration = Webinar::where('order_id', $request->razorpay_order_id)->first();
            if ($registration) {
                $registration->status = 'paid';
                $registration->r_payment_id = $request->razorpay_payment_id;
                $registration->save();
            }

            $name = $registration->name;
            $email = $registration->email;
            $order = $registration->order_id;
            $payment = $registration->r_payment_id;


            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Payment failed
            return response()->json(['success' => false]);
        }
    }

}
