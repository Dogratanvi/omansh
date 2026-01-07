<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use  App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EventRegistrationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-email', function () {
    try {
        Mail::raw('Test email from Laravel', function ($message) {
            $message->to('sushilckatoch@gmail.com')
                    ->subject('Test Email');
        });
        
        $failures = Mail::failures();
        if (empty($failures)) {
            return 'Email sent successfully! Check your inbox.';
        } else {
            return 'Email failed: ' . implode(', ', $failures);
        }
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
// routes/web.php
Route::get('/test-email/{registrationId}', function($registrationId) {
    $registration = \App\Models\EventRegistration::where('registration_id', $registrationId)->firstOrFail();
    $event = $registration->event;
    
    return view('emails.event-registration-confirmation', [
        'registration' => $registration,
        'event' => $event,
        'participantName' => $registration->full_name,
        'registrationId' => $registration->registration_id,
        'eventName' => $event->name,
        'eventDate' => $event->date_from->format('F j, Y'),
        'eventTime' => $event->date_from->format('g:i A'),
        'eventLocation' => $event->location,
        'eventImage' => $event->featured_image,
    ]);
});


  
// frontend routes
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('about', 'FrontendController@about')->name('about');
    Route::get('gallery', 'FrontendController@gallery')->name('gallery');
  
//   redirection

Route::redirect('/services/physiotheraphy/geriatric-physiotherapy', '/services/geriatric-physiotherapy', 301);
Route::redirect('/services/physiotheraphy/neuro-physiotherapy', '/services/neuro-physiotherapy', 301);
Route::redirect('/services/physiotheraphy/orthopedic-physiotheraphy', '/services/orthopedic-physiotherapy', 301);
Route::redirect('/services/physiotheraphy/pediatric-physiotherapy', '/services/pediatric-physiotherapy', 301);
Route::redirect('/services/physiotheraphy/sport-physiotherapy', '/services/sport-physiotherapy', 301);


    //workshop
    $module_name = 'workshop';
    $controller_name = 'WorkshopController';
    // Route::get('workshop/doctortraining', 'WorkshopController@doctortraining')->name('workshop.doctortraining');
    Route::get('workshop/yoga-teacher-training', 'WorkshopController@yogateacherTraining')->name('workshop.yoga-teacher-training');
    Route::get('workshop/corporatesessions', 'WorkshopController@corporatesessions')->name('workshop.corporatesessions');
    Route::get('workshop/antenatal-and-postnatal-physiotherapy', 'WorkshopController@antenatal')->name('workshop.antenatal-and-postnatal-physiotherapy');

    //feedback
     $module_name = 'feedbackform';
     $controller_name = 'FeedbackController';
     Route::get('feedback/form', 'FeedbackController@form')->name('feedback.form');
     Route::post('feedback/store', 'FeedbackController@store')->name('feedback.store');

    //Events
     $module_name = 'events';
     $controller_name = 'EventController';
     Route::get('events/upcoming', 'EventController@upcoming')->name('events.upcoming');
     Route::get('events', 'EventController@index')->name('events.index');
     Route::get('events/past', 'EventController@past')->name('events.past');
     Route::get('events/{id}/{slug}', 'EventController@single')->name('events.single');
 
    //  services

    $module_name = 'services';
    $controller_name = 'ServicesController';
    Route::get('services', 'ServicesController@service')->name('services');
    Route::get('services/physiotherapy', 'ServicesController@physiotherapy')->name('services.physiotherapy');
    Route::get('services/womenhealth', 'ServicesController@womenhealth')->name('services.womenhealth');
    Route::get('services/yoga', 'ServicesController@yoga')->name('services.yoga');
    
    Route::get('services/womenhealth/pelvic-floor-dysfunctions', 'ServicesController@pelvicFloor')->name('services.womenhealth.pelvic-floor-dysfunctions');
    Route::get('services/womenhealth/pregnancy-and-postpartum', 'ServicesController@pregnancyPostpartum')->name('services.womenhealth.pregnancy-and-postpartum');
    Route::get('services/womenhealth/exercise-programs-and-pilates', 'ServicesController@programsPilates')->name('services.womenhealth.exercise-programs-and-pilates');
    Route::get('services/womenhealth/bowel-issues-and-prolapse', 'ServicesController@bowelProlapse')->name('services.womenhealth.bowel-issues-and-prolapse');
    Route::get('services/womenhealth/bladder-dysfunction', 'ServicesController@bladderDysfunction')->name('services.womenhealth.bladder-dysfunction');
    
        // physiotheraphy 
    Route::get('services/orthopedic-physiotheraphy', 'ServicesController@orthopedic')->name('services.physiotheraphy.orthopedic-physiotheraphy');
    Route::get('services/neuro-physiotherapy', 'ServicesController@neuro')->name('services.physiotheraphy.neuro-physiotherapy');
    Route::get('services/sport-physiotherapy', 'ServicesController@sport')->name('services.physiotheraphy.sport-physiotherapy');
    Route::get('services/geriatric-physiotherapy', 'ServicesController@geriatric')->name('services.physiotheraphy.geriatric-physiotherapy');
    Route::get('services/pediatric-physiotherapy', 'ServicesController@pediatric')->name('services.physiotheraphy.pediatric-physiotherapy');


    // yoga    
    Route::get('services/yoga/corporate-yoga', 'ServicesController@corporate')->name('services.yoga.corporate-yoga');
    Route::get('services/yoga/pregnancy-yoga', 'ServicesController@pregnancy')->name('services.yoga.pregnancy-yoga');
    Route::get('services/yoga/medical-yoga', 'ServicesController@medical')->name('services.yoga.medical-yoga');
    Route::get('services/yoga/general-yoga-and-pilates', 'ServicesController@pilates')->name('services.yoga.general-yoga-and-pilates');
    Route::get('services/yoga/aerial-yoga', 'ServicesController@aerial')->name('services.yoga.aerial-yoga');

    Route::post('comments', 'CommentController@store')->name('comments');
    Route::get('comments/{id}', 'CommentController@index');
   
   // footer
    Route::get('includes/footer', 'FrontendController@service')->name('includes.footer');
    // author
    Route::get('author/dr-garima-biswas', 'FrontendController@author')->name('author');

   
    $controller_name = 'ServicesController';
    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    //  mailchimp newsletter
     Route::get('newsletter', [MailChimpController::class, 'showForm']);
     Route::post('newsletter', [MailChimpController::class, 'store'])->name('newsletter.store');

     //  blog
     Route::get('blog', 'BlogController@index')->name('blog.index');
     Route::get('blog/{id}/{slug}', 'BlogController@show')->name('blog.show');
     Route::get('blog/{id}/{slug}/next', 'BlogController@next')->name('blogs.next');
    Route::get('blog/{id}/{slug}/previous', 'BlogController@previous')->name('blogs.previous');

    Route::get('privacy-policy', 'FrontendController@privacyPolicy')->name('privacy-policy');
    Route::get('terms&condition', 'FrontendController@termsCondition')->name('terms&condition');
    // booking form
    Route::get('bookingform', 'BookingsController@index')->name('bookingform');
    Route::post('bookingform', 'BookingsController@store')->name('bookingform.store');

    // landing page
    Route::get('webinar', 'WebinarController@index')->name('/webinar');
 Route::get('/online-rehab-program', 'OnlinerehabController@index')->name('/online-rehab-program');
    Route::post('payment/store','WebinarController@store')->name('payment.store');
    Route::post('/payment/verify', 'WebinarController@verify')->name('payment.verify');
    


    
Route::get('/registration/success/{registrationId}', [EventRegistrationController::class, 'show'])
    ->name('registration.success');
    
    // Store event registration
    Route::post('/registration/store', [EventRegistrationController::class, 'store'])
        ->name('event-registration.store');
    
    // Check registration status
    Route::post('/registration/check-status', [EventRegistrationController::class, 'checkStatus'])
        ->name('event-registration.check-status');
    
    // Cancel registration
    Route::post('/registration/cancel', [EventRegistrationController::class, 'cancel'])
        ->name('event-registration.cancel');
    
    // Get available events (AJAX)
    Route::get('/api/available-events', [EventRegistrationController::class, 'getAvailableEvents'])
        ->name('event-registration.available-events');
});