<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\AboutOmansh;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Blog;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;

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
        $meta_page_type = 'home';
 
        $services = Service::all();
        $settings = Setting::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::where('status',1)->get()->take(2);
        $services = Service::orderBy('order')->take(3)->get();

        $recents = Blog::where('status',1)->orderBy('created_at', 'desc')->get();
       

        return view('frontend.index', compact('services', 'settings', 'testimonials','blogs','meta_page_type'));

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
        $meta_page_type = 'about';
        $about_omanshes = AboutOmansh::all();
        $settings = Setting::all();
             return view('frontend.about', compact('about_omanshes', 'settings','meta_page_type'));
    }
    public function contact()
    {
        $meta_page_type = 'contact';
        $settings = Setting::all();
        return view('frontend.contact.create', compact('settings','meta_page_type'));
    }

    public function blog()
    {
        $meta_page_type = 'blog';
        $settings = Setting::all();
       
        return view('frontend.blog', compact('settings','meta_page_type'));
    }

 

}
