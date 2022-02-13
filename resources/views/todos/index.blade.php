@extends('layouts.app')

@section('content')
    <div>
        @if(count($todos) > 0)
            @foreach($todos as $todo)
                
                <div>
                    <h3>{{$todo->text}}</h3>
                    <a class="btn btn-primary btn-sm my-2" href="{{route('todo.show', $todo->id)}}"> View Todo</a>
                    <a class="btn btn-success btn-sm my-2" href="{{route('todo.edit', $todo->id)}}"> Edit Todo</a>
        
                    <p>
                        <small>{{$todo->due}}</small>
                    </p>
                </div>
                <hr>
            @endforeach
        @endif
    </div>
@endsection