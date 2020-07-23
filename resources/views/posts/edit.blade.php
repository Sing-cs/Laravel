@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
     
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title',  $post->title,['class' => 'form-control', 'placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body,['id' => 'ckeditor','class' => 'form-control', 'placeholder' => 'body text'])}}
    </div>
    <div class="form-group">
        {{Form::label('cover_image', 'Upload post image')}} <br>
        {!! Form::file('cover_image') !!}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection