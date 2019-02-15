@extends('layout')

@section('content')
    <h1 class="mb-2 d-inline-block">{{ $todo->title }}</h1>
    <span class="float-right mt-2">
      <span 
        class="h5 p-1 rounded badge-{{ $todo->completed ? 'success' : 'light' }}"
      >
        <strong>{{ $todo->completed ? 'Completed' : 'Incomplete' }}</strong>
      </span>
    </span>
    <h2>{{ $todo->created_at->format('D - M d, Y')}}</h2>
    <hr>
    <div class="container">
      <p>{{ $todo->description }}</p>
    </div>
@endsection