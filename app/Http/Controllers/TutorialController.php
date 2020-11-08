<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index(){
        $tutorials = Tutorial::all()->sortByDesc('created_at');

        return view('tutorials.index',['tutorials' => $tutorials ]);
    }
}
