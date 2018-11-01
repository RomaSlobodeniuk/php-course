<pre>
<?php
/**
 * Лекция 7 массивы строки. Задание от Ромы
 *
 * берем строку из файла
 * заганяем текст в массив
 * без знаков припинания и пробелов
 * используем array_map
 *
 */

$file = "./data_string.txt";
$strFromFile = file_get_contents($file);
$strFromFile= trim($strFromFile, "-;\t\n\"., `");
$arrayText = explode(" ", $strFromFile);

var_dump($arrayText);

echo "<br>";

$arrayParsText = array_map("pars", $arrayText);

echo "<br>";
foreach ($arrayParsText as $val) echo $val;
echo "<br>";
echo "<hr>";
echo count(array_unique($arrayParsText));

$arrayParsText1 = array_map("clear", $arrayParsText);
//
//
var_dump($arrayParsText1);
echo "<hr>";
//var_dump($arrayParsText);
echo "<hr>";
echo count(array_unique($arrayParsText));



//-----------------------------------------------

function clear($ssss) {
    global $arrayParsText;
    $ret =$ssss;
    $i=0;
    foreach ($arrayParsText as $key => $val) {
        if ($ssss == $val)  {
            $i++;
            if ($i>1) {
                unset($arrayParsText[$key]);
                $ret = NULL;
            }
        }

    }

    return $ret;
}

function pars($str){

//    $str = trim($str, "-;\t\n\".,`"); // тут trim избыточен потомучто знаки припинпния получились всередине

    $str = str_replace([";","-","\t","\n","\"",".","`",","],"",$str);
    return $str;
}

?>
</pre>

