@extends('layouts/app')

@section('content')
    <h1>{{$data['title']}}</h1>
    @if (count($data['services']) > 0)
        @foreach ($data['services'] as $service)
            <ul class="list-group">
                <li class="list-group-item">{{$service}}</li>
            </ul>
        @endforeach
    @endif
@endsection