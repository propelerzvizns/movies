@extends('layouts.app')
@section('title', 'movies')
@section('content')


    <div class="alert alert-primary">
        <p>Name of the movie: {{$movie->title}}</a></p>
        <p>Genre: <a href="/genres/{{$movie->genre}}">{{$movie->genre}}</a></p>
        <p>Director: {{$movie->director}}</p>
        <p>Story line: {{$movie->story_line}}</p>
        <p>Year: {{$movie->year}}</p>


    @foreach($comments as $comment)
        <div class="alert alert-secondary ">
            <h4>{{$comment->content}}</h3>
            <p>created at: {{$comment->created_at}}</p></div>

    @endforeach
    </div>



    <form method="POST" action="/comments/add">
    @csrf
    <div class="form-group">
            <input type="hidden" name="movie_id" class="form-control" id="content" value="{{$id}}">
            <label for="content">content</label>
            <input type="text" name="content" class="form-control" id="content" aria-describedby="contentHelp">
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
    </div>

    <button type="submit" class="btn btn-primary ">Submit</button>
    <a class="btn float-right" href="/movies">go back</a>
</form>

@endsection
