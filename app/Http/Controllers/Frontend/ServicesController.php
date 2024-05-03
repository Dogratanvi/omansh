<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Gallery;

class ServicesController extends Controller
{
    public function service()
    {
        $services = Service::all();
        $settings = Setting::all();
        $meta_page_type = 'service';
        return view('frontend.services', compact('services', 'settings', 'meta_page_type'));
    }
    public function physiotherapy()
    {
        $meta_page_type = 'physiotherapy';
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.physiotherapy', compact('services', 'settings', 'meta_page_type'));
    }
    public function womenhealth()
    {
        $meta_page_type = 'womenHealth';
        $galleries = Gallery::where('category','physiotherapy')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.physiotherapy', compact('services', 'settings', 'galleryImages','meta_page_type'));
    }
 
    public function yoga()
    {

        $meta_page_type = 'yoga';
        $galleries = Gallery::where('category','yoga')->first();
        $galleryImages = $galleries->featured_image;
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.yoga', compact('services', 'settings', 'galleryImages','meta_page_type'));

    }
    
}
