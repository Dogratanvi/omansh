<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function show(Request $request, Comment $comment): Response
    {
        return view('comment.show', compact('comment'));
    }
}
