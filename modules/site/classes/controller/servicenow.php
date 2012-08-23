<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Servicenow extends Controller_Public {

	public $template = 'servicenow';

	protected $_section = 'servicenow';

	protected $_theme_name = 'servicenow';

	public function before()
	{
		$this->_title = "Matrix42 &amp; ServiceNow";

		$this->_banner = View::factory('servicenow/banner');

		$this->_lead_form = $this->lead_form(true);

		$this->request->styles(array('servicenow'));

		parent::before();
	}
}