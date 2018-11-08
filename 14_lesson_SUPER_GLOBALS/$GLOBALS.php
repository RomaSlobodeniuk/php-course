<?php

require_once '../helpers/functions.php';

function test() {
    $variable = "Example of local variable";

    debug('$variable in global scope: ' . $GLOBALS["variable"]);
    debug('$variable in current scope of "test()" function: ' . $variable);
}

$variable = "Example global variable";
test();