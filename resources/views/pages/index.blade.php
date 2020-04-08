@extends('layouts/app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$data['title']}}</h1>
        <p>{{$data['content']}}</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/LaravelProjectDemo/public/login" role="button">login</a>
            <a class="btn btn-success btn-lg" href="/LaravelProjectDemo/public/register" role="button">Register</a>
        </p>
    </div>
@endsection


