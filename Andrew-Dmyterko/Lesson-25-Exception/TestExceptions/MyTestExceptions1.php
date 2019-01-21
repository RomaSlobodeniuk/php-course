<?php

namespace TestExceptions;

class MyTestExceptions1 extends \Exception
{
    public function __toString()
    {
        return '__toString() !!MyTestExceptions1 ' . $this->getMessage() . ' ' . $this->getCode() . ' ' . $this->getFile() . ' ' . $this->getLine();
    }

}