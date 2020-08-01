<?php

/**
 * 
 */

namespace App;

use Slim\Slim;
use App\Helpers;
use App\Config;
use App\Interfaces\ControllerInterface;
use Respect\Validation\Validator as v;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * 
 * 
 */
abstract class Controller implements ControllerInterface
{

    /**
     * oAuth server object
     * @var Object
     */
    protected $server;

    /**
     * 
     */
    protected $_test;

    /**
     * 
     */
    protected $_debug;

    /**
     * 
     */
    protected $request = false;


    /**
     * 
     */
    public function __construct()
    {
        $this->slim = Slim::getInstance();

        $this->request = $this->slim->request;
        $this->response = $this->slim->response;
    }

    abstract public function Process();

    abstract public function Validate($request_body);

    public function sendResponse($params = array(), Response $response = null)
    {
        $response ?: $response = $this->response;

        $response->headers->set('Content-Type', 'application/json');
        !isset($params['status']) ?: $response->setStatus($params['status']);

        !isset($params['code']) ?: $json_response['code'] = $params['code'];
        !isset($params['message']) ?: $json_response['message'] = $params['message'];
        !isset($params['data']) ?: $json_response['data'] = $params['data'];
        $response->setBody(json_encode($json_response));
        $response->finalize();

        return;
    }

    public function getRequestFields()
    {
        $content_array = json_decode($this->request->getBody(), true);

        if ($content_array === null) {
            $this->sendResponse(
                array(
                    'status' => 400,
                    'code' => 'ERR_001',
                    'message' => "Invalid format"
                )
            );
            return false;
        }

        return $content_array;
    }

    public function _log($msg, $type)
    {
        Helpers::log(
            "[/SLIM/]" ."[{$this->request->getMethod()}] " .
                get_called_class() .
                " [BODY] " . $this->request->getBody() .
                " [MSG] " . $msg,
            $type
        );
    }
}
