<?php


namespace AdPlatform\Factory;


use AdPlatform\Abstracts\AbstractFactory;
use AdPlatform\Constants\EnumChannel;
use AdPlatform\Exception\SystemException;
use AdPlatform\Traits\InitTrait;


class AdCenter
{
    use InitTrait;

    private static $channel;

    public function factory() :AbstractFactory
    {
        $class = EnumChannel::from('channel_factory')->getValue(self::$channel);
        if (!class_exists($class)) {
            throw new SystemException('Class not defined in channel:' . self::$channel);
        }
        return $class::init();
    }

    /**
     * @param $channelId
     * @throws SystemException
     */
    public static function setInitParam($channelId)
    {
        self::$channel = $channelId;
    }
}
