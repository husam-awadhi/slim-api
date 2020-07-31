<?php

/**
 * 
 */

namespace App\Controllers;

use App\Controller as BaseController;
use Respect\Validation\Validator as v;
use Respect\Validation\Exceptions\ValidationException;

/**
 * 
 * 
 * 
 */
class TestController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Process()
    {
        $request = $this->getRequestFields();
        if ($request !== false && $this->Validate($request)) {

            //do process here

            $data = array();
            $result = array(
                'status' => 200,
                'code' => 'ERR_001',
                'message' => "OK",
                'data' => $data
            );
            return $this->sendResponse($result);
        }
    }

    public function Validate($request_body)
    {
        $list = array('ERR_001');

        try {
            //DOCS https://respect-validation.readthedocs.io/en/1.1/ | project version 0.9.8
            v::key('caseID', v::notEmpty()->length(1, 20)->setName('Case ID'))->check($request_body);
            v::key('race', v::notEmpty()->in($list)->setName('Race'))->check($request_body);
        } catch (ValidationException $exception) {
            $result = array(
                'status' => 400,
                'code' => 'ERR_002',
                'message' => $exception->getMessage()
            );

            $this->_log($exception->getMessage(), 'ERROR');

            $this->sendResponse($result);
            return false;
        }

        return true;
    }
}
