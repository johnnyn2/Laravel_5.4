@extends('layouts/app')

@section('content')
    <h1>Create Post</h1>
    <form method="post" style="padding-bottom: 20px" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        <div class="form-group">
            {{ csrf_field() }}
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="tinymce-body" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
        <div class="form-group"> 
            <input type="file" class="form-control" name="cover_image"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection