<?php
$multiArray = array();
$kol = 3;
$min = 0;
$max = 50;
for($a=0;$a<$kol;$a++)
{

    for($b=0;$b<$kol;$b++)
    {
        for($c=0;$c<$kol;$c++)
        {
            $multiArray[$a][$b][$c] = rand($min,$max);
        }

    }
}
/*echo '<pre>';
print_r($multiArray);
echo '</pre>';*/

function myOutputArray($multiArray)
{

    $count = 0;
    foreach ($multiArray as $i => $a){
        if(is_array($a))
        {
            myOutputArray($a);
        }
        echo "[$i] => $a";
        echo "<br>";
        $count++;
    }
}
//myOutputArray($multiArray);




function mySumValArray($multiArray)
{

    $count = 0;
    foreach ($multiArray as $i => $a) {
        if (is_array($a)) {
            myOutputArray($a);
        }
        else
        {
            if(is_integer($a))
            {
                $count += $a;
                echo "Сума всіх значень = $count";
                echo "<br>";
            }
        }



    }
}

mySumValArray($multiArray);


//phpinfo();

?>