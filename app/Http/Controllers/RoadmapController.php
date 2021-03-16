<?php

namespace App\Http\Controllers;

use App\Roadmap;
use App\Http\Requests\RoadmapRequest;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function index()
    {
        $roadmaps = Roadmap::all()->sortByDesc('created_at');

        return view('roadmaps.index',['roadmaps' => $roadmaps ]);
    }

    public function create()
    {
        return view('roadmaps.create');
    }

    public function store(RoadmapRequest $request,Roadmap $roadmap)
    {
        $roadmap->title = $request->title;
        $roadmap->body = $request->body;
        $roadmap->user_id = $request->user()->id;
        $roadmap->estimated_time = $request->estimated_time;
        $roadmap->level = $request->level;
        $roadmap->save();

        return redirect()->route('roadmaps.index');
    }

    public function like(Request $request,Roadmap $roadmap)
    {
        $roadmap->likes()->detach($request->user()->id);
        $roadmap->likes()->attach($request->user()->id);

        return [
            'id' => $roadmap->id,
            'countLikes' => $roadmap->count_likes,
        ];

    }

    public function unlike(Request $request,Roadmap $roadmap)
    {
        $roadmap->likes()->detach($request->user()->id);

        return[
            'id' => $roadmap->id,
            'countLikes' => $roadmap->count_likes,
        ];
    }
}
