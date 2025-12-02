{{-- resources/views/emails/event-registration-confirmation.blade.php --}}
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Registration Confirmed — {{ $eventName }}</title>
</head>
<body style="margin:0;padding:0;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;color:#111;">
  <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
      <td align="center" style="padding:28px 12px;">
        <table width="640" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;border-radius:8px;overflow:hidden;">
          <tr>
            <td style="padding:22px;text-align:center;">
              {{-- Header --}}
              <h1 style="margin:0 0 8px;font-size:20px;color:#0f172a;">Registration Confirmed</h1>
              <p style="margin:0 0 14px;color:#475569;font-size:14px;">
                Hi <strong>{{ $participantName }}</strong>, your registration for
                <strong>{{ $eventName }}</strong> is confirmed.
              </p>

              {{-- Event image --}}
              @if(!empty($eventImage))
                <div style="margin:12px 0;">
                  <img src="{{ filter_var($eventImage, FILTER_VALIDATE_URL) ? $eventImage : asset($eventImage) }}"
                       alt="Event image"
                       style="max-width:100%;height:auto;border-radius:6px;display:block;margin:0 auto;">
                </div>
              @endif

              {{-- Badge-like card --}}
              <div style="display:inline-block;text-align:left;margin:18px auto 12px;padding:12px;border-radius:8px;border:1px solid #e6eef8;background:#fbfdff;max-width:380px;width:100%;">
                <div style="display:flex;gap:12px;align-items:center;">
                  {{-- left: photo / placeholder --}}
                  <div style="width:88px;height:88px;border-radius:6px;overflow:hidden;background:#f1f5f9;display:flex;align-items:center;justify-content:center;">
                    @if(!empty($registration->photo))
                      <img src="{{ filter_var($registration->photo, FILTER_VALIDATE_URL) ? $registration->photo : asset($registration->photo) }}"
                           alt="Participant photo" style="width:100%;height:100%;object-fit:cover;display:block;">
                    @else
                      <span style="color:#94a3b8;font-size:12px;">Photo</span>
                    @endif
                  </div>

                  {{-- right: info --}}
                  <div style="flex:1;">
                    <div style="font-weight:700;font-size:16px;color:#0b1220;">{{ $participantName }}</div>
                    <div style="font-size:13px;color:#64748b;margin-top:4px;">Reg. ID: <strong style="color:#0b1220;">{{ $registrationId }}</strong></div>

                    <div style="margin-top:8px;font-size:13px;color:#334155;">
                      <div style="margin-bottom:4px;"><strong>Date:</strong> {{ $eventDate }}</div>
                      <div style="margin-bottom:4px;"><strong>Time:</strong> {{ $eventTime }}</div>
                      <div><strong>Venue:</strong> {{ $eventLocation ?? 'TBA' }}</div>
                    </div>
                  </div>
                </div>

                {{-- QR + Badge ID row --}}
                <div style="display:flex;justify-content:space-between;align-items:center;margin-top:12px;">
                  <div style="width:84px;height:84px;border:1px dashed #cbd5e1;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:11px;color:#94a3b8;">
                    {{-- If you pass a data-uri QR use: <img src="{{ $qrDataUri }}" ...> --}}
                    QR
                  </div>

                  <div style="text-align:right;font-size:12px;color:#64748b;">
                    <div>Badge ID</div>
                    <div style="font-weight:700;color:#0b1220;margin-top:4px;">{{ $registrationId }}</div>
                  </div>
                </div>
              </div>

              {{-- CTA buttons --}}
              <div style="margin-top:14px;">
                <a href="{{ url('/events/'.$event->id) }}" style="display:inline-block;padding:10px 16px;margin-right:8px;background:#2563eb;color:#fff;text-decoration:none;border-radius:6px;font-weight:600;">
                  View Event
                </a>

                <a href="{{ url('/events/'.$event->id.'/badge/'.$registration->id.'/print') }}" style="display:inline-block;padding:10px 16px;border:1px solid #c7d2fe;color:#0b1220;text-decoration:none;border-radius:6px;">
                  Download / Print Badge
                </a>
              </div>

              {{-- Note / contact --}}
              <div style="margin-top:14px;color:#6b7280;font-size:13px;">
                A confirmation has been sent to <strong>{{ $registration->email }}</strong>.
                <div style="margin-top:8px;font-size:12px;">If you need help, contact the organiser at
                  <a href="mailto:{{ config('mail.from.address') }}" style="color:#2563eb;text-decoration:none;">{{ config('mail.from.address') }}</a>
                </div>
              </div>

            </td>
          </tr>

          <tr>
            <td style="background:#f6f7fb;padding:12px 18px;text-align:center;font-size:12px;color:#94a3b8;">
              This email was sent because you registered for {{ $eventName }}. If you did not register, please contact us.
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
