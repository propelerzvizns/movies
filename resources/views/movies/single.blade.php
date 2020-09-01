@extends('layouts.app')
@section('title', 'movies')
@section('content')

    {{$movie->title}}<br>
    {{$movie->genre}}<br>
    {{$movie->director}}<br>
    {{$movie->story_line}}<br>
    {{$movie->year}}<br>
    <a href="/movies">go back</a>

@endsection