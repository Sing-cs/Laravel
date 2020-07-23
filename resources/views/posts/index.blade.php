@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card text-left mb-2">
              <div class="card-body">

                <div class="row">
                  <div class="col-4">
                  <img src="storage/cover_images/{{$post->cover_image}}" alt="cover_image" style="width: 100%">
                  </div>
                  <div class="col-8">
                    <h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
              <small>Wriiten on {{$post->created_at}} by {{$post->user->name}}</small>
                  </div>
                  
                </div>


                
              </div>
            </div>
        @endforeach

        {{$posts->links()}}

    @else
        <p>No post found.</p>
    @endif

@endsection