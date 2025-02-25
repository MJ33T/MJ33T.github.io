@extends('layouts.app');

@section('content')
    <<div class="row justify-content-center">
            <div class="col-md-8">
            <h1>Create Post</h1> 
            {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
                </div>

                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=> 'form-control', 'placeholder'=> 'Body'])}}
                </div>
                <div class ="form-group">
                    {{Form::file('cover_image')}}
                </div>

                {{Form::submit('submit', ['class'=> 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>        
@endsection