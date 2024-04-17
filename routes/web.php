<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Route;

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



// frontend routes
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@home')->name('home');
    Route::get('about', 'FrontendController@about')->name('about');
    Route::get('contact', 'FrontendController@contact')->name('contact');
    Route::get('doctorworkshop', 'FrontendController@doctorworkshop')->name('doctorworkshop');
    Route::get('yogatraining', 'FrontendController@yogatraining')->name('yogatraining');
    Route::get('service', 'FrontendController@service')->name('service');
    Route::get('servicedetail', 'FrontendController@servicedetail')->name('servicedetail');
    Route::get('blog', 'FrontendController@blog')->name('blog');
    Route::get('blogdetail', 'FrontendController@blogdetail')->name('blogdetail');

    // contact

    //  mailchimp newsletter
    Route::get('newsletter/news', [MailChimpController::class, 'showForm'])->name('newsletter.showForm');
    Route::post('newsletter/store', [MailChimpController::class, 'store'])->name('newsletter.store');
});
