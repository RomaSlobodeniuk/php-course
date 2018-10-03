<?php

// дістаємо вміст файлу і записуємо в змінну (тип - строка)
$filename = "/opt/lampp/htdocs/5_lesson_functions/person.txt";
// $filenameWindows = "c:\\files\\somepic.gif";
$handle = fopen($filename, "r");
// $handleWindows = fopen($filenameWindows, "rb");
$contents = fread($handle, filesize($filename));
fclose($handle);
echo $contents;
