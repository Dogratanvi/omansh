@extends('frontend.layouts.app')

@php
     $settings = App\Models\Setting::all();
        $meta_page_type = 'online-rehab-program';
@endphp
@section('content')
<div class="banner-section-outer">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <i class="fas fa-check-circle text-success" style="font-size: 80px;"></i>
                    <h1 class="mt-4 mb-3 text-success">Payment Successful!</h1>
                    <p class="lead">Thank you for registering for the Diastasis Recti Online Rehab Program.</p>
                    <p>You will receive a confirmation email shortly with program details.</p>
                    <hr class="my-4">
                    <a href="/ class="btn btn-primary btn-lg">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection