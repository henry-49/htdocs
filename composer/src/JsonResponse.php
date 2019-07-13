<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 6/11/2018
 * Time: 2:44 PM
 */

namespace Devscreencast\ResponseClass;


class JsonResponse
{

    public $status;
    public $message;
    public $data = [];
    public $statusCode;
    public $result;

    public function  __construct($status, $message='', array $data=[])
    {

    }

}