<pre>
<?php

/**
 * Завдання 3
 */
/**
 * Створіть масив з довільних чисел. Знайдіть найменше і найбільше значення. Виведіть їх.
 * Після цього знайдіть і виведіть числа, що повторюються, а також їхню кількість (1 - 4; 2 - 19; 38 - 3...).
 * Для генерації довільних чисел можна використати функцію rand().
 */


$arrNum = [1,4,-7777,6,7,4,9,444444,0,34,56,78,2345,67,-3,567,-4345];

//var_dump($arr);

$max = $min = $arrNum[0];


for($i=0; $i < count($arrNum); $i++) {

    if ($arrNum[$i] > $max) $max = $arrNum[$i];
    if ($arrNum[$i] < $min) $min = $arrNum[$i];



}

echo '$max= ', $max, "  ", '$max= ', $min;
//die();

echo "<br><hr><br>";

$arrNumPovtor = [1,4,-7777,6,7,4,9,444444,0,34,56,78,2345,67,-3,567,-4345,1,4,-7777,6,7,4,9,444444,0,34,56,
                 78,2345,15,24,24,3,8,89,3,89,78,2345,-4345,1,4,-7777,6,7,4,9,444,777,6,7,4,9,444];


for ($x=0; $x < count($arrNumPovtor);$x++ ) {
    $povtor = 0; $chislo = 0;
    for ($y=0; $y < count($arrNumPovtor); $y++) {

        if ($arrNumPovtor[$x] === $arrNumPovtor[$y]) $povtor++;

    }

   echo $povtor !== 1 ? $arrNumPovtor[$x]." - ".$povtor."<br>" : "";


}
echo "<br><hr><br>";


$arrNumRund =[];
$sovpad = [];

// Заполняем масив новыми случайными значениями
for ($i=0; $i<50; $i++) {
    $arrNumRund[] = rand(0, 20);
}

print_r($arrNumRund);
echo "<br>", count($arrNumRund), "<br><br>";

for ($x=0; $x < count($arrNumRund);$x++ ) {
    $povtor = 0;
    for ($y = 0; $y < count($arrNumRund); $y++) {

        if ($arrNumRund[$x] === $arrNumRund[$y]) $povtor++;

    }

    $sovpad[$x] = $povtor;

}

echo "<br>";

//print_r($sovpad);
for ($x=0; $x < count($arrNumRund);$x++ ) {

    echo $arrNumRund[$x], " - ", $sovpad[$x], "<br>";

}



?>
</pre>
