<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function physiotherapy()
    {
     return view('frontend.services.physiotherapy');
    }
    public function womenhealth()
    {
     return view('frontend.services.womenhealth');
    }
    public function yoga()
    {
     return view('frontend.services.yoga');
    }
    
}
