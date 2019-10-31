@extends('layouts.app');

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Posts</h1> 
            @if(count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="jumbotron">
                    <h3><a href="/1stapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} By {{$post->user->name}}</small>
                    </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p>No Posts Found</p>
            @endif
        </div>
    </div>
@endsection