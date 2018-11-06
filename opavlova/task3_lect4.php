<?php
require_once '../helpers/functions.php';

for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}
debug($arr);
debug('max digit is '.max($arr)) ;
debug('min digit is '.min($arr));
$newArray=array_count_values($arr);

debug($newArray);


?>