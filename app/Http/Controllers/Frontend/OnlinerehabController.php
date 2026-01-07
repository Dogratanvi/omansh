<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Gallery;

class OnlinerehabController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        $meta_page_type = 'online-rehab-program';
        return view('frontend.online-rehab-program', compact( 'settings', 'meta_page_type'));
    }

}
