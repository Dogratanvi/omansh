<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Setting;
use Exception;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Api;
use Session;

class WebnairController extends Controller
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
        ]);

        $name = $request->name;
        $whatsapp_number = $request->whatsapp_number;
        $email = $request->email;

        $api = new Api('rzp_test_uBoIKL7RIyQ2Fv', 'Ix1AfYrk225kqy1zMaqVRMud');

        $totalAmount = 199;

        $order = $api->order->create([
            'amount' => $totalAmount,
            'currency' => 'INR',
            'receipt' => 'order_' . time(),
            'payment_capture' => 1 // Auto capture

        ]);


        try {

            // Store the user details and order information in your database
            Campaign::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'whatsapp_number' => $validated['whatsapp_number'],
                'order_id' => $order['id'],
                'currency' => 'INR',
                'status' => 'pending'
            ]);
            //
            return response()->json([
                'order_id' => $order['id'],
                'razorpay_key' => 'rzp_test_uBoIKL7RIyQ2Fv',
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


        $api = new Api('rzp_test_uBoIKL7RIyQ2Fv', 'Ix1AfYrk225kqy1zMaqVRMud');

        try {

            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // Payment successful, update the database
            $registration = Campaign::where('order_id', $request->razorpay_order_id)->first();
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

    public function success()
    {
        return view('frontend.payment.success');
    }

    public function failure()
    {
        return view('frontend.payment.failure');
    }
}
