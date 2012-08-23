<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Promo_Index extends Controller_Promo {

	public function action_index()
	{
		$this->_content = \View::factory('servicenow/index', array('language' => true));
	}

}