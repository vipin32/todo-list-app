@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">Edit Todo</div>
        <div class="card-body">
        <form action="{{route('todo.update', $todo->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-2">
                <label for="todo">Todo</label>
                <input type="text" name="todo-text" class="form-control" id="todo" value="{{$todo->text}}">
            </div>

            <div class="form-group my-2">
                <label for="todo-body">Todo Body</label>
                <textarea name="todo-body" id="todo-body" cols="30" rows="10" class="form-control">{{$todo->body}}</textarea>
            </div>

            <div class="form-group my-2">
                <label for="todo-date">Todo Date</label>
                <input type="text" name="todo-date" class="form-control" id="todo-date" value="{{$todo->due}}">
            </div>
           
            <div class="form-group my-2">
                <button type="submit" class="btn btn-primary my-2">Update Todo</button>
            </div>
            
            </form>
        </div>
    </div>
@endsection