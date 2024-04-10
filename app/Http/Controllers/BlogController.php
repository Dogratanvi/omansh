<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): Response
    {
        $blogs = Blog::all();

        return view('blog.index', compact('blogs'));
    }

    public function create(Request $request): Response
    {
        return view('blog.create');
    }

    public function store(BlogStoreRequest $request): Response
    {
        $blog = Blog::create($request->validated());

        return redirect()->route('blog.index');
    }
}
