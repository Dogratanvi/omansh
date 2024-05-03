<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use Illuminate\Support\Str;


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

            return back()->with(['message' => ' Thank you, your sign-up request for newsletter was successful!']);
        } else {
            \Log::info('Newsletter error message');
            return back()->with(['message' => 'You Are already subscribed for newsletter']);
        }
    }
}
