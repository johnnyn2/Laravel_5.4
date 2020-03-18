@extends('layouts/app')

@section('content')
    <a href="../posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{-- this syntax can allow us to display html --}}
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="../posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    <form method="post" action="/LaravelProjectDemo/public/posts/{{$post->id}}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Delete post</button>
        {{ method_field('DELETE') }}
    </form>
@endsection