<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Frontend\ContactController;

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


    //  mailchimp newsletter
    Route::get('newsletter/news', [MailChimpController::class, 'showForm'])->name('newsletter.showForm');
    Route::post('newsletter/store', [MailChimpController::class, 'store'])->name('newsletter.store');

// frontend routes
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@home')->name('home');
    Route::get('about', 'FrontendController@about')->name('about');
  
    Route::get('doctorworkshop', 'FrontendController@doctorworkshop')->name('doctorworkshop');
    Route::get('yogatraining', 'FrontendController@yogatraining')->name('yogatraining');
    
    Route::get('servicedetail', 'FrontendController@servicedetail')->name('servicedetail');
    Route::get('blog', 'FrontendController@blog')->name('blog');
    Route::get('blogdetail', 'FrontendController@blogdetail')->name('blogdetail');

    //workshop
    $module_name = 'workshop';
    $controller_name = 'WorkshopController';
    Route::get('workshop/doctortraining', 'WorkshopController@doctortraining')->name('workshop.doctortraining');
    Route::get('workshop/yogatraining', 'WorkshopController@yogatraining')->name('workshop.yogatraining');
    Route::get('workshop/corporatetraining', 'WorkshopController@corporatetraining')->name('workshop.corporatetraining');

    //feedback
     $module_name = 'feedbackform';
     $controller_name = 'FeedbackController';
     Route::get('feedback/form', 'FeedbackController@form')->name('feedback.form');

    //Events
     $module_name = 'events';
     $controller_name = 'EventController';
     Route::get('events/upcoming', 'EventController@upcoming')->name('events.upcoming');
     Route::get('events/past', 'EventController@past')->name('events.past');
 
    //  services

    $module_name = 'services';
    $controller_name = 'ServicesController';
    Route::get('services', 'ServicesController@service')->name('services');
    Route::get('services/physiotherapy', 'ServicesController@physiotherapy')->name('services.physiotherapy');
    Route::get('services/womenhealth', 'ServicesController@womenhealth')->name('services.womenhealth');
    Route::get('services/yoga', 'ServicesController@yoga')->name('services.yoga');
   
   // footer
    Route::get('includes/footer', 'FrontendController@service')->name('includes.footer');
    // contact
   
    $controller_name = 'ServicesController';
    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

});
