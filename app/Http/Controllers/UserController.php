<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;
use App\Auth;


class UserController extends Controller
{
    public function addProfile(){

        $users = User::find(1);
        $profile = new Profile;
        $profile->phone="098765432";
        $profile->address="Battambang";
        $profile->user_id=$users->id;
        $profile->save();
        return"already add";
    }

    public function showProfile(){
        $users = User::all();
        return view('showProfile',compact('users'));
    }
    public function editProfile($id){
        $users = User::find($id);
        return view('editProfile',compact('users'));
    }

    public function update(Request $request,$id){
        $users = User::find($id);
        $users ->profile()->update([
            
        ]);
        return redirect('showProfile');
    }

    public function delete($id){
        $users = User::find($id);
        $users->profile()->delete();

        return redirect('showProfile');
    }

    public function showFormPost(){
        return view('addPost');
    }
    public function addPosts(Request $request , $id){
        $users = User::find(Auth::find($id));
        $post = new Post();
        $post->title=$request->get('title');
        $post->body=$request->get('body');
        $post->user_id = $users->id;
        $post->save();

        return redirect('showPost');
    }

    public function showPost(){
        $posts = Post::all();
        return view('post',compact('posts'));
    }
}
