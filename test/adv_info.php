<?php

require __DIR__ . '/../vendor/autoload.php';
use AdPlatform\Factory\AdCenter;
use AdPlatform\Factory\OceanEngine\Advertiser\AdvertiserProducer;
use AdPlatform\Constants\EnumChannel;

//which way will you choose? why?
try {
    //1.
    $params = ['advertiser_ids'=> [1671466542288967]];
    $res = AdCenter::init(EnumChannel::CHANNEL_DY)->factory()
        ->producer('advertiser')
        ->getAdvertiserInfo($params);
    //2.
    $params = ['advertiser_ids'=> [1671466542288967]];
    $res2 = AdvertiserProducer::init()->getAdvertiserInfo($params);


    var_dump($res, $res2);die;
} catch (Throwable $e) {
    var_dump($e->getMessage());die;
}
