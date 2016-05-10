<?php
/**
 * Config - an example for setting up system settings.
 * When you are done editing, rename this file to 'Config.php'.
 *
 * @author David Carr - dave@daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 3.0
 */

use Core\Config;

/**
 * Define the complete site URL.
 */
define('SITEURL', 'http://localhost/pao/framework/');

/**
 * Define relative base path.
 */
define('DIR', '/pao/framework/');

/**
 * Set the Application Router.
 */
// Default Routing
define('APPROUTER', '\Core\Router');
// Classic Routing
// define('APPROUTER', '\Core\ClassicRouter');

/**
 * Set timezone.
 */
define('DEFAULT_TIMEZONE', 'Europe/London');

/**
 * Set default controller and method for legacy calls.
 */
define('DEFAULT_CONTROLLER', 'Welcome');
define('DEFAULT_METHOD', 'index');

/**
 * Set the default template.
 */
define('TEMPLATE', 'Default');

/**
 * Set a default language.
 */
define('LANGUAGE_CODE', 'en');

//database details ONLY NEEDED IF USING A DATABASE

/**
 * Database engine default is mysql.
 */
define('DB_TYPE', 'mysql');

/**
 * Database host default is localhost.
 */
define('DB_HOST', 'localhost');

/**
 * Database name.
 */
define('DB_NAME', 'zwabbertje');

/**
 * Database username.
 */
define('DB_USER', 'root');

/**
 * Database password.
 */
define('DB_PASS', '');

/**
 * PREFER to be used in database calls default is smvc_
 */
define('PREFIX', 'dc_');

/**
 * Set prefix for sessions.
 */
define('SESSION_PREFIX', 'dc_');

/**
 * Optional create a constant for the name of the site.
 */
define('SITETITLE', 'Zwabbertje');

/**
 * Optional set a site email address.
 */
// define('SITEEMAIL', 'email@domain.com');

/**
 * Setup the (class) Aliases configuration.
 */
Config::set('class_aliases', array(
    'Errors'        => '\Core\Error',
    'Language'      => '\Core\Language',
    'Mail'          => '\Helpers\PhpMailer\Mail',
    'Assets'        => '\Helpers\Assets',
    'Arr'           => '\Helpers\Arr',
    'Cookie'        => '\Helpers\Cookie',
    'Csrf'          => '\Helpers\Csrf',
    'Date'          => '\Helpers\Date',
    'Document'      => '\Helpers\Document',
    'Form'          => '\Helpers\Form',
    'Ftp'           => '\Helpers\Ftp',
    'GeoCode'       => '\Helpers\GeoCode',
    'Hooks'         => '\Helpers\Hooks',
    'Inflector'     => '\Helpers\Inflector',
    'Number'        => '\Helpers\Number',
    'Paginator'     => '\Helpers\Paginator',
    'Password'      => '\Helpers\Password',
    'RainCaptcha'   => '\Helpers\RainCaptcha',
    'Request'       => '\Helpers\Request',
    'ReservedWords' => '\Helpers\ReservedWords',
    'Response'      => '\Helpers\Response',
    'Session'       => '\Helpers\Session',
    'SimpleCurl'    => '\Helpers\SimpleCurl',
    'TableBuilder'  => '\Helpers\TableBuilder',
    'Tags'          => '\Helpers\Tags',
    'Url'           => '\Helpers\Url'
));

