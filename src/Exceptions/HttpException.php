<?php

namespace SON\Framework\Exceptions;

//use Throwable;

class HttpException extends \Exception
{
    public function __construct($message, $code, \Exception $previous = null)
    {
        http_response_code($code);
        parent::__construct($message, $code, $previous);
    }
}