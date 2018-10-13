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
    function myPosChartFunction($string, $word,&$pos) {
        $pos = strpos($string, $word, $pos);

        return $pos;
    }
    foreach ($listWord as $i => $word)
    {
        $countStr = substr_count($string,$word);
        $newArray[$word] = $countStr;



        echo "<hr>";
        //strpos — Возвращает позицию первого вхождения подстроки
        // Заметьте, что используется ===.  Использование == не даст верного
        // результата, так как 'a' находится в нулевой позиции.
        $pos = 0;
        for($posChart = 0;$posChart<$countStr;$posChart++){



            $thisPos = myPosChartFunction($string, $word,$pos);
            $pos = $pos + 1;

            if ($thisPos === false) {
                echo "Строка '$word' не найдена в строке '$string'";
            } else {
                echo "Строка '$word' найдена в тексте";
                echo " на позиции $thisPos";
            }
            echo "<br>";
        }
    }

    var_dump($newArray);
//    return $newArray;
}
myStrArray($content,$strArray);
//var_dump(myStrArray($content,$strArray));


?>