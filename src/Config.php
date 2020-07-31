<?php

/**
 * 
 */

namespace App;

use App\Helpers;


/**
 * 
 * 
 * 
 * 
 */
class Config
{

    const DEFAULT = "this ain't it chief";
    const CONFIG_FILE = ROOT . "/config.json";

    /**
     * 
     * 
     */
    static private function loadConfig($format = true)
    {
        static $config;

        if (!$config) {
            $config = json_decode(file_get_contents(Config::CONFIG_FILE), true);
        }
        if ($format) $config['config'] = Helpers::toOneDimension($config['config']);


        if (!$config) Helpers::log("Error loading config file. please check if file exist and if it's a valid json file", "ERROR");

        return $config;
    }

    /**
     * 
     * 
     */
    static public function getValue($key = null)
    {

        $config = Config::loadConfig();

        $value = ($key !== null) ? (isset($config['config'][$key]) ? $config['config'][$key] : Config::
        DEFAULT) : $config['config'];

        return $value;
    }
}
