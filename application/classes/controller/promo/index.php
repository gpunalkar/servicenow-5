<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Promo_Index extends Controller_Promo {

	public function action_index()
	{
		$products = \Kacela::find_active('product', \Kacela::criteria()->equals('type', 'add-on'));

		$product_view = \View::factory('promo/products')
			->set('products', $products);

		$promotions = \Kacela::find_active('promotion');

		$package_view = \View::factory('promo/packages')
			->set('promotions', $promotions);

		$instructions_view = \View::factory('promo/instructions', array('language' => true))
			->set('chat', $this->_chat)
			->set('lead_form', $this->side_lead_form());

		$this->_content = \View::factory('promo/index', array('language' => true))
			->set('products', $product_view)
			->set('packages', $package_view)
			->set('instructions', $instructions_view)
			->set('lead_form', $this->lead_form(true));
	}

	public function action_order()
	{
		$this->_campaign = 7;

		$promotion_id = $this->request->param('id');

		$promotion = \Kacela::find_one('promotion', \Kacela::criteria()->equals('id', $promotion_id));

		$user = new \Darth\Model\Lead;
		$form = $user->get_order_form($promotion_id);

		$form->campaign_id->set('value', $this->_campaign);

		$form->view()->attr('action', \Request::$current->uri()); //needed for ajax submit

		$complete = $form->load()->validate();

		$this->_content = \View::factory('promo/order_form')
			->set('scripts', array('order'))
			->set('promotion', $promotion)
			->bind('form', $form);

		if(!$complete)
		{
			return;
		}

		$user->save($form);

		exit(json_encode(array('success' => true)));
	}

	public function action_thank_you()
	{
		$this->_content = \View::factory('promo/thank_you', array('language' => true));
	}

}