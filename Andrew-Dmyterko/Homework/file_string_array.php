<pre>
<?php
/**
 * Задание файлы массивы строки
 * Есть файл с данными
 * Состоящий из букв цифры спецсимволов
 * и разделенный пробелами запятыми и через возврат каретки
 * в перемешку
 * в результате нужно оставить только цифры и найти Мин Макс и выстроить по возрастанию.
 * Date: 10.10.18
 * Time: 21:03
 */

$file = './data.txt';

// прочитали $file в строку
$strFromFile = file_get_contents("$file");

// Выводим исходную строку
echo "Выводим исходную строку<br>$strFromFile<br><hr><br>";

// парсим $file через функцию передаем символы для парсинга
$pars = pars_func($strFromFile, ",", ["\n"," "]);

// Выводим строку после парсинга заменяем \n и пробелы на запятые
echo 'Выводим строку после парсинга заменяем \n и пробелы на запятые'."<br>$pars<br><hr><br>";

//  Разбивает строку с помощью разделителя в массив
$arrPars = explode(',',$pars);

// Разбивает строку с помощью разделителя в массив
echo "Выводим разбитую строку с помощью разделителя в массив<br>";
foreach ($arrPars as $i) echo "$i, ";
echo "<br><hr><br>";

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

// Полученный масив чисел
echo "Полученный масив чисел <br>";
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

// Выводим отсортированный массив (пузырьковый метод)
echo "Выводим отсортированный массив (пузырьковый метод)<br>";
foreach ($arrNum as $i) echo "$i, ";
echo "<br><hr><br>";



// обявляем функции
// --------------------------------------------------------------------------------
function pars_func(string $strToPars, $argRep, ...$argPars) {
    foreach ($argPars as $i) {
        // в str_replace передаем каждый из элементов массива $argPars
        $strToPars = str_replace($i, $argRep, $strToPars);

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

    return $strToPars;
}

?>
</pre>
