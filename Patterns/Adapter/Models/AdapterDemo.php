<?php

namespace Models;

use Models\Implementations\Adapter;
use Models\Implementations\NewElectricitySystem;

/**
 * Class AdapterDemo
 * @package Models
 */
class AdapterDemo
{
    /**
     * @return void
     */
    public static function run()
    {
        /**
         * Ми можемо користуватися новою системою без проблем
         */
        $newElectricitySystem = new NewElectricitySystem();
        echo 'NewElectricitySystem:<br>';
        echo ElectricityConsumer::ChargeNotebook($newElectricitySystem);
        echo '<hr>';

        /**
         * Ми повинні адаптуватися до старої системи, використовуючи адаптер
         */
        $oldElectricitySystem = new OldElectricitySystem();
        $adapter = new Adapter($oldElectricitySystem);
        echo 'OldElectricitySystem:<br>';
        echo ElectricityConsumer::ChargeNotebook($adapter);
    }
}
