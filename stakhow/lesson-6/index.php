<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.10.2018
 * Time: 20:01
 */

$info = file_get_contents("file.txt");

$expInfo = explode("\n", $info);
$impInfo = implode(", ", $expInfo);
var_dump($expInfo);
echo "<br>";
var_dump($impInfo);
echo "<br>";



function echoInfo(){
    $info = file_get_contents("file.txt");
    $expInfo = explode("\n", $info);
    echo "<ul>";
    for($i=0; $i<count($expInfo); $i++){
         echo "<li style='color: #2792ff; font-size: 18px; text-decoration: underline;'>{$expInfo[$i]}</li>";
    }
    echo "</ul>";
}

echoInfo();