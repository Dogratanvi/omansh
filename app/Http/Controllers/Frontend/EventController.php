<?php

namespace App\Http\Controllers\Frontend;

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
        return view('frontend.events.upcoming');
    }
   
 

}