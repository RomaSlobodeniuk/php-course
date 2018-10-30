<?php

/*$str = 'Да? Да!!! Да-да-да.';
$regexp = '/[.!?]/u';
$parts = preg_split($regexp, $str, 0, PREG_SPLIT_NO_EMPTY);
var_dump($parts);*/

/*$str1 = 'fsd.af@inbox.ru';

$regexp = '/^[^\.#@\?!&]([a-z.]){1,19}@[a-z]{1,10}\.[a-z]{1,3}$/';

$result = preg_match($regexp, $str1);

if ($result) {
//    var_export($result);
    echo '<br />';
    echo 'Вы ввели правильный email';
} else {
    echo 'Введите пожалуйста правильный email';
}*/

/*$arr = [1, 2, 5, 3, 3, 4, 1, 7];

$uniq_array = [];

foreach ($arr as $value) {
    if (!in_array($value, $uniq_array)) {
        $uniq_array[] = $value;
        echo $value . "\n";
    } else {
        $uniq_array[] = false;
    }
}*/

/*$arr = [];

$value = 2;

for ($i = 0; $i <= $value; $i++) {
    for ($j = 0; $j <= $value; $j++) {
        for ($a = 0; $a <= $value; $a++) {
            $arr[$i][$j][$a] = rand(1, 5);
        }
    }
}

var_dump($arr);
echo '<br />';

function printArray($arr) {
    foreach ($arr as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            foreach ($value2 as $key3 => $value3) {
//                echo $value3 . "\n";
                echo $arr[$key1][$key2][$key3] . "\n";
            }
            echo '<br />';
        }
        echo '<br />';
    }
}

printArray($arr);*/


/*function summ($arr) {
    foreach ($arr as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            foreach ($value2 as $key3 => $value3) {
                if ($key3 === 0) {echo $value3;}
                if ($key3 > 0) {echo ' + ' . $value3;}
            }
            echo '<br />';
        }
        echo '<br />';
    }
}

summ($arr);*/

//echo "1";

require_once