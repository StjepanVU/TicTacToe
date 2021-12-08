<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function show(\App\Models\User $user) {

        // dd($user->games());
        return view('profiles.show',compact('user'));

    }




}
