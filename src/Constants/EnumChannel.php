<?php


namespace AdPlatform\Constants;


use AdPlatform\Factory\OceanEngine\OceanEngineFactory;
use AdPlatform\Factory\KuaiShou\KuaiShouFactory;
use AdPlatform\Factory\GDT\GDTFactory;

class EnumChannel extends BaseEnum
{
    const CHANNEL_DY = 1;
    const CHANNEL_KS = 2;
    const CHANNEL_GDT = 3;

    public $all = [
        self::CHANNEL_DY => 'douyin',
        self::CHANNEL_KS => 'kuaishou',
        self::CHANNEL_GDT => 'guangdiantong',
    ];

    public $channel_factory = [
        self::CHANNEL_DY => OceanEngineFactory::class,
        self::CHANNEL_KS => KuaiShouFactory::class,
        self::CHANNEL_GDT => GDTFactory::class,
    ];
}