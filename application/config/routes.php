<?php
Route::set
(
	'default',
	'(<action>(/<id>))'
)
->defaults
(
	array
	(
		'directory' => 'public',
		'controller' => 'index',
	)
);