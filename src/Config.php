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
class Config {

    /**
     * 
     * 
     */
    static private function loadConfig()
    {
        static $config;

        if(!$config) {
            $config = json_decode(file_get_contents(ROOT.'/config.json'), true);
        }
        if(!$config) Helpers::log("Error loading config file. please check if file exist and if it's a valid json file","ERROR");

        return $config;
    }

    /**
     * 
     * 
     */
    static public function getValue($key){
        
        $config = Config::loadConfig();
        
        return isset($config['config'][$key]) ? $config['config'][$key] : "this ain't it chief"; 
    }

    //
    
}