<?php
echo "Hello Lesson_03 HomeWork <br>";
echo "<br>";
echo "Lesson_03 Task1 <br>"; //Task1
echo "Создать масив из 10 фамилий и имен. <br>";
echo "Вывести для четных имена, для нечетных - фамилии<br>";
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
        echo  $vvv["Name"],"<br>";
    }
    else {
        echo $vvv["Fam"], "<br>";
    }
}
echo "#Final Task1# <br>";
echo "<br>";

echo "Lesson_03 Task2 <br />"; //Task2
echo "Вывести имена и фамилии от конца списка к началу<br>";
for ($i=9; $i>=0; $i--){
    echo $ara[$i]["Fam"], "  ", $ara[$i]["Name"], "<br>";
}
echo "#Final Task2# <br>";
echo "<br>";

echo "Lesson_03 Task3 <br>"; //Task3
echo "Нахерячить елочек из # <br>";
echo "Task3a //for "; //for
for ($i=0;$i<=7;$i++) {
    for ($j=0;$j<$i;$j++) {
        echo "#";
    }
    echo "<br>";
}
echo "<br>";

echo "Task3b //while "; //while
$i=0;
while ($i<=7){
    $j=0;
    while ($j<$i){
        echo "#";
        $j++;
    }
    echo "<br>";
    $i++;
}
echo "<br>";

echo "Task3b //do_while <br>"; //do_while
$i=1;
do {
    $j=0;
    do {
        echo "#";
        $j++;
    } while ($j<$i);
    echo "<br />";
    $i++;
} while ($i<=7);
echo "<br />";
echo "#Final Task3# <br>";
echo "Final Lesson_03 <br>";
?>

