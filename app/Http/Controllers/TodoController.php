<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\{Todo, Category};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::where("user_id", Auth::id())->get();
        return view("todo.list", compact("todos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck("name", "id");
        return view('todo.create', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {
        Todo::create([
            "name" => $request->name,
            "description" => $request->description,
            "category_id" => $request->category_id,
            "user_id" => Auth::id()
        ]);
        return redirect()->route('todo.index')
            ->with('success', 'Todo successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        if (!Gate::allows('show-todo', $todo)) {
            abort(403);
        }
        return view("todo.show", ["todo" => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        if (!Gate::allows('update-todo', $todo)) {
            abort(403);
        }
        $categories = Category::pluck("name", "id");
        return view("todo.edit", compact("todo", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        if (!Gate::allows('update-todo', $todo)) {
            abort(403);
        }
        Todo::find($todo->id)->update([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            "category_id" => $request->category_id
        ]);
        return redirect()->route('todo.index')->with('success', 'Todo successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $res = $todo->delete();
        if ($res)
            return redirect()->route('todo.index')->with('success', 'Todo successfully deleted.');
        else
            return redirect()->route('todo.index')->with('error', 'Nothing to delete.');
    }
}
