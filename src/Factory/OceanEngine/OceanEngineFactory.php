<?php


namespace AdPlatform\Factory\OceanEngine;

use AdPlatform\Abstracts\AbstractFactory;
use AdPlatform\Factory\OceanEngine\Advertiser\AdvertiserProducer;
use AdPlatform\Factory\OceanEngine\Campaign\CampaignProducer;
use AdPlatform\Factory\OceanEngine\Creative\CreativeProducer;
use AdPlatform\Factory\OceanEngine\Plan\PlanProducer;
use AdPlatform\Interfaces\InitInterface;
use AdPlatform\Traits\InitTrait;


class OceanEngineFactory extends AbstractFactory implements InitInterface
{
    use InitTrait;

    public static function setInitParams($params)
    {
        // TODO: Implement setInitParams() method.
    }

    public static function getInitParams()
    {
        // TODO: Implement getInitParams() method.
    }

    public function producerMap(): array
    {
        return [
            'advertiser' => AdvertiserProducer::class,
            'campaign' => CampaignProducer::class,
            'plan' => PlanProducer::class,
            'creative' => CreativeProducer::class,
        ];
    }
}
