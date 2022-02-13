@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">Create Todo</div>
        <div class="card-body">
        <form action="{{route('todo.store')}}" method="POST">
            @csrf
            <div class="form-group my-2">
                <label for="todo">Todo</label>
                <input type="text" name="todo-text" class="form-control" id="todo" placeholder="Enter Todo">
            </div>

            <div class="form-group my-2">
                <label for="todo-body">Todo Body</label>
                <textarea name="todo-body" id="todo-body" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group my-2">
                <label for="todo-date">Todo Date</label>
                <input type="text" name="todo-date" class="form-control" id="todo-date" placeholder="Enter Todo Date">
            </div>
           
            <div class="form-group my-2">
                <button type="submit" class="btn btn-primary my-2">Create Todo</button>
            </div>
            
            </form>
        </div>
    </div>
@endsection