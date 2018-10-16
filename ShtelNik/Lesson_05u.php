<?php
    echo "Hello Lesson_05 <br />";
    echo "<br />";

    $inetPage=file_get_contents("http://127.0.0.1/");
    file_put_contents("newFile.php",$inetPage);
    echo "Создано новый файл newFile.php";




/*
    $VarA=0x1A;
    echo $VarA; echo "<br />";
    $a = 1.292;
    $b = 1.8e10;
    $c = 4E-9;
    echo $a; echo "<br />";
    echo $b; echo "<br />";
    echo $c; echo "<br />";

$array1[0] = "PHP";
$array1[1] = "Python";
$array1[2] = "Java";
print $array1[1]; echo "<br />";
print_r ($array1[2]); echo "<br />";
var_dump($array1); echo "<br />";

$array2["front_1"] = "Html";
$array2["front_2"] = "Css";
$array2["front_3"] = "JavaScript";
print_r ($array2["front_1"]); echo "<br />";
var_dump($array2); echo "<br />";

$array3 = array("juice_1" => "Apple");
$array3 = array("juice_2" => "Orange");
$array3 = array("juice_3" => "Pineapple");
//print $array3["juice_2"];
echo "<br />";
var_dump($array3);
echo "<br />";
$array = [
    array('juice_1' => 'Apple'),
    array('juice_2' => 'Orange'),
    array('juice_3' => 'Pineapple')
];
var_dump($array);

$a1 = 535;
$a2=$a1;
$a3=$a2;
$a4=$a3;
$a5=$a4;
unset($a1); echo $a5; echo "<br />";

//phpinfo();

//#3_HomeWork
//  task3: cycles for, while, do while
for ($i=0;$i<=7;$i++) {
    for ($j=0;$j<$i;$j++) {
        echo "#";
    }
    echo "<br />";
}

$i=0;
while ($i<=7){
    $j=0;
    while ($j<$i){
        echo "#";
        $j++;
    }
    echo "<br />";
    $i++;
}

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

//  task1:
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

//  task2:
for ($i=9; $i>=0; $i--){
    echo $ara[$i]["Fam"], "  ", $ara[$i]["Name"], "<br />";
}

//Lesson4   conditional statements
//Task1
for ($i=1; $i<=100; $i++){
    $j=$i;
    if (($j%3===0)&&($j%5===0)) {
        echo "ALFA&BETA",  "<br />";
    }
    elseif ($j%3===0){
        echo "ALFA",  "<br />";
    }
    elseif ($j%5===0){
        echo "BETA",  "<br />";
    }
    else {
        echo $j, "<br />";
    }
}

echo "<br />";
echo "<br />";

//Task2
$x=8; $y=8;
for ($j=$y; $j>=1; $j--) {
    $g=$j;
    for ($i = 8; $i>=1; $i--) {
        $w=$i;
        if ((($w%2===0)&&($g%2===0))||(($w%2!==0)&&($g%2!==0))) {
            echo "X";
        }
        else {
            echo "#";
        }
    }
echo "<br />";
}
//&nbsp
echo "<br />";

//Task3
$longArr = 50; //rand(10,50); // создаем длину массива
echo "Create an array that has a length of ", $longArr ,"<br />";
for ($i=0;$i<$longArr;$i++) {
    $num[$i] = rand(1,20); // заполняем массив случ.числами от 1 до 20
    echo $i+1,".  ",$num[$i],"<br />"; //выводим массив чисел на экран
}
$max = max($num);
echo "Max value of the array is ", $max ,"<br />";//выводим Max значение массива
$min = min($num);
echo "Min value of the array is ", $min ,"<br />";//выводим Min значение массива
echo "<br />";
for ($i=0;$i<$longArr;$i++) { //создаем массив "К" в котором будем хранить TRUE если число повторяется
    $K[$i] = false; //по-умолчению считаем что каждое число не повторяется,а появилось лишь 1 раз
}
for ($i=0;$i<$longArr;$i++){
    if ($K[$i]==false) { //если число не встретилось больше 1 раза
        $rep=1; //включаем счетчик повторов
        for ($j=$i+1;$j<$longArr;$j++){
            if (($K[$j]==false) && ($num[$i]==$num[$j])){ // подчитываем количество повторов
                $K[$i]=TRUE;
                $K[$j]=$K[$i];
                $rep++;
            }
        }
        //для чисел которые встретились нам больше 1 раз выводим само число и количество его появлений
        if ($rep>1) {
            echo $num[$i], "-", $rep, "<br />";
        }
    }
}


//Task4 do_while
$kasa=2000;
echo "kasa=",$kasa,"$<br />";
do {
    $buy=rand(1,$kasa);
    $priBable=($kasa>0)&&($kasa>=$buy);
    if ($priBable) {
        echo "Pokupka na sumu:",$buy,"$<br />";
        $kasa=$kasa-$buy;
        echo "zalushok kasu=",$kasa,"$<br />";
    }
    else {
        echo "Pokupka na sumu:",$buy,"$<br />";
        echo "Nedostatochno deneg dlya pokupki!!!<br />";
    }
} while ($priBable);
echo "<br />";

//Task4 while
$kasa=2000;
echo "kasa=",$kasa,"$<br />";
while ($kasa>0){
    $buy=rand(1,$kasa);
    echo "Pokupka na sumu:",$buy,"$<br />";
    if (($kasa>=$buy)&&($kasa>0)) {
        $kasa=$kasa-$buy;
        echo "zalushok kasu=",$kasa,"$<br />";
    }
    else {
        echo "Nedostatochno deneg dlya pokupki!!!<br />";
    }
};
echo "<br />";

//Task5
$mns=["Jan","Feb","Mart","Apr","May","June","Jule","Aug","Sep","Okt","Nov","Dec"];
for ($i=0;$i<=count($mns)-1;$i++) {
    echo $i+1,".  ","$mns[$i]","<br />";
}
*/
echo "<br />";

//Lesson #

?>

