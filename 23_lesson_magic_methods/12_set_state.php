<?php

class SetStateTest
{
    public $var1;
    public $var2;

    public static function __set_state($anArray) // З PHP 5.1.0
    {
        $obj = new SetStateTest;
        $obj->var1 = $anArray['var1'];
        $obj->var2 = $anArray['var2'];
        return $obj;
    }
}

$object = new SetStateTest;
$object->var1 = 5;
$object->var2 = 'value of var2';

eval('$b = ' . var_export($object, true) . ';');
// $b = A::__set_state(array(
//    'var1' => 5,
//    'var2' => 'foo',
// ));
var_dump($b);