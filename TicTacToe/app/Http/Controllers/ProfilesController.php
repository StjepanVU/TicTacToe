<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(\App\Models\Profile $profile) {

        return view('profiles.show',compact('profile'));

    }
}
