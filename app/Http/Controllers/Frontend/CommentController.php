<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Comments;
use Carbon\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function show(Request $request, Comment $comment): View
    {
        return view('comment.show', compact('comment'));
    }

    /**
     * Write Your Code..
     *
     * @return string
    */
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
