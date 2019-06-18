<?php

class Annonce extends Eloquent

{
	protected $table = 'annonces';
	
	protected $fillable = array('user_id','categorie','partoupro','type','region','departement','telephone','titre','texte');
	
	public function users()
	{
		return $this->belongsTo('User');
	}
}