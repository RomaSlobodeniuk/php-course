<?php

require_once '../helpers/functions.php';

$array = [ 'fruit' => 'orange', 'project' => 'spaceX', 'technology' => 'PHP' ];

while ($value = current($array)) {
    if ($value == 'spaceX') {
        echo key($array) . '<br>';
    }

    next($array);
}
