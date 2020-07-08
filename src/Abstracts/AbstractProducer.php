<?php


namespace AdPlatform\Abstracts;


use AdPlatform\Interfaces\InitParamInterface;

abstract class AbstractProducer implements InitParamInterface
{
    abstract public static function getInitParams();

    abstract public static function setInitParams($params);
}
