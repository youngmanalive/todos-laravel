<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store()
    {
        $todo = new Todo;

        $todo->title = request('title');
        $todo->description = request('description');

        $todo->save();

        return $todo;
    }

    public function update($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;

        $todo->save();

        return $todo;
    }

    public function destroy($id)
    {
        Todo::find($id)->delete();

        return $id;
    }
}
