<?php
$file = "myText.txt";
$content = file_get_contents($file);
echo $content;
echo "<br>";
//`of`, `in`, `new`, `from`, `this`, `rail splitter`
$strArray = array("of","in","new","from","this","rail splitter");
var_dump($strArray);

/*$str = "of";
//substr_count — Возвращает число вхождений подстроки
$countStr = substr_count($content,$str);
echo $countStr;*/
echo "<br>";

function myStrArray($string, $listWord)
{
    $newArray = array();
//    $countList = count($listWord);
    foreach ($listWord as $i => $word)
    {
        $countStr = substr_count($string,$word);
        $newArray[$word] = $countStr;
    }
    return $newArray;
}

var_dump(myStrArray($content,$strArray));

?>