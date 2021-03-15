<?php

namespace App\Http\Controllers;

use App\Roadmap;
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
