<?php
function showTree($folder, $space) {
    /* Получаем полный список файлов и каталогов внутри $folder */
    $files = scandir($folder);
    foreach($files as $file) {
        /* Отбрасываем текущий и родительский каталог */
        if (($file == '.') || ($file == '..')) continue;
        $f0 = $folder.'/'.$file; //Получаем полный путь к файлу
        /* Если это директория */
        if (is_dir($f0)) {
            /* Выводим, делая заданный отступ, название директории */
            echo $space.$file."<br />";
            /* С помощью рекурсии выводим содержимое полученной директории */
            showTree($f0, $space.'&nbsp;&nbsp;&nbsp;');
        }
        /* Если это файл, то просто выводим название файла */
        else echo $space.$file."<br />";
    }
}
/* Запускаем функцию для текущего каталога */
showTree($dir = "/var/www/html/", " ");


?>