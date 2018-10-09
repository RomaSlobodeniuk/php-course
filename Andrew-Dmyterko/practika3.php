<pre>
<?php






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
