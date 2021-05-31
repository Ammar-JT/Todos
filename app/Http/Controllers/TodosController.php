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

    public function show($todoId){
        $todo = Todo::find($todoId);
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

    public function edit($id){
        $todo = Todo::find($id);
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Request $request, $id){
        //validation
        
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        

        //create menu
        $todo = Todo::find($id);
        $todo->name = $request->input('name');
        $todo->description = $request->input('description');
        $todo->completed = false;

        $todo->save();

        return redirect('/todos')->with('success', 'Todo Editied');
    }

    public function destroy($id){
        $todo = Todo::find($id);

        $todo->delete();
        return redirect('/todos')->with('success', 'Todo deleted');
    }
}
