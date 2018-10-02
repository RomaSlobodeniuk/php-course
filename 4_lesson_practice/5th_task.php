<?php

require_once '../helpers/functions.php';

/**
 * Створіть масив з назвами усіх місяців року. Використовуючи цикл або цикл з switch-case виведіть номер місяця і його назву.
 */

$months = [
    'Січень',
    'Лютий',
    'Березень',
    'Квітень',
    'Травень',
    'Червень',
    'Липень',
    'Серпень',
    'Вересень',
    'Жовтень',
    'Листопад',
    'Грудень'
];

foreach ($months as $index => $month) {
    $number = $index + 1;
    debug("$number - $month");
}

echo '<hr>';

for ($i = 1; $i < 13; $i++) {
    switch ($i) {
        case 1:
            debug("$i - January");
            break;
        case 2:
            debug("$i - February");
            break;
        case 3:
            debug("$i - March");
            break;
        case 4:
            debug("$i - April");
            break;
        case 5:
            debug("$i - May");
            break;
        case 6:
            debug("$i - June");
            break;
        case 7:
            debug("$i - July");
            break;
        case 8:
            debug("$i - August");
            break;
        case 9:
            debug("$i - September");
            break;
        case 10:
            debug("$i - October");
            break;
        case 11:
            debug("$i - November");
            break;
        case 12:
            debug("$i - December");
            break;
    }
}

