<?php

namespace Models\Implementations;

use Api\INewElectricitySystem;

/**
 * Ну і власне сама розетка у новій квартирі
 *
 * Class NewElectricitySystem
 */
class NewElectricitySystem implements INewElectricitySystem
{
    /**
     * @return string
     */
    public function MatchWideSocket()
    {
        return "220V";
    }
}
