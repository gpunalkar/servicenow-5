<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'file', // you can use 'database' or 'file', database uses ORM driver
	'view' => 'menu/public', // the view file
	'current_class' => 'active', // the set_current() method uses this setting to mark the current menu item

	'items' => array
	(
		array
		(
			'url'		=> '/',
			'title'		=> __('ServiceNow'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/workplace_mobility',
			'title'		=> __('Mobile Workplace'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/workplace_virtualization',
			'title'		=> __('Virtual Workplace'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/workplace_automation',
			'title'		=> __('Physical Workplace'),
			'type'		=> 'main',
		),
	),

);