<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function getDashBoard()
	{
		$posts = Post::all();
		return view('dashboard', ['posts'=>$posts]);
	}
	
    public function postCreatePost(Request $request){
    	$this->validate($request,[
		'body' => 'required|max:1000'
		]);
    
    	$post = new post();
    	$post->body = $request['body'];
    	$message = "there was an error";
    	if($request->user()->posts()->save($post)){
    		$message = "Your post was successfully created";
    	}
    	return redirect()->route('dashboard')->with(['message'=>$message]);

    }

    public function getDeletePost($post_id){
    	$post = Post::where('id', $post_id)->first();

    	$post->delete();
    	return redirect()->route('dashboard')->with(['message'=>'successfully deleted']);
    }
}
