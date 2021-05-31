@extends('layouts.app')

@section('title')
Todos Index
@endsection


@section('content')
    <h2 class="text-center my-5">Todos index page</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Todos
                </div>
                <div class="card-body">
                    @include('inc.messages')

                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                <div class="float-end">
                                    
                                    <form method="POST" action="/todos/{{$todo->id}}/delete">
                                        @csrf
                                        @method('delete')
                                        <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm ">View</a>
                                        <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm ">Edit</a>
                                        <td>
                                            <button onClick = "return confirm('are you sure you want to delete this todo?')" type="submit" class="btn btn-danger btn-sm">delete</button>
                                        </td>
                                        @if (!$todo->completed)
                                            <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm ">Complete</a>
                                        @endif

                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
        

