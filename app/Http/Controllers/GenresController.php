<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{

    public function show($genre)
    {
        //
        $lMovies = Movie::orderBy('id', 'desc')->take(5)->get();
        $movies = Movie::where('genre', $genre)->get();
        return view('movies.all', compact('movies', 'lMovies'));
    }


}
