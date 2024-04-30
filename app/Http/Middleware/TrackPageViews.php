<?php

namespace App\Http\Middleware;

use App\Models\Blog;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class TrackPageViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
      
        if ($request->route()->getName() === 'frontend.blog.show') {
        
            $url = $request->url('frontend.blog');
           
            $blogId = Str::afterLast($url, '/');
            $blogId =(int)$blogId;
             // Retrieve the blog model using the ID
             $blog = Blog::find($blogId);
            
             // Check if the blog exists
             if ($blog) {
                 // Increment the page_views column
                 $blog->increment('page_views');
             }
            // $blog->increment('page_views');
        }
    
        return $next($request);
    }
    
}
