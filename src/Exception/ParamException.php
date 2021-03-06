<?php

namespace AdPlatform\Exception;

class ParamException extends BaseException
{
    public function exceptionCode(): array
    {
        return [];
    }

    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}