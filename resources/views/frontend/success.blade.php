{{-- SUCCESS PAGE: resources/views/frontend/success.blade.php --}}
@extends('frontend.layouts.app')
@section('content')
<main class="success-page">
    <section class="py-5 min-vh-100 d-flex align-items-center mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center p-5">
                            {{-- Success Icon --}}
                            <div class="success-icon mb-4">
                                <i class="fas fa-check-circle text-success" style="font-size: 80px;"></i>
                            </div>
                            
                            {{-- Success Message --}}
                            <h2 class="text-success fw-bold mb-3">Payment Successful!</h2>
                            <h4 class="text-theme mb-4">Registration Confirmed</h4>
                            
                            <p class="text-dark mb-4">
                                Thank you for registering for the <strong>Diastasis Recti Online Rehab Program</strong>. 
                                Your payment has been successfully processed.
                            </p>
                            
                            {{-- Program Details --}}
                            <div class="alert alert-info">
                                <h5 class="fw-bold mb-3">Program Details:</h5>
                                <p class="mb-2"><strong>Start Date:</strong> 19th January 2026</p>
                                <p class="mb-2"><strong>Duration:</strong> 4 Weeks (12 Sessions)</p>
                                <p class="mb-0"><strong>Mode:</strong> Live Zoom Sessions</p>
                            </div>
                            
                            {{-- Next Steps --}}
                            <div class="bg-light p-4 rounded mb-4">
                                <h5 class="fw-bold mb-3 text-theme">What's Next?</h5>
                                <ul class="list-unstyled text-start">
                                    <li class="mb-2">
                                        <i class="fas fa-envelope text-success me-2"></i>
                                        Check your email for confirmation and program details
                                    </li>
                                    <li class="mb-2">
                                        <i class="fab fa-whatsapp text-success me-2"></i>
                                        You'll be added to the WhatsApp group within 24 hours
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-video text-success me-2"></i>
                                        Zoom link will be shared before the first session
                                    </li>
                                    <li class="mb-0">
                                        <i class="fas fa-clipboard-check text-success me-2"></i>
                                        Initial assessment form will be sent to you
                                    </li>
                                </ul>
                            </div>
                            
                            {{-- Support Information --}}
                            <div class="border-top pt-4">
                                <p class="text-muted mb-2">Need Help?</p>
                                <p class="mb-0">
                                    <i class="fas fa-phone text-theme me-2"></i>
                                    <strong>Contact:</strong> +91-XXXXXXXXXX
                                </p>
                                <p class="mb-4">
                                    <i class="fas fa-envelope text-theme me-2"></i>
                                    <strong>Email:</strong> support@omanshhealth.com
                                </p>
                            </div>
                            
                            {{-- Action Buttons --}}
                            <div class="d-flex gap-3 justify-content-center">
                                <a href="/" class="btn btn-outline-success px-4">
                                    <i class="fas fa-home me-2"></i>Back to Home
                                </a>
                                <a href="https://www.instagram.com/omansh_health_fitness/" target="_blank" class="btn btn-success px-4">
                                    <i class="fab fa-instagram me-2"></i>Follow Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

{{-- Add custom CSS if needed --}}
@push('styles')
<style>
    .success-icon i {
        animation: scaleIn 0.5s ease-in-out;
    }
    
    @keyframes scaleIn {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }
</style>
@endpush

@extends('frontend.layouts.app')

@php
     $settings = App\Models\Setting::all();
        $meta_page_type = 'online-rehab-program';
@endphp

