<?php 
/**
 * 
 */

namespace App;

use Exception;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * 
 * 
 * 
 */
class Helpers {
    
    /**
     * 
     * 
     */
    static public function dd($args)
    {
        Helpers::d($args);
        die;
    }
    
    /**
     * 
     * 
     */
    static public function d($args)
    {
        $e = new Exception();
        echo '============================================================'.PHP_EOL;
        echo $e->getTraceAsString().PHP_EOL;
        echo '============================================================'.PHP_EOL;
        var_dump($args);
    }
    
    /**
     * 
     * 
     */
    static public function log($msg, $type)
    {
        $logger = Helpers::getLogger();

        switch(strtoupper($type)){
            case "WARNING":
                $func = 'warning';
            break;
            case "ERROR":
                $func = 'error';
            break;
            default:
            $func = 'info';
        }

        $logger->$func($msg);
    }

    /**
     * 
     * 
     */
    static function getLogger()
    {
        static $logger;

        if(!$logger){
            $logger = new Logger('app');
            $logger->pushHandler(new StreamHandler(LOG.'/app-loggs'.date('Ymd').'.log', Logger::DEBUG));
        }

        return $logger;
    }

}