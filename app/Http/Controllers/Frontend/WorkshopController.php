<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Setting;
use App\Models\Workshop;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Announcement;

class WorkshopController extends Controller
{
    // Page Title
    public $module_workshop;

    // module name
    public $module_name_workshop;

    // directory path of the module
    public $module_path_workshop;



    public function __construct()
    {
        // Page Title
        $this->module_workshop = 'workshop';
 
        // module name
        $this->module_name_workshop = 'workshop';


        // directory path of the module
        $this->module_path_workshop = 'workshop';

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


     public function doctortraining()
     {
          // workshop
          $module_workshop = $this->module_workshop;
          $module_name_workshop = $this->module_name_workshop;
          $module_path_workshop = $this->module_path_workshop;
          $settings = Setting::all();
          $workshops = Workshop::all();
          $testimonials = Testimonial::all();
          return view(
           
            "frontend.{$module_path_workshop}.doctortraining",
            compact(
                'module_workshop', 
                'module_name_workshop', 
                'module_path_workshop','settings', 'workshops','testimonials'
            
            )
        );
     }
 
 
     public function yogateacherTraining()
     {
        $meta_page_type = 'yogaTeacherTraining';
        $workshops = Workshop::all();
        $testimonials = Testimonial::all();
        $settings = Setting::all();
        $galleries = Gallery::where('category','yoga-training')->first();
        $galleryImages = $galleries->featured_image;
         return view('frontend.workshop.yoga-teacher-training', compact('settings','workshops', 'testimonials', 'galleryImages','meta_page_type'));

     }
  
     public function corporatesessions()
     {
        $meta_page_type = 'corporateSessions';
        $workshops = Workshop::all();
        $testimonials = Testimonial::all();
        $galleries = Gallery::where('category','corporate-training')->first();
        $galleryImages = $galleries->featured_image;
        $settings = Setting::all();

         return view('frontend.workshop.corporatesessions', compact('settings', 'workshops', 'testimonials', 'galleryImages','meta_page_type'));

     }
          public function antenatal()
     {
        $meta_page_type = 'antenatal';
        $workshops = Workshop::all();
         $announcements = Announcement::where('status', true)->get();
        $testimonials = Testimonial::all();
        $galleries = Gallery::where('category','corporate-training')->first();
        $galleryImages = $galleries->featured_image;
        $settings = Setting::all();

         return view('frontend.workshop.antenatal-and-postnatal-physiotherapy', compact('settings', 'workshops', 'announcements', 'testimonials', 'galleryImages','meta_page_type'));

     }
  
}