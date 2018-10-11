<?php

require_once '../helpers/functions.php';

$array = [ 0 => 'telegram', 1 => 'slack', 2 => 'skype', 3 => 'viber' ];
debug($array);

$flipArray = array_flip($array);
debug($flipArray);
