@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$title}}</h1>
            @if(count($services) > 0)
            
                <ul class="card">
                    @foreach($services as $service)
                        <li class="list-group-item">{{$service}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
       
    
@endsection
    