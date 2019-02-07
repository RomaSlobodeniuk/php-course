<?php

namespace Classes;

/**
 * Class LoggerSingleton
 */
class LoggerSingleton
{
    /**
     * @var int
     */
    private $logCount = 0;

    /**
     * @var LoggerSingleton
     */
    private static $loggerSingletonInstance;

    /**
     * @return LoggerSingleton
     */
    public static function getInstance()
    {
        if (self::$loggerSingletonInstance == null) {
            self::$loggerSingletonInstance = new LoggerSingleton();
        }

        return self::$loggerSingletonInstance;
    }

    /**
     * @param string $message
     */
    public function log(string $message)
    {
        echo '<hr>' . $this->logCount . ':' . $message . '<hr>';
        $this->logCount++;
    }
}
