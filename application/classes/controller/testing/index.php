<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Testing_Index extends Controller_Testing {

	public function action_index()
	{

		$this->_lead_form_hide = true;

		$this->_content = \View::factory('testing/maintenance', array('language' => true));
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