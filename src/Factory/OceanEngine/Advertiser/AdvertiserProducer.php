<?php

namespace AdPlatform\Factory\OceanEngine\Advertiser;

use AdPlatform\Abstracts\AbstractProducer;
use AdPlatform\Constants\EnumOceanEngine;
use AdPlatform\Factory\OceanEngine\OceanEngineApi;
use AdPlatform\Interfaces\ProducerInterface\OceanEngineInterface\AdvertiserInterface;
use AdPlatform\RequestBody\OceanEngine\Advertiser\AdvertiserInfo;
use AdPlatform\Traits\InitTrait;

class AdvertiserProducer extends AbstractProducer implements AdvertiserInterface
{
    use InitTrait;

    public function getAdvertiserInfo($params)
    {
        $url = EnumOceanEngine::url(EnumOceanEngine::ADVERTISER_INFO);

        $paramBuilder = new AdvertiserInfo();
        $requestBody = $paramBuilder->build($params);

        $url .= '?' . http_build_query($requestBody);
        $header = [
            'Access-Token' => '5828514264ae6110acf38d99b78da71472a2245a',
            'Content-Type' => 'application/json'
        ];

        return OceanEngineApi::init()->doRequest('get', $url, $header);
    }
}
