<?php

namespace App\Services;

use Resend;
use Illuminate\Support\Facades\Log;

class ResendService
{
    protected $resend;

    public function __construct()
    {
        $this->resend = Resend::client(config('services.resend.api_key'));
    }

    /**
     * Send email using Resend
     */
    public function sendEmail($to, $subject, $html, $from = null)
    {
        try {
            $fromEmail = $from ?? config('services.resend.from_email');
            $fromName = config('services.resend.from_name');

            $result = $this->resend->emails->send([
                'from' => "{$fromName} <{$fromEmail}>",
                'to' => [$to],
                'subject' => $subject,
                'html' => $html,
            ]);

            Log::info('Email sent successfully via Resend', [
                'to' => $to,
                'id' => $result->id ?? null
            ]);

            return [
                'success' => true,
                'id' => $result->id ?? null
            ];

        } catch (\Exception $e) {
            Log::error('Resend email error: ' . $e->getMessage(), [
                'to' => $to,
                'subject' => $subject
            ]);

            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}