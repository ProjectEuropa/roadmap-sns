<?php

namespace App\Http\Controllers;

use App\Tutorial;
use App\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorialController extends Controller
{
    public function index(){
        $tutorials = Auth::user()->tutorials()->get()->sortByDesc('created_at');

        $first_tutorial = Auth::user()->tutorials()->first();

        $tasks = Task::where('tutorial_id',$first_tutorial->id)->get()->sortByDesc('created_at');

        return view('tutorials.index',[
        'tutorials' => $tutorials,
        'tasks' => $tasks
        ]);
    }
}
