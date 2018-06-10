<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use Auth;
class HomeController extends Controller
{
    public function showLogin()
	{
  
		 return view('login', []);
	}

	public function doLogin()
	{
	$rules = array(
		'email'    => 'required|email', 
		'password' => 'required|alphaNum|min:3' 
	);


	$validator = Validator::make(Input::all(), $rules);


	if ($validator->fails()) {
		return Redirect::to('login')
        ->withErrors($validator) 
        ->withInput(Input::except('password')); 
	} else {

    
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

   
    if (Auth::attempt($userdata)) {

      session(['username' => Input::get('email')]);
      
        return Redirect::to('posts');

    } else {        

		return Redirect::to('login')
               ->withErrors(
                [
                    'password' => 'Wrong User Name or Wrong Password',
                ]
            );

      

	

	}
	}

		
	}
}
