<?php
require_once '../helpers/functions.php';
$i=2000;

while ($i>0) {
    $rand_sum=rand(1,2000);
    if($rand_sum<=$i){
        debug('Current balance is '.$i) ;
        $i -= $rand_sum;
        debug('The sum of the purchase is '.$rand_sum) ;
        debug( 'Current balance after purchase is '.$i);
    } else {
        debug( 'Current sum is not enough for the purchase');
        debug('Current balance is '.$i) ;
        debug('The sum of the purchase is '.$rand_sum) ;
        break;
    }

    echo '<hr>';
}


/*
$i=2000;
$s=$i-rand(1,2000);
$i-=$s;
echo $s;
echo '<br/>';
echo $i;
*/