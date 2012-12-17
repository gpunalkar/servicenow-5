<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Testing_Index extends Controller_Testing {

	public function action_index()
	{

		$this->_lead_form_hide = true;

		$this->_content = \View::factory('testing/example', array('language' => true));
	}

	public function action_login()
	{
		if(isset($this->_user->id))
		{
			$this->_redirect_after_login();
		}

		$user = new \Darth\Model\User;
		$form = $user->get_login_form();

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('modal_form')
			->set('form', $form);

		if($form->load()->validate())
		{
			$this->_set_user();
			$this->_redirect_after_login();
		}
	}

	public function action_maintenance()
	{

		$this->_lead_form_hide = true;

		$this->_content = \View::factory('testing/maintenance', array('language' => true));
	}

	public function action_404()
	{

		$this->_lead_form_hide = true;

		$this->_content = \View::factory('testing/unavailable', array('language' => true));
	}
}