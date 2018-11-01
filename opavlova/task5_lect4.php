<?php
$months = [
    '1' => 'January',
    '2' => 'February',
    '3' => 'March',
    '4' => 'April',
    '5' => 'May',
    '6' => 'June',
    '7' => 'July',
    '8' => 'August',
    '9' => 'September',
    '10'=>'October',
    '11'=>'November',
    '12'=>'December'
];
/*foreach ($months as $index =>$value) {
    echo "$index-$value"."<br>";*/
for ($i=1; $i<count($months); $i++) {
     echo $months[$i];
    echo '<br/>';
}

