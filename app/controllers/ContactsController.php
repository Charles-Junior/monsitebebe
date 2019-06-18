<?php
class ContactsController extends BaseController {

    public function __construct()
	{
		parent::__construct();
	}

	public function getForm()
	{
		return View::make('contacts');
	}

	public function postForm()
	{
		$regles = array(
			'nom' => 'required|min:5|max:20|alpha',
			'email' => 'required|email',
			'texte' => 'required|max:250'
		);

		$validation = Validator::make(Input::all(), $regles);

		if ($validation->fails()) {
		  return Redirect::to('contacts/form')->withErrors($validation)->withInput();
		} else {
			
			return View::make('confirm');
		}
	}

}