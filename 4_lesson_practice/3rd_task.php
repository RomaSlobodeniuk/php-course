<?php

require_once '../helpers/functions.php';

/**
 * Створіть масив з довільних чисел. Знайдіть найменше і найбільше значення. Виведіть їх.
 * Після цього знайдіть і виведіть числа, що повторюються, а також їхню кількість (1 - 4; 2 - 19; 38 - 3...).
 */

$random = [];
for ($i = 0; $i < 50; $i++) {
    $random[] = rand(1, 50);
}

debug($random);

$min = 0;
$max = 0;
$i = 1;
foreach ($random as $value) {
    $min = $i === 1 || $min > $value ? $value : $min;
    $max = $max < $value ? $value : $max;
    $i++;
}

debug("min = $min");
debug("max = $max");

$newArray = [];
foreach ($random as $value) {
    $newArray[$value] = empty($newArray[$value]) ? 1 : $newArray[$value] + 1;
}

debug($newArray);
