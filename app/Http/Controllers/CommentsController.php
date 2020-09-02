<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;


class CommentsController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $data =$request->validate(
            [
                'content' => 'required|string',
                'movie_id' => 'required'
            ]
        );
        // return $request;
        Comment::create(
            [
                'content' => $request->content,
                'movie_id' => $request->movie_id
            ]
        );
        return redirect('/movies/'.$request->movie_id);
    }

}

