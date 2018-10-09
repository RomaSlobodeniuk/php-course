
<?php

echo "<title>Задания от Ромы</title>";

echo "<H1>Задания от Ромы</H1>";
echo "<H2>1. Треугольник</H2>";


$var = 7; // 7 рядов

for ($i=1;$i<=$var;$i++) {
    for ($j=1; $j<=$i; $j++) echo "#";
    echo "<br>";
}

echo "<hr><H2>2. Массив пользователей </H2>";
// Определение массива пользователей
$arrCust = [
    ["Дмитерко", "Андрей"],
    ["Иванова", "Леся"],
    ["Степаненко", "Антон"],
    ["Бондарь", "Анатолий"],
    ["Шевчук", "Богдан"],
    ["Кухар", "Ольга"],
    ["Петренко", "Алексей"],
    ["Дублянко", "Дмитко"],
    ["Плющ", "Юлия"],
    ["Мартынюк", "Леонид"],
    ["Порошук", "Петр"],
    ["Бубяк", "Катерина"],
    ["Ложкина", "Валентина"],
    ["Стецюк", "Кирил"],
    ["Ощепков", "Вадим"],
    ["Гуцалюк", "Семен"],
];



echo "<br><pre>";
print_r($arrCust);


echo '<br>Размер массива $arrCust - ', count($arrCust);

echo "<h3>Выводим массив</h3>";

for($x=0; $x < count($arrCust); $x++) {
    echo $x,". ";
    for ($y=0; $y < count($arrCust[$x]); $y++) {
        echo $arrCust[$x][$y]." ";
    }
    echo "<br>";
}

echo "<h3>Выводим массив c конца</h3>";

for ($x=(count($arrCust)-1); $x >= 0; $x--) {
    echo $x,". ";
    for ($y=0; $y < count($arrCust[$x]); $y++) {
        echo $arrCust[$x][$y]." ";
    }
    echo "<br>";
}


echo "<h3>Выводим массив снова для четности</h3>";

for($x=0; $x < count($arrCust); $x++) {
    echo $x,"- ", (($x%2) === 0 ? "Чет" : "Нечет"), " - ";
    for ($y=0; $y < count($arrCust[$x]); $y++) {
        echo $arrCust[$x][$y]." ";
    }
    echo "<br>";
}

echo "<h3>Выводим массив если четное - имя; нечетное - фамилию</h3>";

for($x=0; $x < count($arrCust); $x++) {
    echo $x,"- ", (($x%2) === 0 ? "Чет" : "Нечет"), " - ", (($x%2) === 0 ? $arrCust[$x][1] : $arrCust[$x][0] );

//    for ($y=0; $y < count($arrCust[$x]); $y++) {
//        echo $arrCust[$x][$y]." ";
//    }

    echo "<br>";
}


echo "<h3>Выводим массив индекс => значение через foreach</h3>";

foreach ($arrCust as $index => $value) {
    foreach ($value as $index1 => $value1) echo "$index $index1 $value1 ";
    echo  "<br>";
}

echo "<br></pre>";


?>
