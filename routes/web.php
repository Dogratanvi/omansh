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

    // contact
    Route::get('/', 'FrontendController@index')->name('index');
    Route::post('/', 'FrontendController@store')->name('index.store');
    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    //  mailchimp newsletter
    Route::get('newsletter/news', [MailChimpController::class, 'showForm'])->name('newsletter.showForm');
    Route::post('newsletter/store', [MailChimpController::class, 'store'])->name('newsletter.store');
});
