<?php

require_once '../helpers/functions.php';

$arrayForSearch = [
    0 => 'telegram',
    1 => 'slack',
    2 => 'skype',
    3 => '3'
];

debug($arrayForSearch);
echo '<hr>';

$resultFirst = array_search('slack', $arrayForSearch);
$resultSecond = array_search('viber', $arrayForSearch);
$resultThird = array_search(3, $arrayForSearch);
$resultFourth = array_search(3, $arrayForSearch, true);

echo 'Found key by searching value "slack": ' . $resultFirst; // 1
echo '<br>';
echo 'Found key by searching value "viber": ' . (is_bool($resultSecond) ? (!$resultSecond ? 'false' : ""): $resultSecond); // false
echo '<br>';
echo 'Found key by searching value "3" (type int): ' . $resultThird; // 3
echo '<br>';
echo 'Found key by searching value "3" (type string), using strict mode: ' . (is_bool($resultFourth) ? (!$resultFourth ? 'false' : ""): $resultFourth); // false