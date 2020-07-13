<?php


namespace AdPlatform\Constants;


use AdPlatform\Exception\ApiException;
use AdPlatform\Exception\ParamException;
use AdPlatform\Exception\SystemException;

class EnumException extends BaseEnum
{
    public $all = [
        ApiException::class => 1001,
        ParamException::class => 2001,
        SystemException::class => 5001,
    ];
}