<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Auth;
use App\User;
class RegisterController extends Controller
{
    public function showRegister()
	{
  
		 return view('register', []);
	}
	public function doRegister()
	{
  
		 $rules = array(
		'email'    => 'required|email', 
		'name'    => 'required',
		'phone'    => 'required|regex:/(0)[0-9]{9}/',
		'password' =>  'required|confirmed|min:6', 
		);
		$validator = Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
		return Redirect::to('register')
        ->withErrors($validator) 
        ->withInput(Input::except('password')); 
		}else
		{
			
				$user = User::create(request(['name', 'email', 'password','phone']));
			
				auth()->login($user);
				 \Session::flash('flash_message','successfully saved.');
				return redirect()->to('/login');
			
		}
	}
}
