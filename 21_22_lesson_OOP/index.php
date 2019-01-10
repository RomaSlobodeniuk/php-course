<?php

use MyClasses\Calculator;

spl_autoload_register(function ($class) {
    $file_name = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file does not exist!";
    }
});

//require_once 'MyClasses/Calculator.php';

$calc = new Calculator(1, 2, 1);

echo $calc->getResult();