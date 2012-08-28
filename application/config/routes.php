<?php
//\Subdomain_Request::$subdomain = 'promo';
Route::set
(
	'default',
	'(<action>(/<id>))'
)
->defaults
(
	array
	(
		'directory' => 'servicenow',
		'controller' => 'index',
	)
);

Route::set
(
	'promo',
	'(<action>(/<id>))'
)
->subdomains
(
	array
	(
		'promo',
	)
)
->defaults
(
	array
	(
		'directory' => 'promo',
		'controller' => 'index',
	)
);