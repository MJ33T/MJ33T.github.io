@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p><h3>This is Laravel Application from the "Laravel From Scratch" Youtube Series</h3></p>
        <p><a class="btn btn-primary btn-lg" href="/1stapp/public/login" role="button">Login </a>
            <a class="btn btn-success btn-lg" href="/1stapp/public/resgister" role="button">register</a></p>
@endsection
        
