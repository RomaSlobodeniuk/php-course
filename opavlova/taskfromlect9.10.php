<?php
$filename = "data.txt";

$resource = fopen($filename, "w");
fwrite($resource,"Андрій Дмитрук\nМаксим Іванюк\nМикола Коваль\nАндрій Дуб\nОля Павлова\nСергій Ліщук\nІгор Кроль\nДмитро Мельник");
fclose($resource);

//$handle = fopen($filename, "r");
//$contents = fread($handle, filesize($filename));
$students = file_get_contents('./data.txt', true);
$studentsArray = explode("\n", $students);
print_r($studentsArray);

//fclose($resource);

?>