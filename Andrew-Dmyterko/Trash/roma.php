<?php

$grid = '#';
$space = "&nbsp";
$x = 10;
$y = 10;
for ($i = 1; $i < $y; $i++) {
$reverse = $i % 2 === 0;
for ($a = 1; $a < $x; $a++) {
switch ($reverse) {
case true:
if ($a % 2 === 0) {
echo $grid;
} else {
echo $space;
}
break;
case false:
if ($a % 2 === 0) {
echo $space;
} else {
echo $grid;
}
break;
}
}
echo '<br>';
}