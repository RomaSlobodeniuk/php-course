<?php
    echo "Hello Lesson_07+ <br />";
    echo "<br />";
/*
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
*/

// Lesson_07+ Task1
echo "<br />","Lesson_07+ Task1","<br />";
//из файла Les_06_HW_Task2_text.txt копируем текст в переменную $zTxt
$zTxt = file_get_contents("Les_06_HW_Task2_text.txt");
echo $zTxt,"<br />";
//создаем массив с нужными нам ключами,
// а для каждого ключа создаем пустой массив, в который после будут внесены номера позиций
$ara = [
    "of" => [],
    "in" => [],
    "new" => [],
    "from" => [],
    "this" => [],
    "rail splitter" => [],
    "Illinois" => [],
];

$longTxt = strlen ($zTxt);
echo "<br />", "В этом тексте всего  ", $longTxt," символов <br />";
echo "<br /> Поривнюемо кожне ключове слово послыдовно по тексту <br />";
foreach($ara as $val => $x) { //для каждого ключевого слова делаем:
    $call = substr_count($zTxt,$val); //узнаем количество ключевых слов в тексте
    if ($call > 0) { //если ключевые слова найдены (их количество >0)
       $count = $call; // врубаем счетчик для пошуку позиций вхождений ключевых слов
       $start = 0; //задаем номер первой позици для поиска
       $x = 0; //индекс в массиве ключа, под которым будет номер символа в тексте, с которого начинается совпадения ключа
       while($count > 0)  {
           $ara[$val][$x] = strpos($zTxt,$val,$start);
           $count--;
           $x++;
       }
        echo "<br />", "В этом тексте количество появлений слова  ", $val, " равно:  ", $call  , " <br />";
        // echo "И появляются эти слова на символах с индексом: ", $ara[$val], " <br />";
    }
    else {
        echo "<br />", "В этом тексте нет слова  ", $val," <br />";
    }
}
echo "Fin Lesson_07+ Task1 <br />";
echo "<br />";

// Lesson_07+ Task2
echo "<br />","Lesson_07+ Task2","<br />";
//из файла Les_06_HW_Task2_text.txt копируем текст в переменную $zTxt
$zTxt = file_get_contents("Les_06_HW_Task2_text.txt");
echo $zTxt,"<br />";


echo "Fin Lesson_07+ Task2 <br />";
echo "<br />";


/*
    $j=0;
    $longVal = strlen ($val);
    echo $val," - ", $longVal ,"<br />";
    for ($i=0; $i<($longTxt-$longVal); $i++) {
        //echo $zTxt[$i]," - ", $i ,"<br />";
        for ($j=0; $j < strlen($val); $j++) {
            if ($zTxt[$j] == $val[$j]) {
                $ara[$val][$j] = $i;
            }

        }
    }
*/
/*
 *
{
if (substr_count($zTxt, $val) > 0)
(strpos($zTxt,$val) <> false) {
            $val[$j] = ;


            }
 */
?>

