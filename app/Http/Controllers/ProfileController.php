<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Profile;

class ProfileController extends Controller
{
    public function showUserName(){
        $profile = Profile::find(1);
        $profile->user->name;
        $profile->user->email;
        $profile->phone;
        return $profile;
    }
}
