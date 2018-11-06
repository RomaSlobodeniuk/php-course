<?php
    echo "Hello Lesson_06 <br />";
    echo "<br />";

    $inetPage=file_get_contents("http://127.0.0.1/");
    file_put_contents("newFile.php",$inetPage);
    echo "Создано новый файл newFile.php";

echo "<br />";
?>

