<?php


/*function writeMyFunc($name, $countName)
{
    $filename = "myFile.txt";
    $res = fopen($filename, "w");
    fclose($res);
    for ($i = 1; $i >= $countName; $i++)
    {
        file_put_contents($filename, $name, FILE_APPEND | LOCK_EX);
    }

//    file_put_contents($filename, $name,FILE_APPEND | LOCK_EX);

    $fileText = file_get_contents($filename);
    echo $fileText;*/

/*
    $hand = fopen($filename, "rb"); //windows
    $content = fread($hand, filesize($filename));
    echo $content;
    fclose($hand);
}
*/
//
//$myName = "maks";
//$countName = 10;
//writeMyFunc($myName, $countName);





/*$kut = '#';
$count = 7;
for($i = 0; $i<$count;$i++)
{
    for($j = 0; $j<=$i; $j++)
    {
        echo $kut;
    }
    echo "<br>";

}*/
/*
$myArray = array(
    array('Вася','Т'),
    array('Катя','В'),
    array('Маша','Ы'),
    array('Даша','Е'),
    array('Петя','З')
);
$countArray = count($myArray);
echo $countArray;
echo "<br>";
foreach ($myArray as $index => $value) {

    switch ($index)
    {
        case $index==0||($index % 2 == 0):
            echo "парне".$value[0]." ".$value[1];
            echo "<br>";
            break;
        case $index > 0 &&($index % 2 != 0):
            echo "непарне".$value[0]." ".$value[1];
            echo "<br>";
            break;
    }
}*/
//*********************
//практичне 1
/*
$start = 1;
$end = 20;
foreach (range($start,$end) as $i)
{
    if($i%3==0)
    {
        echo "<span style='color: red'>";
        echo 'Alpha = '.$i;
        echo "</span>";
        echo "<br>";
    }
    elseif($i%5==0)
    {
        echo "<span style='color: blue'>";
        echo 'Beta = '.$i;
        echo "</span>";
        echo "<br>";
    }
    else
    {
        echo "<span style='color: green'>";
        echo 'Alpha & Beta = '.$i;
        echo "</span>";
        echo "<br>";
    }
}*/

//практичне 2
$num1 = 5;
$num2 = 8;
$char1 = '#';
$char2 = '&nbsp';
for($i=1;$i<=$num2;$i++)
{
    for($j=1;$j<=$num1;$j++)
        {
            if($i%2===0)
            {
                if ($j % 2 === 0) {
                    echo $char1;
                } else {
                    echo $char2;
                }
            }
            else
            {
                if ($j % 2 === 0) {
                    echo $char2;
                } else {
                    echo $char1;
                }
            }

        }
    echo "<br>";

    /*if ($i%2==0)
    {
        echo " ".$char."#";
    }
    else
    {
        echo "#".$char." ";
    }*/


}

//практичне 3
/*$numbersArray = array();
$start = 0;
$end = 200;
for($i=0; $i<$end; $i++) {
    $numbersArray[$i] = rand($start, $end);
}
$countArray = count($numbersArray);
echo $countArray;
echo "<br>";
//var_dump($numbersArray);
$maxNumb = 0;
$minNumb = 0;

for($j=0; $j>=$countArray; $j++)
{

}
*/


//практичне 5
/*
$months = array("Січень", "Лютий","Березень","Квітень","Травень","Червень","Липень","Серпень","Вересень","Жовтень","Листопад","Грудень");
//var_dump($months);

foreach ($months as $indexMonths => $month)
{
    $numb = $indexMonths + 1;
    echo $numb." - ";
    echo $months[$indexMonths];
    echo "<br>";
}*/


//phpinfo();
    ?>