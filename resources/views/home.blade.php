@extends('layout')

@section('content')
    <h1 class="d-inline-block">Todos:</h1>
    <div class="float-right mt-3">
        Filter:
        <a class="p-2" href="/">All</a> |
        <a class="p-2" href="/?filter=complete">Done</a> |
        <a class="p-2 pr-3" href="/?filter=incomplete">Incomplete</a>
    </div>
    <div class="container p-3">
        @foreach ($todos as $todo)
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justfiy-content-around flex-wrap align-items-center">
                        <div class="align-self-center mr-auto">
                            <h4 class="align-self-center m-0"><strong>{{ $todo->title }}</strong></h4>
                        </div>
                        <div class="d-flex align-items-center">
                            <span>{{ $todo->created_at->format('D, M d') }}</span>
                                <a href="/todos/{{ $todo->id }}" class="btn btn-sm btn-outline-primary rounded ml-2">View</a>
                                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-sm btn-outline-primary rounded ml-2">Edit</a>
                            <form method="POST" action="/todos/{{ $todo->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input class="btn btn-outline-danger btn-sm rounded ml-2" type="submit" value="Delete">
                            </form>
                            <form method="POST" action="/todos/{{ $todo->id }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <input type="hidden" name="toggle" value="{{ $todo->completed ? 0 : 1 }}">
                                <input class="btn btn-primary btn-sm rounded ml-2" type="submit" value="Mark as {{ $todo->completed ? 'Incomplete' : 'Complete' }}">
                            </form>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text py-2">{{ $todo->description }}</p>
                    <p class="card-text">
                        Status: <strong class="text-{{ $todo->completed ? 'success' : 'danger' }}">
                            {{ $todo->completed ? 'Completed' : 'Incomplete' }}
                        </strong>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection