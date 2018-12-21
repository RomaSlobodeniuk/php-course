<?php
    echo "Hello Lesson_06 <br />";
    echo "<br />";

//  task1 of Lesson_06:
echo " task1 of Lesson_06: ","<br />";
echo " Создать массив элементов ","<br />";
echo " Создать файл, положить массив в файл ","<br />";

$inetPage=file_get_contents("http://127.0.0.1/");
file_put_contents("newFile.php",$inetPage);
echo "Создано новый файл newFile.php";

echo "<br />";
$ara = [
    0 => [
        "Fam" => "Ivanov" ,
        "Name" => "Ivan",
    ],
    1 => [
        "Fam" => "Petrov",
        "Name" => "Petro",
    ],
    2 => [
        "Fam" => "Sidorov" ,
        "Name" => "Sidor",
    ],
    3 => [
        "Fam" => "Nikolayev",
        "Name" => "Nikolay",
    ],
    4 => [
        "Fam" => "Glebov",
        "Name" => "Gleb",
    ],
    5 => [
        "Fam" => "Sergeev",
        "Name" => "Sergey",
    ],
    6 => [
        "Fam" => "Olegov",
        "Name" => "Oleg" ,
    ],
    7 => [
        "Fam" => "Oleva",
        "Name" => "Olya" ,
    ],
    8 => [
        "Fam" => "Kateva",
        "Name" => "Katya" ,
    ],
    9 => [
        "Fam" => "Ludova",
        "Name" => "Luda" ,
    ],
];
foreach ($ara as $i => $vvv) {
    if  ($i%2===0){
        echo  $vvv["Name"],"<br />";
    }
    else {
        echo $vvv["Fam"], "<br />";
    }
}
echo "<br />";
?>

