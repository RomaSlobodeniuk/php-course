<?php
$filePath = 'text.txt';

/*$name = 'Igor';
$surname = 'Kuznetsov';
$myFullName = $name . " " . $surname . "\n";

$content = file_put_contents('text.txt', $myFullName);

$persons = ["Olya Pavlova\n", "Roma Slobodenyuk\n"];

file_put_contents($filePath, $persons);


$persons1 = ["Olya Pavlova1\n", "Roma Slobodenyuk1\n"];

file_put_contents($filePath, $persons1, FILE_APPEND | LOCK_EX);*/

$persons2 = "asdf asdf<br />asdfn asdfn<br />";

$handle = fopen($filePath, 'ab');
fwrite($handle, $persons2);
fclose($handle);

$handle = fopen($filePath, 'rt');
$fileName = $filePath;
$contents = fread($handle, filesize($fileName));
fclose($handle);
print_r($contents)  ;
