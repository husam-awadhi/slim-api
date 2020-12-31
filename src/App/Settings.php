<?php 

return array(
    
    /*
    |--------------------------------------------------------------------------
    | Debug
    |--------------------------------------------------------------------------
    |
    | application base directory
    |
    */
    'debug' => \App\Config::getValue("debug"),

    /*
    |--------------------------------------------------------------------------
    | Define Root directory
    |--------------------------------------------------------------------------
    |
    | application base directory
    |
    */
    'log.level' => \Slim\Log::DEBUG,

    /*
    |--------------------------------------------------------------------------
    | Define Root directory
    |--------------------------------------------------------------------------
    |
    | application base directory
    |
    */
    'log.enabled' => \App\Config::getValue("log"),
    
    /*
    |--------------------------------------------------------------------------
    | Define Root directory
    |--------------------------------------------------------------------------
    |
    | application base directory
    |
    */
    'log.writer' => \App\Helpers::getLogger(),


    /*
    |--------------------------------------------------------------------------
    | Define Root directory
    |--------------------------------------------------------------------------
    |
    | application base directory
    |
    */
    'mode' => \App\Config::getValue("slim.mode"),

);