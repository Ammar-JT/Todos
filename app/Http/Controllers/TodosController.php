<?php

namespace App\Http\Controllers;
use App\Models\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo){
        return view('todos.show')->with('todo', $todo);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
        //validation
        
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        

        //create menu
        $todo = new Todo;
        $todo->name = $request->input('name');
        $todo->description = $request->input('description');
        $todo->completed = false;

        $todo->save();

        return redirect('/todos')->with('success', 'Todo Created');
    }

    public function edit(Todo $todo){
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Request $request, Todo $todo){
        //validation
        
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        

        $todo->name = $request->input('name');
        $todo->description = $request->input('description');
        $todo->completed = false;

        $todo->save();

        return redirect('/todos')->with('success', 'Todo Editied');
    }

    public function destroy(Todo $todo){
        //this is a new thing, you dont have to pass the id to the parameter of destroy($id)
        //.. and then make and object using that id like this: 
            //$todo = ($id);
        //Naah, just use and object in the parameter directly and laravel will understand!!

        $todo->delete();
        return redirect('/todos')->with('success', 'Todo deleted');
    }

    public function complete(Todo $todo){
        //this is a new thing, you dont have to pass the id to the parameter of destroy($id)
        //.. and then make and object using that id like this: 
            //$todo = ($id);
        //Naah, just use and object in the parameter directly and laravel will understand!!
        
        $todo->completed = true;
        $todo->save();

        return redirect('/todos')->with('success', 'Todo completed');
    }
}
