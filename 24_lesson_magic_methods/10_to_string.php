<?php

class TestToString
{
    public $variable;

    public function __construct($variable)
    {
        $this->variable = $variable;
    }

    public function __toString()
    {
        return $this->variable;
    }
}

$class = new TestToString('Привіт!');
echo $class;
