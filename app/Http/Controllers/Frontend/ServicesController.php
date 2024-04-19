<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;


class ServicesController extends Controller
{
    public function service()
    {
        $services = Service::all();

        return view('frontend.service', compact('services'));
    }
    public function physiotherapy()
    {
        $services = Service::all();
     return view('frontend.services.physiotherapy', compact('services'));
    }
    public function womenhealth()
    {
        $services = Service::all();
    
     return view('frontend.services.womenhealth', compact('services'));
    
    }
    public function yoga()
    {
        $services = Service::all();
    
     return view('frontend.services.yoga', compact('services'));
    }
    
}
