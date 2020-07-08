<?php


namespace AdPlatform\Abstracts;

use AdPlatform\Interfaces\ParamInterface;
use Rakit\Validation\Validator;

abstract class AbstractParam implements ParamInterface
{
    abstract public function build($param);

    protected function validate()
    {
        $validator = new Validator();
        $validator->make();
    }
}
