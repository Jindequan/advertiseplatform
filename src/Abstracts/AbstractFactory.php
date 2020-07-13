<?php

namespace AdPlatform\Abstracts;

use AdPlatform\Exception\SystemException;
use AdPlatform\Interfaces\FactoryInterface;

abstract class AbstractFactory implements FactoryInterface
{
    public function producer($name) :AbstractProducer
    {
        $class = $this->producerMap()[$name] ?? '';
        if (empty($class) || !class_exists($class)) {
            throw new SystemException('Producer not exist:' . $name);
        }
        return $class::init();
    }

    abstract public function producerMap():array ;
}
