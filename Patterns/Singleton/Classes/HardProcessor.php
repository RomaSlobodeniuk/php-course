<?php

namespace Classes;

/**
 * Class HardProcessor
 */
class HardProcessor
{
    /**
     * @var int
     */
    private $start;

    /**
     * HardProcessor constructor.
     * @param $start
     */
    public function __construct($start)
    {
        $this->start = $start;
        LoggerSingleton::getInstance()->log("Processor just created.");
    }

    /**
     * @param $end
     * @return int
     */
    public function processTo($end)
    {
        $sum = 0;
        for ($i = $this->start; $i <= $end; ++$i) {
            $sum += $i;
        }

        LoggerSingleton::getInstance()->log("Processor just calculated some value: " . $sum);
        return $sum;
    }
}
