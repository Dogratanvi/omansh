<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Service;

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
        


        return view('frontend.index', compact('services'));
    }

    public function about()
    {
 
        return view('frontend.about');
    }
    public function contact()
    {
 
        return view('frontend.contact');
    }
    public function service()
    {
 
        return view('frontend.service');
    }
    public function servicedetail()
    {
 
        return view('frontend.servicedetail');
    }
    public function blog()
    {
 
        return view('frontend.blog');
    }
    public function blogdetail()
    {
 
        return view('frontend.blogdetail');
    }
   

    public function doctorworkshop()
    {
 
        return view('frontend.doctorworkshop');
    }


    public function yogatraning()
    {
 
        return view('frontend.yogatraining');
    }
 

}
