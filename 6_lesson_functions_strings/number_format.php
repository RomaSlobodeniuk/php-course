<?php

require_once '../helpers/functions.php';

$number = 788893.03;
debug(number_format($number)); //788,893
echo '<hr>';
debug(number_format($number, 4)); //788,893.0300
echo '<hr>';
debug(number_format($number, 3, ".", " ")); //788 893.030