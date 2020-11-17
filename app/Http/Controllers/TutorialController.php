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

        $first_tutorial = Auth::user()->tutorials()->first(); //今後、もし教材を持っていなかったら別画面を表示する処理を追加する。

        $tasks = Task::where('tutorial_id',$first_tutorial->id)->get()->sortByDesc('created_at');

        return view('tutorials.index',[
        'tutorials' => $tutorials,
        'tasks' => $tasks
        ]);
    }
}
