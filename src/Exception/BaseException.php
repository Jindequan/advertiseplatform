<?php

namespace AdPlatform\Exception;

use AdPlatform\Constants\EnumException;

abstract class BaseException extends \Exception
{
    abstract public function exceptionCode(): array ;

    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        if (isset($this->exceptionCode()[$code])) {
            $message = $message . $this->exceptionCode()[$code];
        }
        $code = $code !== 0 ?: '';
        $exceptionType = EnumException::from()->getValue(static::class);
        $code = (string)$exceptionType . (string)$code;
        parent::__construct($message, $code, $previous);
    }
}