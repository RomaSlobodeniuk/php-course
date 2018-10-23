<pre>
<?php
/**
 * Задание файлы массивы строки
 * Есть файл с данными
 * Состоящий из букв цифры спецсимволов
 * и разделенный пробелами запятыми и через возврат каретки
 * в перемешку
 * в результате нужно оставить только цифры и найти Мин Макс и выстроить по возрастанию.
 *
 * Коментарии не убраны
 *
 * Date: 10.10.18
 * Time: 21:03
 */


$file = './data.txt';

// прочитали $file в строку
$strFromFile = file_get_contents("$file");

//var_dump($strFromFile);
//echo "<br>",strlen($strFromFile), "<hr><br>";

//// парсим $file
//// заменяем \n на запятые
//$pars = str_replace("\n", ",", $strFromFile);
//
//var_dump($pars);
//echo "<br>",strlen($pars), "<hr><br>";
//
//// заменяем пробелы на запятые
//$pars = str_replace(" ", ",", $pars);
//
//var_dump($pars);
//echo "<br>",strlen($pars), "<hr><br>";


// парсим $file через функцию
$pars = pars_func($strFromFile,["\n"," "]);

//var_dump($pars);
//echo "<br>",strlen($pars), "<hr><br>";

//  Разбивает строку с помощью разделителя
$arrPars = explode(',',$pars);

//var_dump($arrPars);
//echo "<br>",count($arrPars), "<hr><br>";

$arrNum = [];

// оставляем только числа и приводим к int
foreach ($arrPars as $index => $parr) {
    if (is_numeric($parr)) {
        $arrNum[] = (int) $parr;
    }
}

var_dump($arrNum);
echo "<br>",count($arrNum), "<hr><br>";

$min = $max = $arrNum[0];

foreach ($arrNum as $arg) {
    if ($arg > $max) $max = $arg;
    if ($arg < $min) $min = $arg;
}

foreach ($arrNum as $i) echo "$i, ";
echo "<br><hr><br>";

echo '$max= ', $max,' , $min= ', $min;
echo "<br><hr><br>";


// Сортировка пузырьковым методом
$count_elements = count($arrNum);
$iterations = $count_elements - 1;

for ($i=0; $i < $count_elements; $i++) {
    for ($j=0; $j < $iterations; $j++ ) {
        if ($arrNum[$j] > $arrNum[$j+1]) list($arrNum[$j], $arrNum[$j+1]) = array($arrNum[$j+1], $arrNum[$j]);
    }

    $iterations--;
}

// Выводим массив
foreach ($arrNum as $i) echo "$i, ";
echo "<br><hr><br>";



// обявляем функции
// --------------------------------------------------------------------------------
function pars_func(string $strToPars, ...$argPars) {
    foreach ($argPars as $i) {
        // в str_replace передаем каждый из элементов массива $argPars
        $strToPars = str_replace($i, ",", $strToPars);

//        var_dump($strToPars);
//        echo "<br>",strlen($strToPars), "<hr><br>";
    }

    return $strToPars;
}
// тожесамое но проще
function pars_func1(string $strToPars, ...$argPars) {
                                // можно передать $argPars как масив и
                                //str_replace() использует каждое значение из
                                // соответствующего массива для поиска и замены
        $strToPars = str_replace($argPars, ",", $strToPars);
                                //^^^^^^^
//        var_dump($strToPars);
//        echo "<br>",strlen($strToPars), "<hr><br>";

    return $strToPars;
}






?>

</pre>
