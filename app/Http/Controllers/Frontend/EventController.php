<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Setting;
use  App\Http\Controllers\Controller;


class EventController extends Controller
{

    public function __construct()
    {
  
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function upcoming()
    {
        $settings = Setting::all();
        
        return view('frontend.events.upcoming', compact('settings'));
    }
    public function single()
    {
        $settings = Setting::all();
        return view('frontend.events.single', compact('settings'));
    }
   
    public function past()
    {
        $settings = Setting::all();
        return view('frontend.events.past', compact('settings'));
    }
   
 

}