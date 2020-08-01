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
    const ERROR = "Error loading config file. please check if file exist and if it's a valid json file";

    /**
     * 
     * 
     */
    static private function loadConfig($format = true)
    {
        static $config;

        if (!$config && is_file(self::CONFIG_FILE)) 
        {
            $config = json_decode(file_get_contents(self::CONFIG_FILE), true);
            if ($format && isset($config['config'])) $config['config'] = Helpers::toOneDimension($config['config']);
        }


        if (!$config) Helpers::log(self::ERROR, "ERROR");

        return $config;
    }

    /**
     * 
     * 
     */
    static public function getValue($key = null)
    {

        $config = self::loadConfig();

        $value = ($key !== null) ? (isset($config['config'][$key]) ? $config['config'][$key] : Config::DEFAULT) : $config['config'];

        return $value;
    }
}
