<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeedbackController extends Controller
{
    // Page Title
    public $module_feedback;

    // module name
    public $module_name_feedback;

    // directory path of the module
    public $module_path_feedback;



    public function __construct()
    {
        // Page Title
        $this->module_feedback = 'feedback';
 
        // module name
        $this->module_name_feedback = 'feedback';


        // directory path of the module
        $this->module_path_feedback = 'feedback';

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


     public function form()
     {
          // feedback
          $module_feedback = $this->module_feedback;
          $module_name_feedback = $this->module_name_feedback;
          $module_path_feedback = $this->module_path_feedback;
          $settings = Setting::all();
        

          return view(
            "frontend.{$module_path_feedback}.form",
            compact(
                'module_feedback', 
                'module_name_feedback', 
                'module_path_feedback',
                'settings'
            
            )
        );
     }

  
  
}