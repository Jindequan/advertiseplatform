<?php


namespace AdPlatform\Abstracts;

use AdPlatform\Exception\ParamException;
use AdPlatform\Interfaces\ParamInterface;
use Rakit\Validation\Validator;

abstract class AbstractParam implements ParamInterface
{
    abstract protected function rules():array ;

    abstract protected function genParams($params) :array ;

    abstract protected function genRequestParams($params);

    private $rules = [];

    public function setRules(array $rules)
    {
        $this->rules = $rules;
        return $this;
    }

    public function build($params): array
    {
        $validateParam = $this->genParams($params);
        $this->validate($validateParam);
        return $this->genRequestParams($validateParam);
    }

    protected function validate($params)
    {
        $rules = !empty($this->rules) ?: $this->rules();
        if (empty($rules)) {
            return true;
        }
        $validator = new Validator();
        $validation = $validator->make($params, $rules);
        $validation->validate();
        if ($validation->fails()) {
            throw new ParamException($validation->errors());
        }
        return true;
    }
}
