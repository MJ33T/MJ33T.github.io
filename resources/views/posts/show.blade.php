@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/1stapp/public/posts/" class="btn btn-light">Go Back</a> 
                <h1>{{$post->title}}</h1>
                <div class="jumbotron">
                    <h3>{!!$post->body!!}</h3>
                </div>
                <hr>
                <small>Written on {{$post->created_at}} By {{$post->user->name}}</small>
                <hr>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                        <a href="/1stapp/public/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

                        {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class' => 'float-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                @endif
        </div>
    </div>
@endsection