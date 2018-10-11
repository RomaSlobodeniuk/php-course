<?php

require_once '../helpers/functions.php';

$array = [ 'orange', 'project', 'spaceX', 'PHP', 'technology' ];
debug($array);

debug(array_map('filter', $array));
function filter($value) {
    if ($value == 'PHP') {
        return 'I like ' . $value;
    }

    return $value;
}
