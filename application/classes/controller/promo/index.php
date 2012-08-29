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

		$this->_content = \View::factory('promo/index', array('language' => true))
			->set('products', $product_view)
			->set('packages', $package_view)
			->set('lead_form', $this->lead_form(true));
	}

	public function action_order()
	{
		$this->_content = \View::factory('modal_form')
			->set('form', $form);
	}

}