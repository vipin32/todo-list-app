<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $todos = Todos::latest()->get();
        // dd($todos);
        return view('todos.index', ['todos'=> $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'todo-text'=> 'required',
            'todo-body'=> 'required',
            'todo-date'=> 'required'
        ]);


        $todo = new Todos;
        $todo->text = $request->input('todo-text');
        $todo->body = $request->input('todo-body');
        $todo->due = $request->input('todo-date');

        if($todo->save())
        {
            return redirect()->route('todo.index')->with('success', 'Todo Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todos::find($id);
        return view('todos.show', ['todo'=> $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todos::find($id);
        return view('todos.edit', ['todo'=> $todo]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'todo-text'=> 'required',
            'todo-body'=> 'required',
            'todo-date'=> 'required'
        ]);


        $todo = Todos::find($id);
        $todo->text = $request->input('todo-text');
        $todo->body = $request->input('todo-body');
        $todo->due = $request->input('todo-date');

        if($todo->update())
        {
            return redirect()->route('todo.index')->with('success', 'Todo Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todos::find($id);

        if($todo->delete())
        {
            return redirect()->route('todo.index')->with('success', 'Todo Deleted Successfully');
        }
    }
}
