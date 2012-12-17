<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'file', // you can use 'database' or 'file', database uses ORM driver
	'view' => 'menu/sidenav', // the view file
	'current_class' => 'active', // the set_current() method uses this setting to mark the current menu item

	'items' => array
	(
		array
		(
			'url'		=> '/',
			'title'		=> '<i class="icon-chevron-right"></i>'.__('My POC Console'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/',
			'title'		=> '<i class="icon-chevron-right"></i>'.__('Documents'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/',
			'title'		=> '<i class="icon-chevron-right"></i>'.__('Videos'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/',
			'title'		=> '<i class="icon-chevron-right"></i>'.__('Help'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/',
			'title'		=> '<i class="icon-chevron-right"></i>'.__('Contact'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/',
			'title'		=> '<i class="icon-chevron-right"></i>'.__('More'),
			'type'		=> 'main',
		),
	),

);