<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Servicenow_Index extends Controller_Servicenow {

	public function action_index()
	{
		$this->_content = \View::factory('servicenow/index', array('language' => true));
	}

	public function action_workplace_mobility()
	{
		$this->_content = \View::factory('servicenow/workplace_mobility', array('language' => true));
	}

	public function action_workplace_virtualization()
	{
		$this->_content = \View::factory('servicenow/workplace_virtualization', array('language' => true));
	}

	public function action_workplace_automation()
	{
		$this->_content = \View::factory('servicenow/workplace_automation', array('language' => true));
	}

}