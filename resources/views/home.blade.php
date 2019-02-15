@extends('layout')

@section('content')
    <h1>Todos:</h1>
    <div class="container p-3">
        @foreach ($todos as $todo)
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justfiy-content-around align-items-center">
                        <h4 class="align-self-center mr-auto mb-0">{{ $todo->title }}</h4>
                        <span>{{ $todo->created_at->format('D, M d') }}</span>
                        <div>
                            <a href="/todos/{{ $todo->id }}" class="btn btn-sm btn-outline-primary rounded ml-2">View</a>
                        </div>
                        <div>
                            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-sm btn-outline-primary rounded ml-2">Edit</a>
                        </div>
                        <form method="GET" action="/todos/{{ $todo->id }}">
                            <input class="btn btn-outline-danger btn-sm rounded ml-2" type="submit" value="Delete">
                        </form>

                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $todo->description }}</p>
                    <p class="card-text">Status: {{ $todo->completed ? 'Completed' : 'Incomplete' }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection