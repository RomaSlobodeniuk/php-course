<?php

class MyClass
{
    function __construct() {
        echo "Конструктор<br>";
    }

    function __destruct() {
        echo "Знищується " . __CLASS__  . "<br>";
    }
}

$myClass = new MyClass();
unset($myClass);