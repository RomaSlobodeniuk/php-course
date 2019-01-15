<?php

function inverse($x) {
    if (!$x) {
        throw new Exception('Ділення на нуль.');
    }

    return 1/$x;
}

try {
    echo inverse(5) . "<br>";
//    echo inverse(0) . "<br>";
    echo 'Після помилки!' . "<br>";
} catch (\Exception $e) {
    echo 'Викинуто виключення: ',  $e->getMessage(), "<br>";
} finally {
    echo 'Виконався блок finally' . '<br>';
}

/**
 * Продовження виконання програми
 */
echo "Привіт, світ!<br>";
