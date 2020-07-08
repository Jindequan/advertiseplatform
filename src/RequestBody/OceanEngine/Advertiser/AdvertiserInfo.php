<?php

namespace AdPlatform\RequestBody\OceanEngine\Advertiser;

use AdPlatform\Abstracts\AbstractParam;

/**
 * Class AdvertiserInfo
 * @package AdPlatform\RequestBody\OceanEngine\Advertiser
 *
 * @property array $advertiser_ids necessary
 * @property array $fields
 */
class AdvertiserInfo extends AbstractParam
{
    private function rules()
    {
        return [
            'advertiser_ids' => ''
        ];
    }

    public function build($param)
    {
        $this->advertiser_ids = '';
    }
}
