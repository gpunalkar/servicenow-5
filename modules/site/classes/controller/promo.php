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

		$this->request->styles
		(
			array
			(
				'promo',
				'/bootstrap/bootstrap-promo'
			)
		);

		parent::before();
	}

	public function order_form($full = false)
	{
		$complete = false;
		$user = new \Darth\Model\Lead;
		$order_form = $user->get_promo_lead_form()
			->add('submit', 'submit', array('text' => __('Inquire!')));

		$order_form->campaign_id->set('value', $this->_campaign);

		if ($order_form->load()->validate())
		{
			$complete = true;
		}

		return \View::factory('promo/order_form', array('language' => true))
			->bind('form', $order_form)
			->set('complete', $complete);
	}
}