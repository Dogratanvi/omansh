<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        SEOTools::setTitle("OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga");
        SEOTools::setDescription("Specialized women's health services, physiotherapy, & rejuvenating yoga sessions at Omansh Health & Fitness.");
        SEOTools::opengraph()->setUrl('https://omansh.org/');
        SEOTools::setCanonical('https://omansh.org/');
        SEOTools::opengraph()->addProperty('type', 'home');
        SEOTools::jsonLd()->addImage('https://omansh.org/img/logo.png');

        $blogs = Blog::all();
        $settings = Setting::all();
        return view('frontend.blog.index', compact('blogs', 'settings'));
    }

    public function create(Request $request): View
    {
        return view('blog.create');
    }

    public function show($id,$slug)
    {
     
        $blogs = Blog::find($id);
      
        $slug = $blogs->slug;
        $settings = Setting::all();
        $recents = Blog::where('status',1)->orderBy('created_at', 'desc')->get();
        return view('frontend.blog.show', compact('blogs', 'settings','recents'));
    }

    public function next($id, $slug)
    {
        $blogs = Blog::where('id', '>', $id)->orderBy('id')->first();
        if($blogs != null)
        {
            return redirect()->route('frontend.blog.show', ['id' => $blogs->id, 'slug' => $blogs->slug]);
        }else{
           return redirect()->back();
        }
      
     
    }

    public function previous($id, $slug)
    {
       
        $blogs = Blog::where('id', '<', $id)->orderBy('id', 'desc')->first();
        if($blogs != null)
        {
            return redirect()->route('frontend.blog.show', ['id' => $blogs->id, 'slug' => $blogs->slug]);
        }else{
           return redirect()->back();
        }
    }
}
