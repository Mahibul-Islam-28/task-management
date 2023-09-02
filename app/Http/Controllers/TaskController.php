<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    function index()
    {
        $tasks = Task::all();

        return view('index')
               ->withTasks($tasks);
    }
    function create()
    {
        return view('create');
    }
    function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->priority = $request->priority;
        $task->save();

        return redirect(route('index'));
    }
    function edit($id)
    {
        $task = Task::find($id);
        return view('edit')
               ->withTask($task);
    }
    function update(Request $request, $id)
    {
        $task = Task::find($id);
        if($task)
        {
            $task->name = $request->name;
            $task->priority = $request->priority;
            $task->update();

        }

        return redirect(route('index'));
    }

    function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect(route('index'));
    }
}
