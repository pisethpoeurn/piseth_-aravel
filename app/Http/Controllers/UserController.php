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

        $users = User::find(2);
        $profile = new Profile;
        $profile->phone="0234567";
        $profile->address="BMC";
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
            "name"=>"$users=>$request->get('fname')",
            "email"=>"$users=>$request->get('email')",
            "phone"=>"$users=>$request->get('phone')",
            "address"=>"$users=>$request->get('address')",
        ]);
        $users->save();
        return redirect('showProfile');
    }

    public function delete($id){
        $profile = Profile::find($id);
        $profile->delete();

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

    public function showFormEditPost($id){
        $posts = Post::find($id);
        return view('formeditpost',compact('posts'));
    }

    public function updatePost(){
        
    }
}
