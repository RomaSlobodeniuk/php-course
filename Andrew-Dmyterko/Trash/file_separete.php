<pre>
<?php
// Работа со строками


$file = "./data111.txt";

$strFromFile = file_get_contents($file);

echo $strFromFile;

$pises = explode("\n", $strFromFile);

//$i = 0;

echo "<br><hr>";

var_dump($pises);

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

echo "<hr>";



?>

</pre>
