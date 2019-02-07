<?php

namespace Implementations;

use Implementations\BaseClasses\AbstractBear;

/**
 * Class WoodenBear
 * @package Implementations
 */
class WoodenBear extends AbstractBear
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();
        $this->name = 'Wooden Bear';
    }
}
