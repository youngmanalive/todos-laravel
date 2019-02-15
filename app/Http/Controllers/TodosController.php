<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('home', compact('todos'));
    }

    public function create()
    {
        return view('new');
    }

    public function store()
    {
        $newTodo = new Todo;

        $newTodo->title = request('title');
        $newTodo->description = request('description');

        $newTodo->save();

        return redirect('/');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        
        return view('show', compact('todo'));
    }

    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('edit', compact('todo'));
    }

    public function destroy($id)
    {
        return dd("You are destroying ID: $id!");
    }

    public function update($id)
    {   
        $todo = Todo::find($id);

        $todo->completed = request()->has('completed');
        $todo->title = request('title');
        $todo->description = request('description');

        $todo->save();
        
        return redirect("/todos/$id");
    }
}
