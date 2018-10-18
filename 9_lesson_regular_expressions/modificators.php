<?php

require_once '../helpers/functions.php';

/**
 * '/pattern/i'
 */

$input = 'Focus on valuable things first...';
$pattern = '/([a-z]+)/';
preg_match($pattern, $input, $matches);
debug([
    'input_string' => $input,
    'pattern' => $pattern,
    'matches' => $matches
]);