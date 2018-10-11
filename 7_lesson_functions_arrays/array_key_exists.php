<?php

require_once '../helpers/functions.php';

$sampleArray = [
    'bingo' => '100000$',
    'fail' => '0$',
    'third' => 'something else'
];

debug($sampleArray);
echo '<hr>';

$isKeyExistsFirst = array_key_exists('bingo', $sampleArray) ? 'true' : 'false';
$isKeyExistsSecond = array_key_exists('frustration', $sampleArray) ? 'true' : 'false';

echo 'Is key "bingo" exist in array? - answer: ' . $isKeyExistsFirst; // true
echo '<br>';
echo 'Is key "frustration" exist in array? - answer: ' . $isKeyExistsSecond; // false