@extends('layouts.app')
@section('title', 'movies')
@section('content')

    @foreach ($movies as $movie)
        <div class="alert alert-primary">
            <p>Name of the movie: <a href="{{route('singleMovie', ['id' => $movie->id])}}">{{$movie->title}}</a></p>
            <p>Genre: {{$movie->genre}}</p>
            <p>Director: {{$movie->director}}</p>
            <p>Story line: {{$movie->story_line}}</p>
            <p>Year: {{$movie->year}}</p>
        </div>
    @endforeach

@endsection



 <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">

        <div class="list-group list-group-flush">
            @foreach($lMovies as $lMovie)
                <a href="/movies/{{$lMovie->id}}" class="list-group-item bg-light">{{$lMovie->title}}</a>
            @endforeach
        </div>


</div>
