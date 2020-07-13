<?php

require __DIR__ . '/../vendor/autoload.php';
use AdPlatform\Factory\AdCenter;
use AdPlatform\Constants\EnumChannel;

try {
    $params = [
        'advertiser_id'=> 1634121855095816,
        'campaign_name' => '测试广告组',
        'operation' => 'disable',
        'budget_mode' => 'BUDGET_MODE_INFINITE',
        'landing_type' => 'LINK'
    ];
    $res = AdCenter::init(EnumChannel::CHANNEL_DY)->factory()
        ->producer('campaign')
        ->createCampaign($params);

    var_dump($res);die;
} catch (Throwable $e) {
    var_dump($e);die;
}
