<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lMovies = Movie::orderBy('id', 'desc')->take(5)->get();
        $movies = Movie::all();
        return view('movies.all', compact('movies', 'lMovies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate
        (
            [
            'title' => 'required',
            'genre' => 'required',
            'director' => 'string|required',
            'story_line' => 'max:1000',
            'year' => 'integer|min:1900|max:2020'
            ]
        );
        Movie::create($data);
        return redirect('/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $movie = Movie::findOrFail($id);
        $comments = $movie->comments;
        return view('movies.single', compact('movie', 'id', 'comments'));
    }


}
