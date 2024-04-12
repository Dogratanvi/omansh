<?php

namespace App\Http\Controllers\Frontend;

use  App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function show(Request $request, Comment $comment): View
    {
        return view('comment.show', compact('comment'));
    }
}
