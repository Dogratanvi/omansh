<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Setting;
use Exception;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Validator;

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
                'settings',
                'module_path_feedback'

            )
        );
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'like_about_class' => 'required|string',
            'help_us_improve' => 'required',
            'like_most_about_class' => 'required',
            'instruction_given' => 'required',
            // Add more validation rules for other form fields
        ]);

        try {

            if ($validator->fails()) {
                return redirect()->back()->with([
                    'data' => 'Some unknown error occurred',
                    'status' => 'danger',
                ]);
            }

            $input = $request->except(['_token', 'g-recaptcha-response', 'g-token']);


            $feedback = new Feedback;
            $feedback->like_most_about_class = $request->like_most_about_class;
            $feedback->teacher_knowledge = $request->teacher_knowledge;
            $feedback->instruction_given = $request->instruction_given;
            $feedback->yoga_sequence = $request->yoga_sequence;
            $feedback->meet_your_expectations = $request->meet_your_expectations;
            $feedback->like_about_class = $request->like_about_class;
            $feedback->help_us_improve = $request->help_us_improve;
            $feedback->hear_about_omansh = $request->hear_about_omansh;
            $feedback->save();


            return redirect()->back()->with([
                'data' => 'Thank you for feedback!',
                'status' => 'success',
            ]);
        } catch (Exception $e) {

            return redirect()->back()->with([
                'data' => 'There is some unknown error!',
                'status' => 'danger',
            ]);
        }
    }
}
