<?php

require_once '../helpers/functions.php';


function mySimpleFunction(&$argument) {
    $argument += $argument;
    return $argument;
}

$param = 3;
debug("initially a 'param' was equal '$param'");
$newParam = mySimpleFunction($param);
debug("now the 'param' is equal '$param'");
debug("a 'newParam' is also equal '$newParam'");
echo '<hr>';

function myFunction($argument1, $argument2 = false) {
    if ($argument2) {
        debug("first argument = $argument1");
        debug("second argument = $argument2");
    } else {
        debug("only first argument is present and it's equal '$argument1'");
    }
}

myFunction("first param", "I'm the second param");
echo '<hr>';

myFunction("first param");
echo '<hr>';


function myDotsFunction(...$arguments) {
    echo "<pre>";
    var_dump($arguments);
    echo "</pre>";
}

myDotsFunction("first param", true);
echo '<hr>';


function myReturnExample1(string $argument1, string $argument2): string {
    return $argument1 . ' ' . $argument2; //string
}

echo myReturnExample1('May the Force', 'be with you!');
echo '<hr>';

function myReturnExample2(int $argument1, array $argument2): int {
    $sum = array_sum($argument2);
    return $argument1 + $sum; //int
}

echo "Your total sum is equal to " . myReturnExample2(1000, [789, 2]);
echo '<hr>';

$variableA = "myNewFunction";
function myNewFunction() {
    return 100;
}

echo $variableA(); // 100
echo '<hr>';
echo myNewFunction();  // 100
echo '<hr>';


$variableB = function($arg) {
    return $arg;
};

echo $variableB(112); // 112
echo '<hr>';

function factorial($x) {
    if ($x === 0) {
        return 1;
    } else  {
        return $x * factorial($x - 1) ;
    }
}
echo "The factorial of 7 is equal to " . factorial(7); // 5040

