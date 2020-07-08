<?php


namespace AdPlatform\Traits;


trait InitTrait
{
    private static $instances = [];

    /**
     * init a class which been called
     * @param $params void
     * @return static
     */
    public static function init($params = null)
    {
        $class = static::class;
        if (isset(self::$instances[$class])) {
            if (!empty($params)) {
                self::refreshParam($class, $params);
            }
            return self::$instances[$class];
        }

        if (empty($params)) {
            self::newClassWithoutParam($class);
        } else {
            self::newClassWithParam($class, $params);
        }

        return self::$instances[$class];
    }

    private static function newClassWithoutParam($class)
    {
        self::$instances[$class] = new $class();
    }

    private static function newClassWithParam($class, $params)
    {
        self::$instances[$class] = new $class();
        self::$instances[$class]::setInitParam($params);
    }

    private static function refreshParam($class, $params)
    {
        self::$instances[$class]::setInitParam($params);
    }
}
