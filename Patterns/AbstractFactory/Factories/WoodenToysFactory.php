<?php

namespace Factories;

use Api\IToyFactory;
use Implementations\WoodenBear;
use Implementations\WoodenCat;

/**
 * конкретна фабрика (concrete factory)
 */
class WoodenToysFactory implements IToyFactory
{
    /**
     * {@inheritdoc}
     */
    public function getBear()
    {
        return new WoodenBear();
    }

    /**
     * {@inheritdoc}
     */
    public function getCat()
    {
        return new WoodenCat();
    }
}
