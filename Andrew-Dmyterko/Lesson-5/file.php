<?php


$filename = "data.txt";

$resource = fopen($filename, "w"); // файла з іменем data.txt  не існує, тому він створюється
fwrite($resource, "1EEEEEEEE"); // тут записується "1" в новостворений файл
fwrite($resource, "23"); // тут дописується "23" в файл
fclose($resource); // закривається відкритий дескриптор файлу

$handle = fopen($filename, "r"); // відкривається новий дескриптор файлу
$contents = fread($handle, filesize($filename)); // дістається вміст файлу

echo $contents;
fclose($handle);

//echo dirname(".");

function qwe($arg) {

    echo $arg;

    return;
}

qwe("qqqq");

$googlePage = file_get_contents("www.google.com.ua/");
echo $googlePage;


?>