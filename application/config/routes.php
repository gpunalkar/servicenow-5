<?php
switch($_SERVER['SERVER_NAME'])
{
	case 'servicenow.matrix42.com':
	case 'servicenow.matrix42.de':
		$directory = 'servicenow';
		break;
	case 'promo.matrix42.com':
	case 'promo.matrix42.de':
		$directory = 'promo';
		break;
	case 'sandbox.matrix42.com':
	case 'sandbox.matrix42.de':
		$directory = 'testing';
		break;
	default:
		$directory = 'promo';
}
Route::set
(
	'default',
	'(<action>(/<id>))'
)
->defaults
(
	array
	(
		'directory' => $directory,
		'controller' => 'index',
		'action' => 'index',
	)
);
