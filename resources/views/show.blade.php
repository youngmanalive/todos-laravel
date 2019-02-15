@extends('layout')

@section('content')
    <h1 class="my-2 d-inline-block"><strong>{{ $todo->title }}</strong></h1>
    <span class="float-right mt-3">
      <span 
        class="h5 px-2 py-1 rounded badge-{{ $todo->completed ? 'success' : 'light' }}"
      >
        <strong>{{ $todo->completed ? 'Completed' : 'Incomplete' }}</strong>
      </span>
    </span>
    <h3>{{ $todo->created_at->format('D - M d, Y')}}</h3>
    <hr class="my-4">
    <div class="mb-4 p-3 bd-primary bg-light">
      <p>{{ $todo->description }}</p>
    </div>
    <form method="POST" action="/todos/{{ $todo->id }}">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <input type="hidden" name="toggle" value="{{ $todo->completed ? 0 : 1 }}">
      <input class="btn btn-primary rounded" type="submit" value="Mark as {{ $todo->completed ? 'Incomplete' : 'Complete' }}">
    </form>
@endsection