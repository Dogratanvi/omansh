{{-- resources/views/event-registration/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful - {{ $event->name ?? 'Event' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print {
            .no-print { display: none; }
            body { background: white; }
        }
        
        .badge-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.4);
        }
        
        .qr-placeholder {
            background: linear-gradient(45deg, #f3f4f6 25%, transparent 25%, transparent 75%, #f3f4f6 75%, #f3f4f6),
                        linear-gradient(45deg, #f3f4f6 25%, transparent 25%, transparent 75%, #f3f4f6 75%, #f3f4f6);
            background-size: 10px 10px;
            background-position: 0 0, 5px 5px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">
    
    <!-- Success Message Banner -->
    <div class="no-print bg-green-500 text-white py-4 px-6 text-center">
        <div class="container mx-auto">
            <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="font-semibold">Registration Successful!</span> Your confirmation email has been sent to {{ $registration->email }}
        </div>
    </div>

    <div class="container mx-auto px-4 py-8 max-w-4xl">
        
        <!-- Back Button -->
        <div class="no-print mb-6">
            <a href="{{ route('frontend.events.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Events
            </a>
        </div>

        <!-- Event Badge Card -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden mb-8">
            
            <!-- Header Section -->
            <div class="badge-card text-white p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -ml-24 -mb-24"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h1 class="text-3xl font-bold mb-2">Registration Confirmed</h1>
                            <p class="text-indigo-100">Your spot is reserved!</p>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full p-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 inline-block">
                        <div class="text-sm text-indigo-100 mb-1">Registration ID</div>
                        <div class="text-2xl font-mono font-bold tracking-wider">{{ $registration->registration_id }}</div>
                    </div>
                </div>
            </div>

            <!-- Badge Content -->
            <div class="p-8">
                
                <!-- Participant Info with Photo -->
                <div class="flex items-start gap-6 mb-8 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6">
                    
                    <!-- Profile Photo -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 rounded-xl overflow-hidden border-4 border-white shadow-lg">
                            @if($registration->profile_picture_url)
                                <img src="{{ $registration->profile_picture_url }}" 
                                     alt="{{ $registration->full_name }}" 
                                     class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-indigo-400 to-purple-400 flex items-center justify-center">
                                    <span class="text-white text-4xl font-bold">{{ substr($registration->first_name, 0, 1) }}{{ substr($registration->last_name, 0, 1) }}</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Participant Details -->
                    <div class="flex-grow">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ $registration->full_name }}</h2>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <p class="font-medium text-gray-800">{{ $registration->email }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Phone</p>
                                <p class="font-medium text-gray-800">{{ $registration->phone }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Gender</p>
                                <p class="font-medium text-gray-800 capitalize">{{ $registration->gender }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Registration Status</p>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $registration->registration_status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ ucfirst($registration->registration_status) }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- QR Code Placeholder -->
                    <div class="flex-shrink-0">
                        <div class="qr-placeholder w-32 h-32 rounded-lg border-2 border-dashed border-gray-300 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 mx-auto text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path>
                                </svg>
                                <p class="text-xs text-gray-500">QR Code</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Details -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Event Details
                    </h3>

                    @if(!empty($event->featured_image))
                    <div class="mb-6 rounded-xl overflow-hidden">
                        <img src="{{ filter_var($event->featured_image, FILTER_VALIDATE_URL) ? $event->featured_image : asset('storage/' . $event->featured_image) }}" 
                             alt="{{ $event->name }}" 
                             class="w-full h-64 object-cover">
                    </div>
                    @endif

                    <div class="bg-gray-50 rounded-xl p-6">
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">{{ $event->name ?? $registration->event_name }}</h4>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-3 text-indigo-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Date & Time</p>
                                    <p class="font-medium text-gray-800">
                                        @if($event && $event->date_from)
                                            {{ \Carbon\Carbon::parse($event->date_from)->format('l, F j, Y') }}
                                            <br>
                                            <span class="text-indigo-600">{{ \Carbon\Carbon::parse($event->date_from)->format('g:i A') }}</span>
                                            @if($event->date_to && $event->date_to != $event->date_from)
                                                <br>to {{ \Carbon\Carbon::parse($event->date_to)->format('F j, Y g:i A') }}
                                            @endif
                                        @else
                                            {{ $registration->event_date_from ? \Carbon\Carbon::parse($registration->event_date_from)->format('F j, Y g:i A') : 'TBA' }}
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-3 text-indigo-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Location</p>
                                    <p class="font-medium text-gray-800">{{ $event->location ?? $registration->event_location ?? 'TBA' }}</p>
                                </div>
                            </div>
                        </div>

                        @if($event && $event->description)
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <p class="text-sm text-gray-500 mb-2">Event Description</p>
                            <p class="text-gray-700">{{ Str::limit($event->description, 300) }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Address Information -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Participant Address
                    </h3>
                    <div class="bg-gray-50 rounded-xl p-6">
                        <p class="text-gray-800 mb-2">{{ $registration->address }}</p>
                        <p class="text-gray-600">{{ $registration->city }}, {{ $registration->state }} - {{ $registration->pincode }}</p>
                        <p class="text-gray-600">{{ $registration->country }}</p>
                    </div>
                </div>

                @if($registration->emergency_contact_name || $registration->special_requirements)
                <!-- Additional Information -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Additional Information
                    </h3>
                    <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                        @if($registration->emergency_contact_name)
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Emergency Contact</p>
                            <p class="font-medium text-gray-800">{{ $registration->emergency_contact_name }}</p>
                            @if($registration->emergency_contact_phone)
                            <p class="text-gray-600">{{ $registration->emergency_contact_phone }}</p>
                            @endif
                        </div>
                        @endif

                        @if($registration->special_requirements)
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Special Requirements</p>
                            <p class="text-gray-800">{{ $registration->special_requirements }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                @endif

                <!-- Action Buttons -->
                <div class="no-print flex flex-wrap gap-4 justify-center">
                    <button onclick="window.print()" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg transition duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                        </svg>
                        Print Badge
                    </button>

                    <a href="mailto:{{ $registration->email }}" class="inline-flex items-center px-6 py-3 bg-white hover:bg-gray-50 text-gray-700 font-semibold rounded-lg shadow-lg border-2 border-gray-200 transition duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Email Confirmation
                    </a>

                    @if($event && $event->id)
                    <a href="{{ route('frontend.events.show', $event->id) }}" class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg shadow-lg transition duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        View Event Details
                    </a>
                    @endif
                </div>

                <!-- Important Notice -->
                <div class="mt-8 bg-blue-50 border-l-4 border-blue-500 rounded-r-lg p-6">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <h4 class="font-bold text-blue-900 mb-2">Important Information</h4>
                            <ul class="text-sm text-blue-800 space-y-1">
                                <li>• Please bring a printed copy or digital version of this badge to the event</li>
                                <li>• Arrive at least 30 minutes before the event starts</li>
                                <li>• A valid government ID matching your registration details is required</li>
                                <li>• Check your email for additional event updates and instructions</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <div class="no-print text-center text-gray-600 text-sm">
            <p>Need help? Contact us at <a href="mailto:{{ config('mail.from.address') }}" class="text-indigo-600 hover:text-indigo-800">{{ config('mail.from.address') }}</a></p>
            <p class="mt-2">Registration ID: <span class="font-mono font-semibold">{{ $registration->registration_id }}</span></p>
        </div>

    </div>

</body>
</html>