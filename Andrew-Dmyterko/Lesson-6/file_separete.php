<pre>
<?php
/**
 * Работа со строками
 * читаем из файла и делим через разделитель
 * в массив
 * ---- потом соединяем в строчку и делим через пробел
 */



$file = "data111.txt";

$strFromFile = file_get_contents("./data111.txt");

echo $strFromFile;

$pises = explode("\n", $strFromFile);

//$i = 0;

echo "<br><hr>";

foreach ($pises as $user) echo "$user <br>";

//while ($i < count($pises)){
//
//    echo "$pises[$i] <br>";
//    $i++;
//
//
//}

$AddInString = implode(' ', $pises);

$pises = explode(" ", $AddInString);

echo "<hr>";

foreach ($pises as $user) echo "$user <br>";



?>

</pre>
