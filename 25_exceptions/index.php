<?php

use MyExceptions\DivisionByZeroException;

spl_autoload_register(function ($class) {
    $file_name = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file does not exist!";
    }
});


try {
    $i = 0;
    $y = 13;
    if (!$i) {
//        throw new DivisionByZeroException('$i = ' . $i);
    }

    echo 'result = ' .  ($y/$i);
} catch (DivisionByZeroException $exception) {
    echo $exception;
}

