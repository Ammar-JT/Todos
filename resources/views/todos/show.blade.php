@extends('layouts.app')

@section('title')
Single Todo: {{$todo->name}}
@endsection


@section('content')
    <h2 class="text-center my-5">{{$todo->name}}</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Details
                </div>
                <div class="card-body">
                
                    {{$todo->description}}
                            
                </div>
            </div>
        </div>
    </div>
@endsection