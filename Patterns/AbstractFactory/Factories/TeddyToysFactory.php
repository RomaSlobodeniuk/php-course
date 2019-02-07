<?php

namespace Factories;

use Api\IToyFactory;
use Implementations\TeddyBear;
use Implementations\TeddyCat;

/**
 * конкретна фабрика (concrete factory)
 */
class TeddyToysFactory implements IToyFactory
{
    /**
     * {@inheritdoc}
     */
    public function getBear()
    {
        return new TeddyBear();
    }

    /**
     * {@inheritdoc}
     */
    public function getCat()
    {
        return new TeddyCat();
    }
}
