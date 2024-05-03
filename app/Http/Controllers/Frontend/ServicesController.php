<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;

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
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.womenhealth', compact('services', 'settings','meta_page_type'));
    
    }
    public function yoga()
    {
        $meta_page_type = 'yoga';
        $services = Service::all();
        $settings = Setting::all();
     return view('frontend.services.yoga', compact('services', 'settings', 'meta_page_type'));
    }
    
}
