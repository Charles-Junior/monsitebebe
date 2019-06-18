<?php

class AuthController extends BaseController

{
 public function __construct()
    {	parent::__construct();
        $this->beforeFilter('auth');
    }
	
public function getLogout()
	{
		Auth::logout();
		//return 'deconnecter avec succès';
		return Redirect::to('/');
	}

public function getDeposit()
	{
	return View::make('deposit');
	}
	
public function postDeposit()
	{
		$regles = array(
			'region' => 'required',
			'departement' => 'required',
	        'titre' => 'required|between:1,200',
			'prix' => 'required|integer',
			'image' => 'required|image'
		);
		
		$validation = Validator::make(Input::all(), $regles);

		if ($validation->fails()) {
		  return Redirect::to('auth/deposit')->withErrors($validation)->withInput();
		} else {
		
			$annonce = new Annonce; 
            $annonce->categorie = strip_tags(Input::get('categorie')); 
            $annonce->partoupro = strip_tags(Input::get('partoupro')); 
            $annonce->type = strip_tags(Input::get('type')); 
            $annonce->region = strip_tags(Input::get('region'));
			$annonce->departement = strip_tags(Input::get('departement'));
			$annonce->telephone = strip_tags(Input::get('telephone'));
			$annonce->titre = strip_tags(Input::get('titre'));
			$annonce->texte = strip_tags(Input::get('texte'));
			$annonce->prix = strip_tags(Input::get('prix'));
			$annonce->user_id = Auth::user()->id;
			$image = Input::file('image');
			$ext = $image->getClientOriginalExtension();
			$filename = md5(uniqid(rand(), true)).'.'.$ext;
			$dos = Auth::user()->username;
			$imagePath = 'img/'.$dos;
			$image->move($imagePath, $filename);
			$annonce->image = $imagePath.'/'.$filename;
			$imageD = Input::file('imageD');
			if($imageD == null){}
			else
				{
				$extD = $imageD->getClientOriginalExtension();
				$filenameD = md5(uniqid(rand(), true)).'.'.$extD;
				$imageD->move($imagePath, $filenameD);
				$annonce->imageD = $imagePath.'/'.$filenameD;
				}
			$imageT = Input::file('imageT');
			if($imageT == null){}
			else
				{
				$extT = $imageT->getClientOriginalExtension();
				$filenameT = md5(uniqid(rand(), true)).'.'.$extT;
				$imageT->move($imagePath, $filenameT);
				$annonce->imageT = $imagePath.'/'.$filenameT;
				}
			
			 $annonce->save(); 
			 return Redirect::intended('/')->with('message', 'Votre annonce a été correctement postée ');
			
		}
	}
	
public function getMyaccount()
  {
	$id_user = Auth::user()->id;
	$username = Auth::user()->username;
	$firstname = Auth::user()->firstname;
	$lastname = Auth::user()->lastname;
	$email = Auth::user()->email;
	$mesAnnonces = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('user_id',$id_user)
							->orderBy('created_at', 'desc')
							->paginate(10);
	return View::make('myaccount', array(
	'username' => $username,
	'firstname' => $firstname,
	'lastname' => $lastname,
	'email' => $email,
	'mesAnnonces' => $mesAnnonces
	));
  }
  
  public function postMyaccount()
  {
	$id_annonce = Input::get('id_annonce');
	$delete = Annonce::find($id_annonce);
	$delete->delete();
	return Redirect::to('auth/myaccount')->with('message', 'Votre annonce a été correctement supprimée');
	
  }
  
  public function getUpdateaccount()
  {
	$username = Auth::user()->username;
	$firstname = Auth::user()->firstname;
	$lastname = Auth::user()->lastname;
	$email = Auth::user()->email;
	return View::make('update', array(
	'username' => $username,
	'firstname' => $firstname,
	'lastname' => $lastname,
	'email' => $email
	));
  }
  
  public function postUpdateaccount()
  {
  
		$regles = array(
			'email' => 'required|email|unique:users',
	        'firstname' => 'required|Alpha|between:1,64',
	        'lastname' => 'required|Alpha|between:1,64'
		);
		
		$validation = Validator::make(Input::all(), $regles);
		
		if ($validation->fails()) {
		  return Redirect::to('auth/updateaccount')->withErrors($validation)->withInput();
								  } 
		else 
		{
	$id_user = Auth::user()->id;
	$update = User::find($id_user);
	$update->firstname = strip_tags(Input::get('firstname'));
	$update->lastname = strip_tags(Input::get('lastname'));
	$update->email = strip_tags(Input::get('email'));
	$update->save();
	return Redirect::to('auth/myaccount')->with('message', 'Votre compte a été correctement modifié');
		}
}

}
