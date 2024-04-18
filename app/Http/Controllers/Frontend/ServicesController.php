<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function index(Request $request): View
    {
        $services = Service::all();
        dd($services);

        return view('frontend.index', compact('services'));
    }
}
