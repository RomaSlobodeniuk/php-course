<?php

$arr = [];

for ($layer = 1; $layer <=3; $layer++) {

    for ($row = 1; $row <= 3; $row++) {

        for ($col = 1; $col <= 3; $col++) {
            $arr[$layer][$row][$col] = rand(1, 100);
        }
    }
}


for ($layer = 1; $layer <=3; $layer++) {

    for ($row = 1; $row <= 3; $row++) {

        for ($col = 1; $col <= 3; $col++) {
           echo $arr[$layer].''.$arr[$row].''.$arr[$col];
        }
    }
}
