<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Promo extends Controller_Public {

	public $template = 'promo';

	protected $_section = 'promo';

	protected $_theme_name = 'promo';

	public function before()
	{
		$this->_title = "Matrix42 Latest Promotions";

		$this->_lead_form = $this->lead_form(true);

		$this->_banner = View::factory('promo/banner');

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

	public function lead_form($full = false)
	{
		$complete = false;
		$user = new \Darth\Model\Lead;
		$lead_form = $user->get_promo_lead_form()
			->add('submit', 'submit', array('text' => __('Inquire!')));

		$lead_form->campaign_id->set('value', $this->_campaign);

		if ($lead_form->load()->validate())
		{
			$complete = true;
		}

		return \View::factory('promo/lead_form', array('language' => true))
			->bind('form', $lead_form)
			->set('complete', $complete);
	}
}