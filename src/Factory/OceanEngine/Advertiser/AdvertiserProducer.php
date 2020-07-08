<?php

namespace AdPlatform\Factory\OceanEngine\Advertiser;

use AdPlatform\Abstracts\AbstractProducer;
use AdPlatform\Interfaces\ProducerInterface\OceanEngineInterface\AdvertiserInterface;
use AdPlatform\Traits\InitTrait;

class AdvertiserProducer extends AbstractProducer implements AdvertiserInterface
{
    use InitTrait;

    private static $initParams;

    public static function setInitParams($params)
    {
        self::$initParams = $params;
    }

    public static function getInitParams()
    {
        return self::$initParams;
    }

    public function getAdvertiserInfo($params)
    {

    }
}
