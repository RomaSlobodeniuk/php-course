<?php

require_once '../helpers/functions.php';

$IP = '127.0.0.1';
debug(explode('.', $IP)); // array(0=>127, 1=>0, 2=>0, 3=>1)

echo '<hr>';

$students = 'Андрій, Максим, Микола, Андрій, Оля, Сергій, Ігор, Дмитро';
$studentsArray = explode(',', $students);
debug($studentsArray);