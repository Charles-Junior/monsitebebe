<?php

class GuestController extends BaseController {

public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('guest');
	}
public function getRegister()
{
  return View::make('register');
}

public function postRegister()
{
	$regles = array(
			'email' => 'required|email|unique:users',
	        'username' => 'required|Alpha_dash|between:6,64|unique:users',
	        'firstname' => 'required|Alpha|between:1,64',
	        'lastname' => 'required|Alpha|between:1,64',
	        'password' => 'required|AlphaNum|between:6,20|confirmed'
		);
		
		$validation = Validator::make(Input::all(), $regles);

		if ($validation->fails()) {
		  return Redirect::to('guest/register')->withErrors($validation)->withInput();
		} else {
		
			$user = new User; 
            $user->username = strip_tags(Input::get('username')); 
            $user->email = strip_tags(Input::get('email')); 
            $user->firstname = strip_tags(Input::get('firstname')); 
            $user->lastname = strip_tags(Input::get('lastname')); 
            $user->password = Hash::make(strip_tags(Input::get('password'))); 
            $user->save(); 
			return Redirect::to ('/');
		}
}

public function getLogin()
{
		return View::make('login');
}

public function postLogin()
{
		 $user = array('username' => strip_tags(Input::get('username')), 'password' => strip_tags(Input::get('password')));
            /*if(Input::get('remember') == 'true')
                $remember = true;
            else
                $remember = false;*/
           
            if (Auth::attempt($user)) {
                return Redirect::intended('/')->with('message', 'Vous avez été correctement connecté avec le pseudo ' . Auth::user()->username);
            }
            else
            {
                return Redirect::to('guest/login')->with('error', 'Pseudo ou mot de passe non correct !')->withInput(Input::except('password'));
            }
}
}