<?php

namespace Implementations\BaseClasses;

use Api\AnimalToy;

/**
 * Базовий клас для усіх котиків, базовий клас AnimalToy містить Name
 *
 * Class AbstractCat
 */
abstract class AbstractCat implements AnimalToy
{
    public $name;

    /**
     * {@inheritdoc}
     */
    public function __construct() {
        $this->name = 'Base Abstract Cat';
    }
}
