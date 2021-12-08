<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create(\App\Models\Game $game) {
        return view('games.create', compact('game'));
    }

    public function store() {


        $data = request()->validate([
            'another'=> '',
            'title'=> 'required',
        ]);

        /*$game = new \App\Models\Game();

        $game->title = $data['title'];
        $game->save();*/

        auth()->user()->games()->create($data);
        // \App\Models\Game::create($data);

        return redirect('/home');

    }
}
