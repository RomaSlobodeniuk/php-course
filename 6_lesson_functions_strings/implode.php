<?php

require_once '../helpers/functions.php';

$colors = [
    'red',
    'green',
    'blue'
];

$colorsInString = implode(' & ', $colors);
debug($colors);
debug($colorsInString . ' => RGB'); //red & green & blue => RGB