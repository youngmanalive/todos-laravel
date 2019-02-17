@extends('layout')

@section('title', '- New')
    
@section('content')
    <h1>New</h1>
    <div class="container p-4">
        <div class="card">
            <span class="card-header">Add a Todo!</span>
            <div class="container p-4">
                <form method="POST" action="/">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title"><strong>To Do:</strong></label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="What needs done?" maxlength="60">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="description" class="form-control" id="desc" rows=4 maxlength="200"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary rounded">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection