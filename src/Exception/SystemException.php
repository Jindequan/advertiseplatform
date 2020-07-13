<?php

namespace AdPlatform\Exception;

class SystemException extends BaseException
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