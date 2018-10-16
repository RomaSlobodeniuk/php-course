<?php

require_once '../../helpers/functions.php';

$str = file_get_contents('./text.txt');
$str = trim($str, " \t\n\r\0\x0B");

function multiexplode($delimiters, $string) {
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$array = multiexplode(array(",", " ", "--", ".", "?", "!", "|", ":", "\"", "\n"), $str);

$_SESSION['array'] = $array;
$_SESSION['count_values'] = array_count_values($array);
$newArray = array_map('uniqValues', $array);
$uniqArray = array_unique($newArray);

function uniqValues($value) {
    if ($_SESSION['count_values'][$value] === 1) {
        return $value;
    } else {
        $_SESSION['count_values'][$value] -= 1;
        $value = '';
    }

    return $value;
}

$newArray = array_filter($newArray);

debug("count uniqArray: " . count(array_filter($uniqArray)));
debug(array_filter($uniqArray));
debug("count newArray: " . count($newArray));
debug($newArray);

if (array_filter($uniqArray) === $newArray) {
    debug("YEEEEEEEEEEEEEEEESSSSSSSSSSSSS!");
}


























?>