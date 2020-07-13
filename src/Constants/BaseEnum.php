<?php


namespace AdPlatform\Constants;


abstract class BaseEnum
{
    private static $arrayName = '';

    public static function from($arrayName = 'all')
    {
        self::$arrayName = $arrayName;
        return new static();
    }

    public function getValue($k, $default = '')
    {
        $array_name = self::$arrayName;
        return $this->$array_name[$k] ?? $default;
    }
}