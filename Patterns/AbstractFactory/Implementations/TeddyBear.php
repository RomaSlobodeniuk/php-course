<?php

namespace Implementations;

use Implementations\BaseClasses\AbstractBear;

/**
 * Class TeddyBear
 * @package Implementations
 */
class TeddyBear extends AbstractBear
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();
        $this->name = 'Teddy Bear';
    }
}
