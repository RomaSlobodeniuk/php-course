<?php

$grid = '#';
$space = "&nbsp";
for ($i = 0; $i < 4; $i++) {
    printTwoLines($grid, $space);
}

function printTwoLines($grid, $space) {
    for ($i = 8; $i > 0; $i--) {
        if ($i % 2 === 0) {
            echo $grid;
        } else {
            echo $space;
        }
    }

    echo '<br>';

    for ($i = 8; $i > 0; $i--) {
        if ($i % 2 === 0) {
            echo $space;
        } else {
            echo $grid;
        }
    }

    echo '<br>';
}
