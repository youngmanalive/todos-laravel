@extends('layout')

@section('title', '- Edit')

@section('content')
    <h1>Edit</h1>
    <div class="container p-4 bg-light">
        <div class="card w-50">
            <span class="card-header">Update this Todo!</span>
            <div class="container p-4">
                <form method="POST" action="/todos/{{ $todo->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="title"><strong>To Do:</strong></label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="What needs done?" maxlength="60" value="{{ $todo->title }}">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description:</label>
                        <textarea name="description" class="form-control" id="desc" rows=4 maxlength="200">{{ $todo->description }}</textarea>
                    </div>
                    <div class="custom-control custom-checkbox pb-4">
                      <input type="checkbox" class="custom-control-input" id="chk" name="completed" value="yes" {{ $todo->completed ? 'checked' : '' }}>
                      <label class="custom-control-label" for="chk">Complete</label>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection