@extends('layouts.app')
@section('title', 'movies')
@section('content')
    <a href="/movies">go back</a>
    {{$movie->title}}<br>
    {{$movie->genre}}<br>
    {{$movie->director}}<br>
    {{$movie->year}}<br>
    {{$movie->story_line}}<br><hr>

    @foreach($comments as $comment)
        <div class="alert alert-primary ">
            <h4>{{$comment->content}}</h3>
            <p>created at: {{$comment->created_at}}</p></div>

    @endforeach
    <br>



    <form method="POST" action="/comments/{{$id}}">
    @csrf
    <div class="form-group">
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
