<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Index extends Controller_Public {

	public function action_index()
	{
		$this->_content = \View::factory('index', array('language' => true));
	}

	public function action_workplace_mobility()
	{
		$this->_content = \View::factory('workplace_mobility', array('language' => true));
	}

	public function action_workplace_virtualization()
	{
		$this->_content = \View::factory('workplace_virtualization', array('language' => true));
	}

	public function action_workplace_automation()
	{
		$this->_content = \View::factory('workplace_automation', array('language' => true));
	}

}