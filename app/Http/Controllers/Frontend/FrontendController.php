<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\AboutOmansh;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Blog;

class FrontendController extends Controller
{

    public function __construct()
    {
  
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
 
        $services = Service::all();
        $settings = Setting::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::where('status',1)->get()->take(2);
        $services = Service::orderBy('order')->take(3)->get();

        $recents = Blog::where('status',1)->orderBy('created_at', 'desc')->get();
       


        return view('frontend.index', compact('services', 'settings', 'testimonials','blogs','recents'));
    }

    public function privacyPolicy()
    {
        $settings = Setting::all();
        return view('frontend.privacy-policy', compact('settings'));
    }
    public function termsCondition()
    {
        $settings = Setting::all();
        return view('frontend.terms&condition', compact('settings'));
    }

    public function about()
    {
        $about_omanshes = AboutOmansh::all();
        $settings = Setting::all();
             return view('frontend.about', compact('about_omanshes', 'settings'));
    }
    public function contact()
    {
       $settings = Setting::all();
        return view('frontend.contact.create', compact('settings'));
    }


}
