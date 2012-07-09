<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Index extends Controller_Public {

	public function action_index()
	{
		$action = $this->request->action();
		//exit(\Debug::vars($action));
	}

	public function action_workplace_mobility()
	{
		echo 'bingo';
	}
}