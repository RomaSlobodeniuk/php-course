<?php

namespace Models\Implementations;

use Api\INewElectricitySystem;
use Models\OldElectricitySystem;

/**
 * Адаптер назовні виглядає як нові євроразетки,
 * шляхом наслідування прийнятного у
 * системі інтерфейсу
 *
 * Class Adapter
 */
class Adapter implements INewElectricitySystem
{
    /**
     * Але всередині він таки знає, що коїлося в СРСР
     *
     * @var OldElectricitySystem
     */
    private $adaptee;

    /**
     * @param OldElectricitySystem $adaptee
     */
    public function __construct(OldElectricitySystem $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * А тут відбувається вся магія -
     * наш адаптер «перекладає»
     * функціональність із нового стандарту на старий
     *
     * @return string
     */
    public function MatchWideSocket()
    {
        /**
         * Якщо б була різниця в напрузі (не 220V), то
         * тут ми б помістили трансформатор
         */
        return $this->adaptee->MatchThinSocket();
    }
}
