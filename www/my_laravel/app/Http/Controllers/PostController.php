<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
	$this->validate($request,[
		'body' => 'required|max:1000'
		]);
    
    public function postCreatePost(Request $request){
    	$post = new post();
    	$post->body = $request['body'];
    	$message = "there was an error"
    	if($request->user()->posts()->save($post)){
    		$message = "Your post was successfully created";
    	}
    	return redirect()->route('dashboard')->with([message=>$message]);

    }
}
