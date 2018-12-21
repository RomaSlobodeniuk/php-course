<!--<pre> -->
<?php
echo "Hello Lesson_10 <br /><br />";
echo "Lesson_10 Task_01 <br />";
echo "Создать 3-х мерный массив, заполнить его - use Random, вывести последовательно все элементы массива <br />";
echo "----------------------------------------------- <br>";
echo "создадим 2 таких массива числовой и символьный, и выведем их var_dump-ом<br><br>";
//----------------------------------------------
$ar3num = [];// это будет 3-х мерный массив числовой
$ar3chr = [];// это будет 3-х мерный массив символьный
//сначала зададим размеры 3-х мерного массива
$x = 3;
$y = 4;
$z = 5;
$maxNum = 150; // max значение числового массива
//заполним элементы массивов рандомно значениями
for ($i=0; $i<$x; $i++ ) {
    for ($j=0; $j<$y; $j++ ) {
        for ($k=0; $k<$z; $k++ ) {
            $ar3num[$i][$j][$k] = rand(1, $maxNum);
            $ar3chr[$i][$x][$k] = chr(rand(0, 255));
        }
    }
}
echo "массив числовой: <br>";
var_dump($ar3num);
echo "массив символьный: <br>";
var_dump($ar3chr);
//--------------------------------
//А теперь  создим функцию для вывода массива
function printArray($ara) {
    for ($m=0; $m<count($ara); $m++) {
        if (is_array($ara[$m])) {
            printArray($ara[$m]);
        } else {
            echo str_pad($ara[$m], 5, '___', STR_PAD_BOTH);
        }

    }
    echo "<br>";
}
echo "А теперь выведем массивы созданной нами функцией <br>";
echo "массив числовой: <br>";
printArray($ar3num);
/*
echo "массив символьный: <br>";
printArray($ar3chr);
*/
echo "Fin_Lesson_10 Task_01 <br><br>";


echo "Lesson_10 Task_02 <br>";
echo "Посчитать сумму строк массива<br>";
echo "Посчитать сумму всего массива <br><br>";

echo "Fin_Lesson_10 Task_02 <br><br>";
/* создаем функцию Full, которая будет принимать параметр Long -  длину массива,
а затем создавать и заполнять массив рандомными числами
*/
?>
<!-- </pre>

