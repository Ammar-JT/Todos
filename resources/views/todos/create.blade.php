@extends('layouts.app')

@section('title')
Create Todo
@endsection


@section('content')
    <h2 class="text-center my-5">Create Todo</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                New Todo
                </div>
                <div class="card-body">
                    <!-- to display the error messages -->
                    @include('inc.messages')

                    <form method="POST" action="{{route('todos.store')}}">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary  mb-2">Submit</button>
                    </form>
                            
                </div>
            </div>
        </div>
    </div>
@endsection