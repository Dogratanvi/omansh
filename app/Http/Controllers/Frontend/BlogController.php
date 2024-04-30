<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $blogs = Blog::all();
        $settings = Setting::all();
        return view('frontend.blog.index', compact('blogs', 'settings'));
    }

    public function create(Request $request): View
    {
        return view('blog.create');
    }

    public function show(BLog $id)
    {
     
        $blogs = $id;
        $settings = Setting::all();
        return view('frontend.blog.show', compact('blogs', 'settings'));
    }

    public function next(Blog $blogs)
    {
        $blogs = Blog::where('id', '>', $blogs->id)->orderBy('id')->first();
        if($blogs != null)
        {
            return redirect()->route('frontend.blog.show', $blogs);
        }else{
           return redirect()->back();
        }
      
     
    }

    public function previous(Blog $blogs)
    {
       
        $blogs = Blog::where('id', '<', $blogs->id)->orderBy('id', 'desc')->first();
        if($blogs != null)
        {
            return redirect()->route('frontend.blog.show', $blogs);
        }else{
           return redirect()->back();
        }
    }
}
