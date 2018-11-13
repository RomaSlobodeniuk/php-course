<?php

require_once '../helpers/functions.php';

/**
 * '/pattern/i'
 */

$greeting = 'Happy 201098 Year!';
$pattern = '/\s([1][9][\d]{1,2}|[2][0][\d]{1,2})/i';
preg_match($pattern, $greeting, $matches);
debug([
    'input_string' => $greeting,
    'pattern' => $pattern,
    'matches' => $matches
]);