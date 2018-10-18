<?php

require_once '../helpers/functions.php';

$array = [ 'orange', 'project', 'spaceX', 'technology', 'PHP' ];
debug($array);

array_push($array, [1, 2, 3]);
debug($array);

$lastValue = array_pop($array);
debug($array);
debug("last value is: ");
debug($lastValue);