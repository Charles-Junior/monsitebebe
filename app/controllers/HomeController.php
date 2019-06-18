<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	 private function generate_home($annonces)
    {
        return View::make('home',  array(
            'annonces' => $annonces,
        ));
    }
	
	 private function generate_annonce($annonce)
    {
        return View::make('annonce',  array(
            'annonce' => $annonce,
        ));
    }

    /**
    * Affiche la page d'accueil
    *
    * @return View
    */
    public function home()
    {
        $annonces = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
					        ->orderBy('created_at', 'desc')
					        ->paginate(3);
        return $this->generate_home($annonces);
    }
	
	public function search()
	{
		$mySearch = strip_tags(Input::get('recherche'));
		$myCategorie = strip_tags(Input::get('categorie'));
		$myRegion = strip_tags(Input::get('region'));
		
		if($myRegion != null)
		 {
			if($myCategorie != null)
				{
				if($mySearch != null)
					{
						$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('region',$myRegion)
							->where('categorie',$myCategorie)
							->where('titre','LIKE',"%$mySearch%")
							->orWhere('texte','LIKE',"%$mySearch%")
							->orderBy('created_at', 'desc')
					        ->paginate(3);
						return $this->generate_home($result);
					}
					$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('region',$myRegion)
							->where('categorie',$myCategorie)
							->orderBy('created_at', 'desc')
					        ->paginate(3);
						return $this->generate_home($result);
				}
		
			$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('region',$myRegion)
							->orderBy('created_at', 'desc')
					        ->paginate(3);
        return $this->generate_home($result);
		}
		
	/*    */

if($myCategorie != null)
		 {
			if($myRegion != null)
				{
				if($mySearch != null)
					{
						$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('region',$myRegion)
							->where('categorie',$myCategorie)
							->where('titre','LIKE',"%$mySearch%")
							->orWhere('texte','LIKE',"%$mySearch%")
							->orderBy('created_at', 'desc')
					        ->paginate(3);
						return $this->generate_home($result);
					}
					$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('region',$myRegion)
							->where('categorie',$myCategorie)
							->orderBy('created_at', 'desc')
					        ->paginate(3);
						return $this->generate_home($result);
				}
		
			$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('categorie',$myCategorie)
							->orderBy('created_at', 'desc')
					        ->paginate(3);
        return $this->generate_home($result);
		}

	/*	*/
	if($mySearch != null)
		 {
			if($myRegion != null)
				{
				if($myCategorie != null)
					{
						$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('region',$myRegion)
							->where('categorie',$myCategorie)
							->where('titre','LIKE',"%$mySearch%")
							->orWhere('texte','LIKE',"%$mySearch%")
							->orderBy('created_at', 'desc')
					        ->paginate(3);
						return $this->generate_home($result);
					}
					$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('region',$myRegion)
							->where('categorie',$myCategorie)
							->orderBy('created_at', 'desc')
					        ->paginate(3);
						return $this->generate_home($result);
				}
		
			$result = Annonce::select('id', 'titre', 'texte','image','region','departement','prix')
							->where('titre','LIKE',"%$mySearch%")
							->orWhere('texte','LIKE',"%$mySearch%")
							->orderBy('created_at', 'desc')
					        ->paginate(3);
        return $this->generate_home($result);
		}	
	}
	
	public function annonce($annonce_id)
	{		
			$annonce = Annonce::find($annonce_id);
			$infosUser = $annonce->join('users','annonces.user_id','=','users.id')
								 ->select('users.email')
								 ->where('annonces.id',$annonce_id)
								 ->first();
								return View::make('article', array('annonce'=> $annonce, 'infosUser'=>$infosUser)); 
	}
}
