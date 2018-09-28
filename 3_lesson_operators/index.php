<?php

$assertion = 'Земля плоска';

if ($assertion === 'Земля кругла') {
    echo 'правда' . "<br>"; // виконується ця частина коду
} elseif ($assertion === 'Земля плоска') {
    echo 'неправда' . "<br>"; // iнакше виконається цей код
} else {
    echo 'інше...' . "<br>"; // у всіх інших випадках
}



$truth1 = $assertion <> 'Земля кругла';

$truth2 = $assertion <= 'Земля кругла' ? 'Правда' : 'ok';

$truth3 = $assertion != 'Земля кругла' ?? false;


function debug($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$a = 10;
$b = null;

switch ($a) {
    case 5:
    case 3:
    case $a > 8:
        $b = $a + 1;
        echo $b;
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

echo "a=$a, b=$b" . "<br>";


$array = [
    0 => [
        0 => 1,
        'kd' => 2,
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


for ($i = 0; $i < count($array); $i++) {
    echo "<pre>";
    print_r($array[$i]);
    echo "</pre>";

    for ($y = 0; $y < count($array[$i]); $y++) {
        echo "<pre>";
        echo $array[$i][$y];
        echo "</pre>";
    }

    echo "<br>";
}


while ($var !== 0) {
    echo 'var = ' . $var . "<br>";
    $var--;
}


$var = 10;
do {
    $var += $var;
} while ($var <= 399);


$fruits = [
    'key_1' => 'яблуко',
    'key_2' => 'банан',
    'key_3' => 'виноград'
];

foreach ($fruits as $key => $value) {
    echo "елемент $key - $value" . "<br>";
}

$time = 10;
while ($time > 1) {
    $time = $time - 1;
    if ($time == 5) {
        break;
    }

    echo $time . "<br>";
}

echo '<hr>';

for ($i = 0; $i < 5; ++$i) {
    if ($i == 2) {
        continue;
    }

    print "$i<br>";
}
echo "<hr>";

global $_B;

$b = 999;

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

$arr = ['item'];
foreach ($arr as $key => $value):
    echo $value;
endforeach;


while ($a == 5):
    echo $a;
endwhile;

require_once 'alternative.php';