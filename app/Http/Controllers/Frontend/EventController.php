<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Setting;
use  App\Http\Controllers\Controller;
use App\Models\Events;
use Carbon\Carbon;

class EventController extends Controller
{

    public function __construct()
    {
  
    }
    
     public function index()
    {
        $now = Carbon::now();
    
       

       $pastEvents = Events::where('date_to', '<', $now)
                           ->orderBy('date_to', 'desc')
                           ->get();
        

    
     

        $upcomingEvents = Events::where('date_from', '>', $now)
                               ->orderBy('date_from', 'asc')
                               ->get();
                               
        

                               
        $settings = Setting::all();

        return view('frontend.events.index', compact('pastEvents','upcomingEvents','settings'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function upcoming()
    {
        $now = Carbon::now();
        $upcomingEvents =Events::where('date_from', '>', $now)
                               ->orderBy('date_from', 'asc')
                               ->get();
        $settings = Setting::all();
        
        return view('frontend.events.upcoming', compact('settings','upcomingEvents'));
    }
    
   public function single($id,$slug)
    {
        $event = Events::find($id);
        $slug = $event->slug;
        $settings = Setting::all();
        return view('frontend.events.single', compact('settings', 'slug','event'));
    }
   
    public function past()
    {
        $now = Carbon::now();
        $pastEvents = Events::where('date_to', '<', $now)
                           ->orderBy('date_to', 'desc')
                           ->get();
        $settings = Setting::all();
        return view('frontend.events.past', compact('pastEvents','settings'));
    }
   
 

}