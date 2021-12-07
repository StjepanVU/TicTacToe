<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function create(\App\Models\Game $game) {
        return view('games.create', compact('game'));
    }
}
