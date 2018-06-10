<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Auth;
use App\Post;
use Illuminate\Contracts\Auth\Guard;
class PostsController extends Controller
{
   public function showPosts()
	{
		 $posts=Post::where('user_id', session('username'))->get();
		 return view('posts', [])->with('post_title', $posts);;
	}
	public function doPosts(Guard $auth)
	{
  
		 $rules = array(
		'post_title'    => 'required', 
		'description'    => 'required',
		
		);
		$validator = Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
		return Redirect::to('posts')
        ->withErrors($validator) 
        ->withInput(Input::except('password')); 
		}else
		{		  $posts = new Post;
			
				  $posts->user_id = session('username');
				  $posts->post_title = Input::get('post_title');
                  $posts->description=Input::get('description');
                  $posts->save();

			
				
				 \Session::flash('flash_message','successfully saved.');
				return redirect()->to('/posts');
			
		}
	}
}
