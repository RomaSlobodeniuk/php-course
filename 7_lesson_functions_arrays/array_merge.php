<?php

require_once '../helpers/functions.php';

$firstArray = [ 0 => 'telegram', 1 => 'slack', 2 => 'skype', 3 => 'viber' ];
$secondArray = [ 'key_1' => 'chrome', 'key_2' => 'phpstorm', 'key_3' => 'xampp' ];

$programsArray = array_merge($firstArray, $secondArray);
debug($programsArray);

/**
 * Array
 * (
 *     [0] => telegram
 *     [1] => slack
 *     [2] => skype
 *     [3] => viber
 *     [key_1] => chrome
 *     [key_2] => phpstorm
 *     [key_3] => xampp
 * )
 */