<?php

require_once '../helpers/functions.php';


$file = 'person.txt'; // файл в який хочемо додати запис
$myName = 'Roman';
$mySurname = 'Slobodeniuk';
$myFullName = $myName . ' ' . $mySurname . "\n";
file_put_contents($file, $myFullName);

$file = 'person.txt'; // файл в який хочемо додати запис
$person = ["Igor Kuznetsov\n", "Olya Pavlova\n"];
// Записуємо вміст у файл, використовуючи прапорець FILE_APPEND для дописування в кінець файлу
// і прапорець LOCK_EX для запобігання запису даного файлу ким-небудь іншим в даний час
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);