<pre>
<?php
/**
 * Лекция 6 строки. Задание от Ромы
 * є кусок тексту, спочатку скопіюйте його вручну в якийсь текстовий файл (назвіть як забажаєте),
 * витягніть контент звідти у змінну (функції ви уже знаєте),
 * далі знайдіть кількість входжень таких слів: `of`, `in`, `new`, `from`, `this`, `rail splitter`.
 * Складіть масив, у якому ключами будуть ці слова, а їхніми значеннями - їхня кількість у тесті.
 */

$file = "./data_string.txt";

$strFromFile = file_get_contents($file);

$arr = ["of", "in", "new", "from", "this", "rail splitter"];

$arrNew = [];

foreach ($arr as $index) {
    str_replace($index, $index, $strFromFile,$i);
    $arrNew[$index] = $i;
}


//foreach ($arrNew as $index1 => $var) echo $index1, " <br>";


var_dump($arrNew);
print_r($arrNew);

?>
</pre>
