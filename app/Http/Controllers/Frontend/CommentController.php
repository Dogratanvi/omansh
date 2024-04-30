<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Blog;

class CommentController extends Controller
{
    
    public function index($id)
    {
        $blog = Blog::find($id);
        $comments = $blog->comments();

        return view('frontend.blocks.comments', compact('comments', 'settings'));


    }

    public function store(Request $request)
    {
        $input = $request->except(['_token']);

        $request->validate([
            'body'=>'required',
        ]);

    $name = "Guest" . rand(2,100);
    $comment = Comments::where('user_ip',$request->ip())->first();
    if($comment !== null)
    {
        $input['user_ip'] = $request->ip();
    }
      $input['user_name'] = $comment->user_name;
      $input['status'] = 0;
        // $input['user_id'] = auth()->user()->id;


        Comments::create($input);

        return back();
    }
}
