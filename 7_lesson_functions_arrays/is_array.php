<?php

require_once '../helpers/functions.php';

$integerVariable = 227;
$arrayVariable = ['string', 111, NULL];

$isArrayFirst = is_array($integerVariable) ? 'true' : 'false';
$isArraySecond = is_array($arrayVariable) ? 'true' : 'false';

echo 'Is $arrayVariable has an array type? - answer: ' . $isArraySecond; // true
echo '<br>';
echo 'Is $integerVariable has the array type? - answer: ' . $isArrayFirst; // false