<?php

require_once '../helpers/functions.php';


// Зчитуємо 14 символів, починаючи з 27-го
$section = file_get_contents('./people.txt', NULL, NULL, 27, 14);
echo($section);