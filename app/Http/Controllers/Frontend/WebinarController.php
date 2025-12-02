<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webinar;
use App\Models\Setting;
use Exception;
use Illuminate\Support\Facades\Validator;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;

class WebinarController extends Controller
{
    protected $razorpayKey;
    protected $razorpaySecret;

    public function __construct()
    {
        $this->razorpayKey = config('razorpay.key');
        $this->razorpaySecret = config('razorpay.secret');
    }

    public function index()
    {
        $settings = Setting::all();
        return view('frontend.webinar', compact('settings'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp_number' => 'required|string|max:20',
            'age' => 'required|numeric|min:18|max:50',
            'estimated_due_date' => 'required|date|after:today',
            'current_trimester' => 'required|in:First Trimester,Second Trimester,Third Trimester',
            'first_pregnancy' => 'required|in:Yes,No',
            'previous_pregnancy' => 'nullable|string|max:500',
            'experience_pregnancy_complications' => 'required|string|max:1000',
            'primary_goal' => 'nullable|array',
            'primary_goal.*' => 'in:Learning pain management techniques,Understanding labor stages,Preparing for natural birth,Partner involvement and support,Postpartum recovery,Other',
            'concerns_about_childbirth' => 'required|string|max:1000',
            'like_receive_updates' => 'required|in:Yes,No',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $api = new Api($this->razorpayKey, $this->razorpaySecret);

        try {
            $order = $api->order->create([
                'amount' => 49900,  // 199 rupees
                'currency' => 'INR',
                'receipt' => 'order_' . uniqid(),
                'payment_capture' => 1
            ]);

            $validated = $validator->validated();
       $validated['primary_goal'] = json_encode($request->input('primary_goal', []));
      
           $webinar = Webinar::create(array_merge($validated, [
    'order_id' => $order['id'],
    'amount' => 499,
    'currency' => 'INR',
    'status' => 'pending'
]));

            return response()->json([
                'order_id' => $order['id'],
                'razorpay_key' => $this->razorpayKey,
                'amount' => 49900
            ]);
        } catch (Exception $e) {
            Log::error('Webinar Registration Error: ' . $e->getMessage());
            return response()->json(['error' =>  $e->getMessage()], 500);
        }
    }

    public function verify(Request $request)
    {
        $api = new Api($this->razorpayKey, $this->razorpaySecret);

        try {
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];

            $api->utility->verifyPaymentSignature($attributes);

            $registration = Webinar::where('order_id', $request->razorpay_order_id)->first();
            
            if (!$registration) {
                return response()->json(['success' => false, 'message' => 'Registration not found'], 404);
            }

            $registration->update([
                'status' => 'paid',
                'r_payment_id' => $request->razorpay_payment_id
            ]);

            return response()->json(['success' => true]);
        } catch (Exception $e) {
            Log::error('Payment Verification Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Payment verification failed'], 400);
        }
    }
}