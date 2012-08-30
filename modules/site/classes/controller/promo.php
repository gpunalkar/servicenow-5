<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Promo extends Controller_Public {

	public $template = 'promo';

	protected $_section = 'promo';

	protected $_theme_name = 'promo';

	public function before()
	{
		$this->_modal = true;

		$this->_title = "Matrix42 Latest Promotions";

		$this->_lead_form = $this->lead_form(true);

		$this->request->styles(
			array
			(
				'promo',
				'/bootstrap/bootstrap-promo'
			)
		);

		parent::before();

		$this->request->scripts(array('plugins/jquery.form'));
	}

}