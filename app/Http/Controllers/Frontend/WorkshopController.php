<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Setting;
use App\Models\Workshop;
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

          return view(
            "frontend.{$module_path_workshop}.doctortraining",
            compact(
                'module_workshop', 
                'module_name_workshop', 
                'module_path_workshop','settings', 'workshops'
            
            )
        );
     }
 
 
     public function yogatraining()
     {
        $settings = Setting::all();
         return view('frontend.workshop.yogatraining', compact('settings'));
     }
  
     public function corporatetraining()
     { $workshops = Workshop::all();

        $settings = Setting::all();
         return view('frontend.workshop.corporatetraining', compact('settings', 'workshops'));
     }
  
}