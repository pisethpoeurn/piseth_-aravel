<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;
use Auth;


class UserController extends Controller
{
    public function addformprofile(){
        return view('addProfile');
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
        $users->name=$request->get('name');
        $users->email=$request->get('email');
        $users->profile->phone=$request->get('phone');
        $users->profile->address=$request->get('address');
        $users->profile->save();
        $users->save();
        return redirect('showProfile');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();

        return redirect('showProfile');
    }

    public function showFormPost(){
        return view('addPost');
    }
    public function addPosts(Request $request , $id){
        $users = User::find(Auth::user()->$id);
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

    public function updatePost($id , Request $request){
        $posts = Post::find($id);
        $posts->title=$request->get('title');
        $posts->body=$request->get('body');
        $posts->save();
        return redirect('showPost');
    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();

        return redirect('showPost');
    }
}
