<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function index()
    {
        //ダミーデータ
        $roadmaps = [
            (object)[
                'id'=> 1,
                'title' => 'ロードマップ１',
                'body' => '本文1',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
            (object)[
                'id'=>2,
                'title' => 'ロードマップ2',
                'body' => '本文2',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 2,
                    'name' => 'ユーザー名2',
                ],
            ],
            (object)[
                'id'=>3,
                'title' => 'ロードマップ3',
                'body' => '本文3',
                'created_at' => now(),
                'user' => (object)[
                    'id' => 3,
                    'name' => 'ユーザー名3',
                ],
            ],
        ];

        return view('roadmaps.index',['roadmaps' => $roadmaps ]);
    }
}
