<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function show(\App\Models\User $user) {
        $games = Game::get();
        // dd($user->games());
        return view('profiles.show',compact('user','games'));

    }




}
