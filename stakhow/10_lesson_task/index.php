<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 23.10.2018
 * Time: 18:40
 */


//$arr = [
//    "one" => [
//        "one one" => ["1", "2", '3'],
//        "one " => ["1", "2", '3'],
//        "one one" => ["1", "2", '3'],
//    ],
//];

$arr = [];
for($i = 0; $i<3; $i++){
    for($j = 0; $j<3; $j++){
        for($k = 0; $k<3; $k++){
            $arr[$i][$j][$k] = $k;
//            echo $arr[$i][$j][$k];
        }
    }
}

var_dump($arr);

echo "<hr>";

$arrR = [];
for($i = 0; $i<3; $i++){
    for($j = 0; $j<3; $j++){
        for($k = 0; $k<3; $k++){
            $a =  rand(1,1000);
            $arrR[$i][$j][$k] = $a;
        }
    }
}

var_dump($arrR);


echo "<hr>";
echo "<p>Функція виводу</p>";


//function echoArr($arr){
//    for($i = 0; $i<count($arr); $i++){
//        echo $arr[$i];
//    }
//
//
//}
//
//echoArr($arr);
echo "<table>";
function loopArrayFor($array1) {
//    $sum = 0;
    for ($m=0; $m<count($array1); $m++) {
        if (is_array($array1[$m])) {
            loopArrayFor($array1[$m]);
            if(array_sum($array1[$m])!==0){
                echo "<span style='color: crimson'> Сумма значень елементів масиву = " . array_sum($array1[$m]) . "</span><br>";

            }


        } else {
            echo "<td>" . str_pad($array1[$m], 4) . "</td>";
        }

    }
}
echo "</table>";
loopArrayFor($arrR);

