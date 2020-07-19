@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card text-left mb-2">
              <div class="card-body">
                <h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                <small>Wriiten on {{$post->created_at}}</small>
              </div>
            </div>
        @endforeach

        {{$posts->links()}}

    @else
        <p>No post found.</p>
    @endif

@endsection