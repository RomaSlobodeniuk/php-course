<?php

class DebugInfoTest
{
    private $prop;

    public function __construct($val)
    {
        $this->prop = $val;
    }

    public function __debugInfo()
    {
        return [
            'prop (private)' => $this->prop,
            'propSquared' => $this->prop ** 2,
        ];
    }
}

var_dump(new DebugInfoTest(11));
