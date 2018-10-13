<?php
/**
 * Задание по файлам
 * от Ромы
 */
/**
 * Пишем в файл чтото несколько раз
 */


// параметры что писать и сколько раз
function file_count(string $str, int $count) {

    $filename = "./data_fff.txt";

    $resource = fopen($filename, "w"); // файла з іменем data.txt  не існує, тому він створюється

    while ($count) {

        fwrite($resource, $str); // тут записується в новостворений файл
        $count--;

    }

    fclose($resource);
}


file_count("Тест", 15);




?>