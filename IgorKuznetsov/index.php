<?php

$str = file_get_contents('./text.txt');

$searchSubStr = ['of', 'in', 'new', 'from', 'this', 'rail', 'splitter'];

function strAllPositions($haystack, $needle) {
    $offset = 0;
    $allpos = [];
    while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        $offset = $pos + strlen($needle);
        $allpos[] = $pos;
    }
    return $allpos;
}
?>