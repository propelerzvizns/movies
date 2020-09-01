@extends('layouts.app')
@section('title', 'movies')
@section('content')

    @foreach ($movies as $movie)
    <a href="{{route('singleMovie', ['id' => $movie->id])}}">{{$movie->title}}</a><br>
    {{$movie->genre}}<br>
    {{$movie->director}}<br>
    {{$movie->story_line}}<br>
    {{$movie->year}}<br>
    @endforeach
    
@endsection



