<?php

namespace TestExceptions {

    class MyTestExceptions extends \Exception
    {
        public function __toString()
        {
            return 'MY__toString() !!MyTestExceptions ' . $this->getMessage() . ' ' . $this->getCode() . ' ' . $this->getFile() . ' ' . $this->getLine();
        }
    }

//    class MyTestExceptions1 extends \Exception
//    {
//        public function __toString()
//        {
//            return '__toString() !!MyTestExceptions1 ' . $this->getMessage() . ' ' . $this->getCode() . ' ' . $this->getFile() . ' ' . $this->getLine();
//        }
//
//    }
}