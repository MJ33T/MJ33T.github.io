@extends('layouts.app');

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Post</h1> 
            {!! Form::open(['action' => ['PostController@update',$post->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
                </div>

                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class'=> 'form-control', 'placeholder'=> 'Body'])}}
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('submit', ['class'=> 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>        
@endsection