<?php

/**
 *  Config File For Handel Route, Database And Request
 *  Author: Gevann Mullins
 *  Email: gevann.mullins@gmail.com
 */

// Root path for inclusion.
// define('INC_ROOT', dirname(__DIR__));
define('SCRIPT', str_replace('\\', '/', rtrim(__DIR__, '/')) . '/');

// Require composer autoloader
//require_once SCRIPT . 'vendor/autoload.php';

// Http Default Url
$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('HTTP_URL', '/'. substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($scriptName)));

// Http Default root
define('HTTP_ROOT',
    'http://'.$_SERVER['HTTP_HOST'].
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', SCRIPT) . '/'
    )
);

// Root path for assets
define('ASSET_ROOT',
    'http://'.$_SERVER['HTTP_HOST'].
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', SCRIPT).'public/assets/'
    )
);

// Define Path Application
// define('SCRIPT', str_replace('\\', '/', rtrim(__DIR__, '/')) . '/');
define('SYSTEM', SCRIPT . 'System/');
define('CONTROLLERS', SCRIPT . 'Application/Controllers/');
define('MODELS', SCRIPT . 'Application/Models/');
define('VIEWS', SCRIPT . 'Application/Views/');
define('ASSETS', HTTP_URL . 'public/assets/');
define('PUBLIC_VIEW', HTTP_URL . 'public/');

// Config Database
define('DATABASE', [
   'Port'   => '3307',
   'Host'   => 'localhost',
   'Driver' => 'PDO',
   'Name'   => 'arc_assessment',
   'User'   => 'admin',
   'Pass'   => 'admin',
   'Prefix' => ''
]);

// DB_PREFIX
define('DB_PREFIX', '');

// For Limit Page
define('LIMIT_PRE_PAGE_SHOW_BOOKS', 5);
