<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Movie;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('admins.comments', compact('comments'));
    }
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $movie = Movie::find($request->get('movie_id'));
        $movie->comments()->save($comment);

        return back();
    }
    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $movie = Movie::find($request->get('movie_id'));

        $movie->comments()->save($reply);

        return back();
    }
}
