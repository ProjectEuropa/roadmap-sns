<?php

namespace App\Http\Controllers;

use App\Tutorial;
use App\Task;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function store(TaskRequest $request,Task $task){
        $task->name = $request->name;
        $task->tutorial_id = 1;
        $task->order = 1;
        $task->status = 1;
        $task->save();

        // $tutorials = Auth::user()->tutorials()->get()->sortByDesc('created_at');

        // $tasks = $tutorials()->tasks()->get();

        //$tutorials = Auth::user()->tutorials()->tasks()->get()->sortByDesc('created_at');
        $tutorials = Auth::user()->tutorials->task;
        ddd($tutorials);

        $tasks = Task::all()->sortByDesc('created_at');

        return [
            'tasks' => $tasks,
        ];
    }
}
