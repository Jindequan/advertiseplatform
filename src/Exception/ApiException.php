<?php

namespace AdPlatform\Exception;

class ApiException extends BaseException
{
    public function exceptionCode(): array
    {
        return [

        ];
    }

    public function __construct($message = "接口请求出错", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}