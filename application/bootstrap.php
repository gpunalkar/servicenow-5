<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}
else
{
	// Fetch the local.php config file as an array
	$environment_config = include(APPPATH.'config/environment.php');

	// Use the 'environment' key to define the environment
	Kohana::$environment = (isset($environment_config['environment']))
		? $environment_config['environment']
		: 'DEV';
}

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
if(\Helper::language() == 'de')
{
	date_default_timezone_set('Europe/Berlin');
}
else
{
	date_default_timezone_set('America/Denver');
}

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
if(\Helper::language() == 'de')
{
	setlocale(LC_ALL, "de_DE", "de_DE@euro", "deu", "deu_deu", "german");
}
elseif(\Helper::language() == 'en')
{
	setlocale(LC_ALL, 'en_GB.utf-8');
}
else
{
	setlocale(LC_ALL, 'en_US.utf-8');
}


/**
 * Set the language
 */
\I18n::lang(\Helper::language());


/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
	'index_file' => true,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array
	(
		// 'auth'       => MODPATH.'auth',       // Basic authentication
		// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
		// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
		// 'database'   => MODPATH.'database',   // Database access
		// 'image'      => MODPATH.'image',      // Image manipulation
		// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
		// 'unittest'   => MODPATH.'unittest',   // Unit testing
		// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
		'boldchat' => MODPATH.'boldchat',
		'analytics' => MODPATH.'analytics',
		'assets'	=> MODPATH.'assets',  // Benchmarking tool
		'site' => MODPATH.'site',
		//'database' => MODPATH.'database',
		//'orm' => MODPATH.'orm',
		'menu' => MODPATH.'menu',
		'sidebar' => MODPATH.'sidebar',
		'kacela' => MODPATH.'kacela',
		'formo' => MODPATH.'formo',
		'cache' => MODPATH.'cache',
		'bonafide' => MODPATH.'bonafide',
		'email' => MODPATH.'email',
	)
);

\Cookie::$salt = '#alksdjf$lkasjfd@lkn!jnoijaoidfj(jsl#k2h%ji9oijoija';

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
try
{
	require APPPATH.'config/routes.php';
}
catch (Exception $e)
{
	print_r($e);
}
