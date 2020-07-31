<?php 
/**
 * Application constants.
 *
 * @package  gitpack
 * @author   Husam A.
 */

 /*
|--------------------------------------------------------------------------
| Define Root directory
|--------------------------------------------------------------------------
|
| application base directory
|
*/
if(!defined('ROOT')) define('ROOT', __DIR__);


/*
|--------------------------------------------------------------------------
| Define Log directory
|--------------------------------------------------------------------------
|
| debug and error logs directory 
|
*/
if(!defined('LOG')) define('LOG',ROOT."/logs");


/*
|--------------------------------------------------------------------------
| Define API directory
|--------------------------------------------------------------------------
|
| Slim Framework directory, store the settings, routes, and dependencies
|
*/
if(!defined('API')) define('API', ROOT."/src/App/");