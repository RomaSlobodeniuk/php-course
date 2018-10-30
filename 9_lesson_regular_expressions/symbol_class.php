<?php

require_once '../helpers/functions.php';

/**
 * '/pattern/i'
 */

$greeting = 'Happy 2018 Year!';
$pattern = '/([^a-z\s]{1,4})/i';
preg_match($pattern, $greeting, $matches);
debug([
    'input_string' => $greeting,
    'pattern' => $pattern,
    'matches' => $matches
]);