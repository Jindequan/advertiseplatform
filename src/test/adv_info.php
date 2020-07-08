<?php

require_once __DIR__ . '/../vendor/autoload.php';
use AdPlatform\RequestBody\OceanEngine\Advertiser\AdvertiserInfo;

$params = new AdvertiserInfo();
var_dump($params->build());