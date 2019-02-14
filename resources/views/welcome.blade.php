@extends('layout')

@section('content')
    <h1>Todos:</h1>
    <div class="container pt-3 bg-light fill">
        @foreach ($todos as $todo)
            <div class="card border-primary mb-3 w-50">
                <div class="card-header">
                    <span>{{ $todo->title }}</span>
                    <span class="float-right">{{ $todo->created_at->format('m/d/y') }}</span>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $todo->description }}</p>
                    <p class="card-text">Status: {{ $todo->completed ? 'Completed' : 'Incomplete' }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection