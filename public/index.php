<?php 

/**
 * gitpack API - A Slim PHP api
 *
 * @package  gitpack
 * @author   Gamma Squad
 */

define('GITPACK_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Load Constants
|--------------------------------------------------------------------------
|
| Default values that can be used throughout the app
| a way to make our life easier.
|
*/

require_once __DIR__.'/../constants.php';

/*
|--------------------------------------------------------------------------
| Run Slim
|--------------------------------------------------------------------------
|
| Once Slim is running, we can recieve requests and response to 
| the client's browser. 
|
*/

//


// App\Helpers::log('prod: '. App\Config::getValue('prod'), 'error');
// App\Helpers::log('prod: '. App\Config::getValue('prod'), 'warning');
// App\Helpers::log('prod: '. App\Config::getValue('prod'), 'something random');
// echo App\Config::getValue('prod');

