<?php

namespace Models;

use Api\INewElectricitySystem;

/**
 * Class ElectricityConsumer
 * @package Models
 */
class ElectricityConsumer
{
    /**
     * Зарядний пристрій розуміє тільки нову систему
     *
     * @param INewElectricitySystem $electricitySystem
     * @return string
     */
    public static function ChargeNotebook(INewElectricitySystem $electricitySystem)
    {
        return $electricitySystem->MatchWideSocket();
    }
}
