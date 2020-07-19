@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <small>Written at {{$post->created_at}}</small>
    <p>{!!$post->body!!}</p>
    <hr>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
    <a href="/posts" class="btn btn-secondary">Go back</a>

    {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=>'float-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection