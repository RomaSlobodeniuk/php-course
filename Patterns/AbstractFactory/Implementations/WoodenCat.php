<?php

namespace Implementations;

use Implementations\BaseClasses\AbstractCat;

/**
 * Class WoodenCat
 * @package Implementations
 */
class WoodenCat extends AbstractCat
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();
        $this->name = 'Wooden Cat';
    }
}
