<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreate;
use App\Models\Step;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function home() {
        // $todos = Todo::orderBy("completed")->get();
        $todos = auth()->user()->todos->sortBy("completed");
        // dd($todos);
        return view("todos.home", compact("todos"));
    }

    public function create() {
        return view("todos.create");
    }

    public function store(TodoCreate $request) {
        // dd($request->all());
        extract($request->all());
        $todo = auth()->user()->todos()->create([
                'title' => $title,
                "description" => $description,
                'completed' => false
            ]);
        foreach ($step as $x) {
            $todo->step()->create(["name" => $x]);
        }
        return redirect(route("todo.home"))->with("message", "Success Added");
    }

    public function edit(Todo $todo) {
        return view("todos.edit", compact("todo"));
    }

    public function update(TodoCreate $req,Todo $todo) {
        // dd($req->all());
        $todo->update(["title" => $req->title, "description" => $req->description]);
        if($req->step) {
            foreach($req->step as $key => $step) {
                $id = $req->stepId[$key];
                if(empty($id)) {
                    $todo->step()->create(["name" => $step]);
                } else {
                    $stepUp = Step::find($id);
                    $stepUp->update(["name" => $step]);
                }
            }
        }
        return redirect(route('todo.home'))->with("message", "Updated");
    }

    public function complete(Todo $todo) {
        $todo->update(["completed" => true]);
        return redirect()->back()->with("message", "Task Is Done");
    }
    public function incomplete(Todo $todo) {
        $todo->update(["completed" => false]);
        return redirect()->back()->with("message", "Task Is Undone");
    }

    public function deleteTodo(Todo $todo) {
        $todo->delete();
        return redirect()->back()->with("message", "Task deleted");
    }

    public function show(Todo $todo) {
        return view("todos.details", compact("todo"));
    }
}
