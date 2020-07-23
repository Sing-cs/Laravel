@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>
<small>Written at {{ $post->created_at }} by {{ $post->user->name }}</small>
<p>{!!$post->body!!}</p>
<hr>
<a href="/posts" class="btn btn-secondary">Go back</a>

@auth
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>


    {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=>'float-right'])
    !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete',['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    @endif
@endauth



@endsection