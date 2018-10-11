<?php

$text = file_get_contents('./text.txt');

$array = ['in', 'for', 'from', 'new'];

$newArray = [];
foreach ($array as $value) {
    $newArray[$value] = substr_count($text, $value);
}

debug($array);
debug($newArray);