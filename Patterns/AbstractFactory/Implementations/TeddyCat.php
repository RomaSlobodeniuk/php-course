<?php

namespace Implementations;

use Implementations\BaseClasses\AbstractCat;

/**
 * Class TeddyCat
 * @package Implementations
 */
class TeddyCat extends AbstractCat
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();
        $this->name = 'Teddy Cat';
    }
}
