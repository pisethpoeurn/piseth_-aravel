<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UserController extends Controller
{
    public function addProfile(){

        $users = User::find(4);
        $profile = new Profile;
        $profile->phone="098765432";
        $profile->address="Pursat";
        $profile->user_id=$users->id;
        $profile->save();
        $users = User::find(5);
        $profile = new Profile;
        $profile->phone="086395674";
        $profile->address="BMC";
        $profile->user_id=$users->id;
        $profile->save();
        return"already add";
    }

    public function showProfile(){
        $users =User::all();
        return view('showProfile',compact('users'));
    }
}
