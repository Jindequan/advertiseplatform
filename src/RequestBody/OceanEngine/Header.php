<?php


namespace AdPlatform\RequestBody\OceanEngine;


use AdPlatform\Abstracts\AbstractParam;

/**
 * Class Header
 * @package AdPlatform\RequestBody\OceanEngine
 *
 * @property $access_token
 * @property $x_debug_model
 */
class Header extends AbstractParam
{
    public function build($param)
    {
        return [
            'Access-Token' => $this->access_token,
            'X-Debug-Mode' => $this->x_debug_model,
        ];
    }
}
