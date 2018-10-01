<?php

require_once '../helpers/functions.php';

$assertion = 'Земля плоска';
debug('IF-ELSEIF-ELSE:');
if ($assertion === 'Земля кругла') {
    debug('правда'); // виконується ця частина коду
} elseif ($assertion === 'Земля плоска') {
    debug('неправда'); // iнакше виконається цей код
} else {
    debug('інше...'); // у всіх інших випадках
}

echo '<hr>';

$truth1 = $assertion <> 'Земля кругла';
$truth2 = $assertion <= 'Земля кругла' ? 'Правда' : 'ok';
$truth3 = $assertion != 'Земля кругла' ?? false;

$a = 10;
$b = null;
switch ($a) {
    case 5:
    case 3:
    case $a > 8:
        $b = $a + 1;
        break;
    case 10:
        $b = $a * 2;
        break;
    case 15:
        $b = $a - 3;
        break;
    default:
        $b = $a;
}

debug('SWITCH-CASE:');
debug("a = $a, b = $b");

echo '<hr>';

$array = [
    0 => [
        0 => 1,
        1 => 2,
        2 => 3
    ],
    1 => [
        0 => 'yyy',
        1 => 'xxx',
        2 => 'zzz'
    ],
    2 => [
        'NYC',
        'Kyiv',
        'Khmelnytskyi'
    ]
];
debug('FOR-FOR:');
for ($i = 0; $i < count($array); $i++) {
    debug($array[$i]);
    for ($y = 0; $y < count($array[$i]); $y++) {
        debug($array[$i][$y]);
    }
}

echo '<hr>';

$var = 5;
debug('WHILE:');
while ($var !== 0) {
    debug("var = $var");
    $var--;
}

echo '<hr>';

$var = 100;
debug('DO-WHILE:');
do {
    $var += $var;
    debug($var);
} while ($var <= 300);

echo '<hr>';

$fruits = [
    'key_1' => 'яблуко',
    'key_2' => 'банан',
    'key_3' => 'виноград'
];
debug('FOREACH:');
foreach ($fruits as $key => $value) {
    debug("елемент $key - $value");
}

echo '<hr>';

$time = 10;
debug('BREAK:');
while ($time > 1) {
    $time = $time - 1;
    if ($time == 5) {
        break;
    }

    debug($time);
}

echo '<hr>';

debug('CONTINUE:');
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2) {
        continue;
    }

    debug($i);
}

echo "<hr>";

$b = 999;
debug('FUNCTION:');
function myCustomFunction($parameter) {
    $parameter = $parameter - 1;
    return $parameter;
}

debug("b = $b");
$result = myCustomFunction($b);
debug("result = $result") ;
debug("b = $b") ;

echo "<hr>";

$a = 0;
debug('ALTERNATIVE-IF-ELSEIF-ELSE:');
if ($a == 5):
    debug("a рівне 5");
    debug("...");
elseif ($a == 6):
    debug("a рівне 6");
    debug("!!!");
else:
    debug("a не рівне ні 5 ні 6");
endif;

echo "<hr>";

$arr = ['item'];
debug('ALTERNATIVE-FOREACH:');
foreach ($arr as $key => $value):
    debug($value);
endforeach;

echo "<hr>";

debug('ALTERNATIVE-FOREACH:');
$a = 1;
while ($a != 5):
    debug($a);
    $a++;
endwhile;

echo "<hr>";

require_once 'alternative.php';