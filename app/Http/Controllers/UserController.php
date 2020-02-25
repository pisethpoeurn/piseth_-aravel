<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;


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
        $users = User::all();
        return view('showProfile',compact('users'));
    }

    public function update($id){
        $users = Profile::find($id);
        $users ->profile()->update([

        ]);
    }

    public function delete($id){
        $users = User::find($id);
        $users->profile()->delete();

        return redirect('showProfile');
    }

    public function showFormPost(){
        return view('addPost');
    }
    public function addPosts(Request $request){
        $users = User::find(Auth::id(1));
        $post = new Post();
        $post->title=$request->get('title');
        $post->body=$request->get('body');
        $post->user_id = $users->id;
        $post->save();

        return redirect('showPost');
        // return ("added....");
    }

    public function showPost(){
        $posts = Post::all();
        return view('post',compact('posts'));
    }
}
