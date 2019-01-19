<?php

namespace MyExceptions;

class DivisionByZeroException extends \Exception
{
    public function __toString()
    {
        return 'Division By Zero! ' . $this->getMessage();
    }
}