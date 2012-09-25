<?php

namespace Darth\Model;

class Lead extends User
{
	public function create_new_lead($form)
	{
		//if this is an existing email then just update that leads info else create a new lead
		if(!\Valid::unique_email($form->email->val()))
		{
			$lead = \Kacela::find('user', $form->email->val());
		}
		else
		{
			$lead = $this;
			// Generate the temp password
			$temp_password = \Text::random();
			$hash_password = \Bonafide::instance()->hash($temp_password);
			$lead->password = $hash_password;
			$lead->inquiry_ip = \Request::$client_ip;
		}

		// Set the user variables
		$lead->full_name = $form->name->val();
		$lead->email = $form->email->val();
		$lead->business_name = $form->company->val();
		$lead->campaign_id = $form->campaign_id->val();
		$lead->role = 'lead';
		$lead->inquiry_date = time();
		$lead->last_activity_date = time();
		$lead->last_ip = \Request::$client_ip;

		// Insert the user and client records
		$lead->save();

		//insert or update primary phone
		$personal_phone = $lead->get_phone('primary');
		$personal_phone->number = \Format::clean_number($form->number->val());
		$personal_phone->save();

		//insert note
		$note = $lead->get_note();
		$note->user_id = $lead->id;
		$note->author_id = $lead->id;
		$note->type = 'inquiry';
		$note->note = $form->message->val();
		$note->save();

		// Start building the email
		$header = \View::factory('email/_header')
			->set('title', 'New Lead');
		$footer = \View::factory('email/_footer');
		$email_content = \View::factory('email/new_lead')
			->set('lead', $lead);

		$message = \View::factory('email/_template')
			->bind('header', $header)
			->bind('footer', $footer)
			->bind('content', $email_content);

		// Send the email
		$email_address = \Helper::language() === 'en-us' ? 'leads@matrix42.com' : 'leads@matrix42.de';
		$email_from = \Helper::language() === 'en-us' ? 'info@matrix42.com' : 'info@matrix42.de';
		$subject = 'New Matrix42 '.$lead->campaign->name.' Lead';
		$email = \Email::factory($subject)
			->to($email_address)
			->from($email_from)
			->message($message->render(), 'text/html')
			->send();
	}

	public function create_new_order($form)
	{
		//exit(\Debug::vars($form));
		//if this is an existing email then just update that leads info else create a new lead
		if(!\Valid::unique_email($form->email->val()))
		{
			$lead = \Kacela::find('user', $form->email->val());
		}
		else
		{
			$lead = $this;
			// Generate the temp password
			$temp_password = \Text::random();
			$hash_password = \Bonafide::instance()->hash($temp_password);
			$lead->password = $hash_password;
			$lead->inquiry_ip = \Request::$client_ip;
		}


		// Set the user variables
		$lead->full_name = $form->name->val();
		$lead->email = $form->email->val();
		$lead->business_name = $form->company->val();
		$lead->campaign_id = $form->campaign_id->val();
		$lead->role = 'lead';
		$lead->inquiry_date = time();
		$lead->last_activity_date = time();
		$lead->last_ip = \Request::$client_ip;

		// Insert the user and client records
		$lead->save();

		//insert or update primary phone
		$personal_phone = $lead->get_phone('primary');
		$personal_phone->number = \Format::clean_number($form->number->val());
		$personal_phone->save();

		//insert promotion order
		$lead_order = new \Darth\Model\Order;
		//exit(\Debug::vars($lead_order));
		$lead_order->promotion_id = $form->promotion_id->val();
		$lead_order->lead_id = $lead->id;
		$lead_order->partner = $form->partner->val();
		$lead_order->devices = $form->devices->val();
		$lead_order->price_estimate = \Format::clean_number($form->price_estimate->val(), true);
		$lead_order->save();

		$products = \Kacela::find_active('product', \Kacela::criteria()->in('id', $form->addons->val()));

		$lead_order->add($products, true);

		// Start building the email
		$header = \View::factory('email/_header')
			->set('title', 'New Order');
		$footer = \View::factory('email/_footer');
		$email_content = \View::factory('email/new_order')
			->set('lead', $lead)
			->set('lead_order', $lead_order)
			->set('products', $products);

		$message = \View::factory('email/_template')
			->bind('header', $header)
			->bind('footer', $footer)
			->bind('content', $email_content);

		$email_address = \Helper::language() === 'en-us' ? 'leads@matrix42.com' : 'leads@matrix42.de';
		$email_from = \Helper::language() === 'en-us' ? 'info@matrix42.com' : 'info@matrix42.de';
		// Send the email
		$email = \Email::factory('New Order')
			->to($email_address)
			->from($email_from)
			->message($message->render(), 'text/html')
			->send();
	}

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$phone = $this->get_phone();
		$form->add('phone', 'group', $phone->get_form());

		$address = $this->get_address();
		$form->add('address', 'group', $address->get_form());

		$form->remove
		(
			array
			(
				'campaign_id',
				'ip',
				'inquiry_ip',
				'inquiry_date',
				'contact_date',
				'downloaded',
			)
		);

		$form->order
		(
			array
			(
				'full_name' => 0,
				'email' => 1,
			)
		);

		return $form;
	}

	public function get_lead_form($name = 'lead')
	{
		$form = \Formo::form($name)
			->add('campaign_id', 'hidden')
			->add('name', array('label' => __('Full Name')))
			->add('email', array('type' => 'email', 'label' => 'Email'))
			->add('company', array('label' => __('Business Name')))
			->add('number', array('label' => __('Phone Number')))
			->add('message', 'textarea', array('label' => __('Message')))
			->rules('name', array(
			array('not_empty'),
			array('\Valid::full_name'),
		))
			->rules('email', array(
			array('not_empty'),
			array('email'),
		))
			->rules('number', array(
			array('not_empty'),
			array('phone', array(':value')),
		))
			->callbacks(array(
			'fail' => array
			(
				'email' => array
				(
					array(function($field){
						$error = $field->error();
						if (strpos($error, 'already'))
						{
							$field->parent()->set('fail_unique_email', true);
						}
					}, array(':field')),
				)
			),
			'pass' => array
			(
				':self' => array
				(
					array(array($this, 'create_new_lead'), array(':field')),
				),
			),
		));

		return $form;
	}

	public function get_order_form($promotion_id)
	{
		$add_ons = \Kacela::find_active('product', \Kacela::criteria()->equals('type', 'add-on'));

		$add_on_array = array();
		foreach($add_ons as $add_on)
		{
			$add_on_array[$add_on->id] = $add_on->name;
		}

		$addon_label = $promotion_id == 3 ? __('Products/Add-ons (all three included)') : __('Products: Please choose').' '.$promotion_id.' '.__('Total Add-on(s)');

		$form = \Formo::form('order')
			->add('promotion_id', 'hidden')
			->add('campaign_id', 'hidden')
			->add('name', array('label' => __('Full Name')))
			->add('company', array('label' => __('Business Name')))
			->add('email', array('type' => 'email', 'label' => 'Email'))
			->add('number', array('label' => __('Phone Number')))
			->add('promotion_id', 'hidden')
			->add('addons', array('driver' => 'checkboxes', 'label' => $addon_label, 'options' => $add_on_array))
			->add('partner', array('label' => __('Referring Partner')))
			->add('devices', array('label' => __('Approximately How many Devices?')))
			->add('estimate', array('label' => __('Your Estimated Cost').'*', 'attr' => array('class' => 'estimate', 'disabled' => 'disabled')))
			->add('price_estimate', array('driver' => 'hidden'))
			->rules('name', array(
				array('not_empty'),
				array('\Valid::full_name'),
			))
			->rules('email', array(
				array('not_empty'),
				array('email'),
			))
			->rules('number', array(
				array('not_empty'),
				array('phone', array(':value')),
			))
			->rules('addons', array(
				array('not_empty'),
				array('\Valid::select_count', array(':value', $promotion_id))
			))
			->rules('devices', array(
				array('not_empty'),
				array('numeric'),
			))
			->callbacks(array(
			'fail' => array
			(
				'email' => array
				(
					array(function($field){
						$error = $field->error();
						if (strpos($error, 'already'))
						{
							$field->parent()->set('fail_unique_email', true);
						}
					}, array(':field')),
				)
			),
			'pass' => array
			(
				':self' => array
				(
					array(array($this, 'create_new_order'), array(':field')),
				),
			),
		));

		$form->promotion_id->set('value', $promotion_id);

		return $form;
	}
}
