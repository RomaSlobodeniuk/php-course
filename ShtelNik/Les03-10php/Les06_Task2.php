<?php
    echo "Hello Lesson_06 <br />";
    echo "<br />";
/*
$inetPage=file_get_contents("http://127.0.0.1/");
file_put_contents("newFile.php",$inetPage);
echo "Создано новый файл newFile.php";
*/

// Lesson_06 Task2
echo "Lesson_06 Task2","<br>";
echo "Взять текст из готового текстового файла,","<br>";
echo "посчитать количество ключевых слов","<br>";
echo "Вывести результат","<br>","<br>";

echo "solution Task2","<br>";
//из файла text_f.Les06.txt копируем текст в переменную $zTxt
echo "из файла text_f.Les06.txt копируем текст в переменную и выведем его","<br>";
echo "<br>";
$zTxt = file_get_contents("text_f.Les06.txt");
echo $zTxt,"<br>";
//создаем массив с нужными нам ключами, для каждого ключа счетчик =0
$ara = [
    "of" => 0,
    "in" => 0,
    "new" => 0,
    "from" => 0,
    "this" => 0,
    "rail splitter" => 0,
    "Illinois" => 0,
    "and" => 0,
];
echo "<br /> Підрахуймо ключові слова <br />";
foreach($ara as $val => &$i) {
    str_replace($val,$val,$zTxt,$i);
    echo $val," - ",$i,"<br />";
}
echo "#Fin Lesson_06 Task2# <br />";
echo "<br />";
?>

