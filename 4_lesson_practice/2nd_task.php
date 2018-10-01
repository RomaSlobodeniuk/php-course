<?php

require_once '../3_lesson_operators/functions.php';

/**
 * Напишіть програму, яка створює рядок, що містить решітку 8х8, в якій строки поділяються символами нового рядка.
 * На кожній позиції або пробіл, або #. У результаті повинна вийти шахова дошка.
 *
 * # # # #
 *  # # # #
 * # # # #
 *  # # # #
 * # # # #
 *  # # # #
 * # # # #
 *  # # # #
 *
 */

$grid = '#';
$space = "&nbsp";

$x = 100;
$y = 100;

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