@extends('layouts.app')
@section('title', 'movies')
@section('content')

    {{$movie->title}}<br>
    {{$movie->genre}}<br>
    {{$movie->director}}<br>
    {{$movie->year}}<br>
    {{$movie->story_line}}<br><hr>

    @foreach($comments as $comment)
        {{$comment->content}}
    @endforeach
    <br>
    <a href="/movies">go back</a>

@endsection
