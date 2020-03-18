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
@endsection