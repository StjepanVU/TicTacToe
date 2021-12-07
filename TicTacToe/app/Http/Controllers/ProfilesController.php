<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function show(\App\Models\User $user) {

        return view('profiles.show',compact('user'));

    }


    // User's ID for route url



}
