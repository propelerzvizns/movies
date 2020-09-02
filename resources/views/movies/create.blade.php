@extends('layouts.app')
@section('title', 'movies')
@section('content')

<form method="POST" action="/movies/create">
    @csrf
    <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp">
    </div>

    <div class="form-group">
            <label for="genre">genre</label>
            <input type="text" name="genre" class="form-control" id="genre" aria-describedby="genreHelp">
    </div>

    <div class="form-group">
            <label for="director">director</label>
            <input type="text" name="director" class="form-control" id="director" aria-describedby="directorHelp">
    </div>

    <div class="form-group">
            <label for="story_line">story line</label>
            <input type="text-area" name="story_line" class="form-control" id="story_line" aria-describedby="story_lineHelp">
    </div>

    <div class="form-group">
            <label for="year">year</label>
            <input type="text-area" name="year" class="form-control" id="year" aria-describedby="yearHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



{{-- {{$movie->title}}<br>
{{$movie->genre}}<br>
{{$movie->director}}<br>
{{$movie->story_line}}<br>
{{$movie->year}}<br> --}}
