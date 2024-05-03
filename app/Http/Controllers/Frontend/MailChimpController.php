<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class MailChimpController extends Controller
{
    public function showForm()
    {
        return view('frontend.newsletter.news');
    }

    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'email' => 'required|email',
        ]);

        $listId = env('MAILCHIMP_LIST_ID');
        $mailchimp = new MailChimp(env('MAILCHIMP_APIKEY'));
        $result = $mailchimp->post("lists/$listId/members", [
            'email_address' => $request->email,
            'status' => 'subscribed',
        ]);

        \Log::info('MailChimp API Response: ' . json_encode($result));

        if ($result['status'] == 'subscribed') {
            \Log::info('Newsletter success message');

            Session::flash('success', 'Newsletter submitted successfully');
            return response()->json([
                'message' => 'Newsletter submitted successfully',
                'result' => $result,
                'flash_message' => Session::get('success')
            ]);
            

            // return back()->with(['message' => ' Thank you, your sign-up request for newsletter was successful!']);
        } else {
            \Log::info('Newsletter error message');

            Session::flash('success', 'Newsletter already submitted');
            return response()->json([
                'message' => 'Newsletter already submitted',
                'result' => $result,
                'flash_message' => Session::get('success')
            ]);

            // return back()->with(['message' => 'You Are already subscribed for newsletter']);
        }
    }
}
