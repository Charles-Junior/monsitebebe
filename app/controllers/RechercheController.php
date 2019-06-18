<?php

class RechercheController extends BaseController {

	public function Search()
	{
		$mySearch = strip_tags(Input::get('recherche'));
		$result = Annonce::select('id', 'titre', 'texte','image')
							->where('titre',$mySearch)
					        ->orderBy('created_at', 'desc')
					        ->paginate(3);
        return $this->generate_home($annonces);
	}

}