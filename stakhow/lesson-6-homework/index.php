<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.10.2018
 * Time: 13:28
 */


$arr = [
    'of' => 0,
    'in' => 0,
    'new' => 0,
    'from' => 0,
    'this' => 0,
    'rail splitter' => 0,
];
$text = file_get_contents("text.txt");
$arrNew = [];
echo $text;
echo "Кількість входжень такий слів в тексті: <br>";
foreach ($arr as $key => $val){
    $word = "<span style='color: red'>$key</span>";

    $changed = str_replace($key, $word, $text, $count);

    if(!isset($arrNew[$val])){
        $arrNew[$val] = $count;
    } else {
        $arrNew[$val] += $count;
    }
//    echo $val . "<br>";
    echo "<p style='font-weight: 600;'>Слово " . "<span style='color: red'>". $key . " - </span>" . $count . "</p>";

};
print_r($changed);
