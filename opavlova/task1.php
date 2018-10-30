<?php
//--------------------------------------numbers--------------------------------------------


for ($i = 1; $i <= 1000; $i++) {

    if ($i % 3 == 0) {
        echo ' ' . 'alpha'; //else echo ' ' . $i;
    }
    if (($i % 5 == 0) && ($i % 3 != 0)) {
        echo ' ' . 'beta'; //else echo ' ' . $i;
    }
    if (($i % 5 == 0) && ($i % 3 == 0)) {
        echo ' ' . 'alpha&beta';
    }

    else echo ' ' . $i;
    echo '<br/>';
}
?>