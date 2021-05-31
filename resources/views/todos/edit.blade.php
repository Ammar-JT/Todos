@extends('layouts.app')

@section('title')
Edit Todo
@endsection


@section('content')
    <h2 class="text-center my-5">Edit Todo</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                New Todo
                </div>
                <div class="card-body">
                    <!-- to display the error messages -->
                    @include('inc.messages')
                    <form method="POST" action="/todos/{{$todo->id}}/update">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="name">Name</label>
                            <input value="{{$todo->name}}" type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control">{{$todo->description}}</textarea>
                        </div>

                        @method('PUT')

                        <button type="submit" class="btn btn-primary  mb-2">Submit</button>
                    </form>
                            
                </div>
            </div>
        </div>
    </div>
@endsection