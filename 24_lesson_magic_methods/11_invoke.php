<?php

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}


$instance = new CallableClass;
$instance(5);
var_dump(is_callable($instance));
