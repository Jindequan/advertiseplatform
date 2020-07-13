<?php


namespace AdPlatform\RequestBody\OceanEngine;


use AdPlatform\Abstracts\AbstractParam;

/**
 * Class Header
 * @package AdPlatform\RequestBody\OceanEngine
 *
 * @property string $access_token
 * @property int $x_debug_model
 */
class Header extends AbstractParam
{
    protected function rules(): array
    {
        return [
            'access_token' => 'required',
            'x_debug_model' => 'numeric'
        ];
    }

    protected function genParams($params): array
    {
        // TODO: Implement genParams() method.
    }

    protected function genRequestParams($params)
    {
        // TODO: Implement genRequestParams() method.
    }
}
