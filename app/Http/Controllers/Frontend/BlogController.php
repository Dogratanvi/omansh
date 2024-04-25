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

        return view('blog.index', compact('blogs'));
    }

    public function create(Request $request): View
    {
        return view('blog.create');
    }

    public function blogPost($id)
    {
        $id =1;
        $blogs = Blog::find($id);
        $settings = Setting::all();
        
        return view('frontend.blogPost', compact('blogs','settings'));
    }

    public function store(BlogStoreRequest $request): RedirectResponse
    {
        $blog = Blog::create($request->validated());

        return redirect()->route('blog.index');
    }
}
