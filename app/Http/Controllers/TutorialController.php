<?php

namespace App\Http\Controllers;

use App\Tutorial;
use App\Task;

use App\Http\Requests\TutorialRequest;
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

    public function store(TutorialRequest $request,Tutorial $tutorial){
        $tutorial->title = $request->title;
        $tutorial->user_id = $request->user()->id;
        $tutorial->order = 1;
        $tutorial->status = 1;
        $tutorial->save();

        //新しいtutorialsを返す
        $tutorials = Auth::user()->tutorials()->get()->sortByDesc('created_at');

        return [
            'tutorials' => $tutorials,
        ];
    }

    public function destroy(Tutorial $tutorial){
        $tutorial->delete();

        //新しいtutorialsを返す
        $tutorials = Auth::user()->tutorials()->get()->sortByDesc('created_at');

        return [
            'tutorials' => $tutorials,
        ];
    }
}
