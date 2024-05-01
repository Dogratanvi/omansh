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
        SEOTools::setTitle("OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga");
        SEOTools::setDescription("Specialized women's health services, physiotherapy, & rejuvenating yoga sessions at Omansh Health & Fitness.");
        SEOTools::opengraph()->setUrl('https://omansh.org/');
        SEOTools::setCanonical('https://omansh.org/');
        SEOTools::opengraph()->addProperty('type', 'home');
        SEOTools::jsonLd()->addImage('https://omansh.org/img/logo.png');
 
        $services = Service::all();
        $settings = Setting::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::where('status',1)->get()->take(2);
      


        return view('frontend.index', compact('services', 'settings', 'testimonials','blogs'));
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

    public function servicedetail()
    {
   $settings = Setting::all();
        return view('frontend.servicedetail', compact('settings'));
    }
    public function blog()
    {
        $settings = Setting::all();
       
        return view('frontend.blog', compact('settings'));
    }
    public function blogdetail()
    {
        $settings = Setting::all();
        return view('frontend.blogdetail', compact('settings'));
    }
   

    public function doctorworkshop()
    {
        $settings = Setting::all();
        return view('frontend.doctorworkshop', compact('settings'));
    }


    public function yogatraning()
    {
        $settings = Setting::all();
        return view('frontend.yogatraining', compact('settings'));
    }
 

}
