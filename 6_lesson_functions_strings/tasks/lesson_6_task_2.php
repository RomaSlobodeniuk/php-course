<?php

/*$str = file_get_contents('./text.txt');

$searchSubStr = ['of', 'in', 'new', 'from', 'this', 'rail', 'splitter'];

function strAllPositions($haystack, $needle) {
    $offset = 0;
    $allpos = [];
    while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        $offset = $pos + strlen($needle);
        $allpos[] = $pos;
    }
    return $allpos;
}*/

$str = file_get_contents('./text.txt');

$str = trim($str, $character_mask = " \t\n\r\0\x0B");

function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$array = multiexplode(array(",", " ", "--", ".", "?", "!", "|", ":", "\"", "\n"), $str);

$newArray = array_map('uniqValues', $array);


function uniqValues($arr) {
    $someArray = [];
    foreach ($arr as $value) {
        if (!in_array($value, $someArray)) {
            $someArray[] = $value;
        }
    }

    return $someArray;
}


print_r($newArray);

/*$arr = array(2, 5, 5, 3 ,2, 1, 5, 7, 1);
$uniq_arr = array();
foreach ($arr AS $item) {
    if (!in_array($item, $uniq_arr)) {
        $uniq_arr[] = $item;
        echo $item . "\n";
    }
}*/


























?>