@extends('layouts.app')

@section('content')
    <h1>Create new post</h1>
     
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',['id' => 'ckeditor','class' => 'form-control', 'placeholder' => 'body text'])}}
    </div>
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection