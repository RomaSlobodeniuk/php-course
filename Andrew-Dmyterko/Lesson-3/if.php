<?php

// Условные операторы разбор


echo "<title>if.php</title>";

$assertion = "Земля плоская";

if ($assertion === "Земля круглая" ) {
    echo "Земля круглая<br>";
} elseif ($assertion === "Земля квадратная") {
    echo "Земля квадратная<br>";
} elseif ($assertion === "Земля плоская") {
    echo "Земля плоская<br>";
} else {
    echo "Земля другая<br>";
}

echo "<br><hr><br>";

$assertion = "Земля плоская11";
if ($assertion === "Земля круглая1" ) {
    echo "Земля круглая1<br>";
}
elseif ($assertion === "Земля квадратная1") {
    echo "Земля квадратная1<br>";
}
elseif ($assertion === "Земля плоская1") {
    echo "Земля плоская1<br>";
}
else {
    echo "Земля другая1<br>";
}

echo "<br><hr><br>";

$assertion = 'Земля круглая';

$truth1 = $assertion === 'Земля круглая';
echo "$truth1<br>";

$truth2 = $assertion === 'Земля круглая' ? true : false;
echo "$truth2<br>";

$truth3 = $assertion === 'Земля круглая' ?? false; //??????????
echo "$truth3<br>";

echo "<br><hr><br>";

$a = 10;
$b = null;

switch ($a) {
    case 5:
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

echo "a=$a, b=$b<br>";

echo "<br><hr><br>";

$var = 123;

for ($i = 0; $i < $var; $i++) {
    echo $var--," ";
}

echo "<br><hr><br>";

while ($var !== 0) {
    echo '$var = '.$var;
    $var--;
}

echo "<br><hr><br>";

$var = 1;
do {
    $var += $var;
    echo "$var ";
} while ($var <= 399);

echo "<br><hr><br>";

$fruits = ['яблоко', 'банан', 'виноград'];

foreach ($fruits as $value) {
    echo "фрукт - $value <br>";
}

foreach ($fruits as $index => $value) {
    echo "елемент $index - $value<br>";
}

echo "<br><hr><br>";

$time = 10;
while ($time > 1) {
    $time = $time - 1;
    if ($time == 5) {
        break;
    }
    echo $time . "<br>";
}

echo "<br><hr><br>";

for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue;
    print "$i". "<br>";
}

echo "<br><hr><br>";

$b = 999;

function myCustomFunction($parameter) {
    $parameter = $parameter - 1;
    return $parameter;
}

echo '$b = '. $b;
echo "<hr>";
$result = myCustomFunction($b);
echo '$result = '. $result;
echo "<br>";
echo '$b = ' . $b;
echo "<br>";

echo "<br><hr><br>";

$b = 999;

function myCustomFunction1(&$parameter) {
    $parameter = $parameter - 1;
    return $parameter;
}

echo '$b = '. $b;
echo "<hr>";
$result = myCustomFunction1($b);
echo '$result = '. $result;
echo "<br>";
echo '$b = ' . $b;
echo "<br>";


echo "<br><hr><br>";

$a = 7;

if ($a == 5):
    echo "a равно 5";
    echo "...";
    echo "<br>";
elseif ($a == 6):
    echo "a равно 6";
    echo "!!!";
    echo "<br>";
elseif ($a == 7):
    echo "a равно 7";
    echo "!!!";
    echo "<br>";
else:
    echo "a не равно ни 5 ни 6 ни 7";
    echo "<br>";
endif;

echo "<br><hr><br>";




?>