<?php

namespace Implementations\BaseClasses;

use Api\AnimalToy;

/**
 * Базовий клас для усіх ведмедиків
 *
 * Class AbstractBear
 */
abstract class AbstractBear implements AnimalToy
{
    public $name;

    /**
     * {@inheritdoc}
     */
    public function __construct() {
        $this->name = 'Base Abstract Bear';
    }
}
