<?php
    echo "Hello Lesson_06 <br />";
    echo "<br />";

// Lesson_06 Task2
echo "Lesson_06 Task2","<br />";
//из файла Les_06_HW_Task2_text.txt копируем текст в переменную $zTxt
$zTxt = file_get_contents("Les_06_HW_Task2_text.txt");
echo $zTxt,"<br />";
//создаем массив с нужными нам ключами, для каждого ключа счетчик =0
$ara = [
    "of" => 0,
    "in" => 0,
    "new" => 0,
    "from" => 0,
    "this" => 0,
    "rail splitter" => 0,
    "Illinois" => 0,
];
echo "<br /> Підрахуймо ключові слова <br />";
foreach($ara as $val => &$i) {
    str_replace($val,$val,$zTxt,$i);
    echo $val," - ",$i,"<br />";
}
echo "Fin Lesson_06 Task2 <br />";

/*
*/
echo "<br />";

//Lesson #

?>

