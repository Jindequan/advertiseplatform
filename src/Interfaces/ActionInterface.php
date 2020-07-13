<?php


namespace AdPlatform\Interfaces;


interface ActionInterface
{
    public function prepare(array $params = [], array $config = []) : ActionInterface;

    public function execute() : ProducerInterface;

    public function formatResult() : array ;
}