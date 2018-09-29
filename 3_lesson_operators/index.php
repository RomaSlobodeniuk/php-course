<?php

require_once 'functions.php';

$assertion = 'Земля плоска';
echo 'IF-ELSEIF-ELSE:';
echo '<br>';
if ($assertion === 'Земля кругла') {
    echo 'правда' . "<br>"; // виконується ця частина коду
} elseif ($assertion === 'Земля плоска') {
    echo 'неправда' . "<br>"; // iнакше виконається цей код
} else {
    echo 'інше...' . "<br>"; // у всіх інших випадках
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

echo 'SWITCH-CASE:';
echo '<br>';
echo "a=$a, b=$b" . "<br>";

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
echo 'FOR-FOR:';
echo '<br>';
for ($i = 0; $i < count($array); $i++) {
    debug($array[$i]);
    for ($y = 0; $y < count($array[$i]); $y++) {
        debug($array[$i][$y]);
    }

    echo "<br>";
}

echo '<hr>';

$var = 5;
echo 'WHILE:';
echo '<br>';
while ($var !== 0) {
    echo 'var = ' . $var . "<br>";
    $var--;
}

echo '<hr>';

$var = 100;
echo 'DO-WHILE:';
echo '<br>';
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
echo 'FOREACH:';
echo '<br>';
foreach ($fruits as $key => $value) {
    echo "елемент $key - $value" . "<br>";
}

echo '<hr>';

$time = 10;
echo 'BREAK:';
echo '<br>';
while ($time > 1) {
    $time = $time - 1;
    if ($time == 5) {
        break;
    }

    echo $time . "<br>";
}

echo '<hr>';

echo 'CONTINUE:';
echo '<br>';
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2) {
        continue;
    }

    print "$i<br>";
}

echo "<hr>";

$b = 999;
echo 'FUNCTION:';
echo '<br>';
function myCustomFunction($parameter) {
    $parameter = $parameter - 1;
    return $parameter;
}

echo '$b = ' . $b;
echo "<hr>";
$result = myCustomFunction($b);
echo '$result = ' . $result;
echo "<br>";
echo '$b = ' . $b;
echo "<br>";

echo "<hr>";

$a = 0;
echo 'ALTERNATIVE-IF-ELSEIF-ELSE:';
echo '<br>';
if ($a == 5):
    echo "a рівне 5";
    echo "...";
    echo "<br>";
elseif ($a == 6):
    echo "a рівне 6";
    echo "!!!";
    echo "<br>";
else:
    echo "a не рівне ні 5 ні 6";
    echo "<br>";
endif;

echo "<hr>";

$arr = ['item'];
echo 'ALTERNATIVE-FOREACH:';
echo '<br>';
foreach ($arr as $key => $value):
    echo $value;
endforeach;

echo "<hr>";

echo 'ALTERNATIVE-FOREACH:';
echo '<br>';
$a = 1;
while ($a != 5):
    debug($a);
    $a++;
endwhile;

echo "<hr>";

require_once 'alternative.php';