<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = (request()->has('filter'))
            ? Todo::where('completed', (request('filter') == 'complete' ? 1 : 0))->get()
            : Todo::all();
        
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
        Todo::find($id)->delete();

        return redirect('/');
    }

    public function update($id)
    {   
        $todo = Todo::find($id);
        
        if (request()->has('toggle')) {
            $todo->completed = request('toggle');
        } else {
            $todo->completed = request()->has('completed');
            $todo->title = request('title');
            $todo->description = request('description');
        }

        $todo->update();
        
        return redirect('/');
    }
}
