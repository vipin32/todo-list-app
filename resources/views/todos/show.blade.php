@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{$todo->text}}</h3>
            <p>{{$todo->body}}</p>

            <small><strong>Due Date</strong> : {{$todo->due}}</small>
            <form action="{{route('todo.destroy', $todo->id)}}" method="POST"> 
                @csrf
                @method('DELETE')

                <input type="submit" class="btn btn-danger btn-sm my-2" value="Delete Todo"> 

            </form>
            <div class="text-center"><a href="/" class="btn btn-primary my-1">Go Back</a></div>
        </div>
    </div>
@endsection