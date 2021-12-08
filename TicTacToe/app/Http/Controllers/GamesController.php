<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class GamesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $search = request()->query('search');
        if($search) {
            // dd($search);
            $games = Game::where('title','LIKE',"%{$search}%")->get();
            // dd($games);
        }
        else {
            $games = Game::latest()->get();
        }


        return view('games.index', compact('games'));
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

        return redirect('/');

    }

    public function show(\App\Models\Game $game) {
        return view('games.show',compact('game'));
    }

    public function search() {
        $search = request()->query('search');

        if($search) {
            $game = Game::where('title', 'LIKE', '%{$search}%')->simplePaginate(3);
        }
        else {
            $game = Game::simplePaginate(3);
        }


        return view('games.search',compact('game'));
    }



}
