<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Testing extends Controller_Public {

	public $template = 'testing';

	protected $_section = 'testing';

	protected $_theme_name = 'testing';

	public function before()
	{
		$this->_modal = true;

		$this->_title = "Matrix42 Cloud Portal";

		$this->_lead_form = $this->lead_form(true);

		$this->_campaign = 6;

		$this->request->styles(
			array
			(
				'testing',
				'/bootstrap/bootstrap-promo'
			)
		);

		parent::before();

		$this->_modal_button_name = 'Login';

		$this->request->scripts(array('plugins/jquery.form'));
	}

}