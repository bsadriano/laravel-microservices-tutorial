<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request, $post_id)
    {
        return Comment::where('post_id', $post_id)->get();
    }

    public function store(Request $request)
    {
        return Comment::create([
            'post_id' => $request->input('post_id'),
            'text' => $request->input('text'),
        ]);
    }
}
