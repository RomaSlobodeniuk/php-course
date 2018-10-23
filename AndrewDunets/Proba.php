<?php

require_once '../helpers/functions.php';

$a = [
    ['Андрій', 'Дунець'],
    ['Вася', 'Пупкін'],
    ['Жора', 'Теплий'],
    ['Петро', 'Рудий'],
    ['Валентин', 'Журавлик']
];

debug($a);

for ($i = 4; $i >= 0; $i--) {
    $fullName = $a[$i][0] . ' ' . $a[$i][1];
    debug($fullName);
}
