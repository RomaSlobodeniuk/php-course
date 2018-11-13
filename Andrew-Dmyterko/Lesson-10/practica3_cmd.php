<pre>
<?php
//declare(encoding='Windows-1252');
$array_char = [];
$array3 = [];

for ($i=0; $i<5; $i++ ) {
    for ($x=0; $x<5; $x++ ) {
        for ($y=0; $y<5; $y++ ) {
            $array3[$i][$x][$y] = rand(1, 150);
            $array_char[$i][$x][$y] = chr(rand(0, 255));
        }
    }

}


print_r($array3);


array_print($array3);

echo "<br><hr><br>";

loopArrayFor($array3);

echo "<br><hr><br>";
echo count($array3);

// -----------------------

function array_print($arr) {
$ss=0;
    foreach ($arr as $i => $val) {
        foreach ($val as $x => $val1) {
            $s = 0;
            foreach ($val1 as $y => $value) {
                //            echo $value," " ;
                echo $arr[$i][$x][$y], " ";
                $s = $s + $arr[$i][$x][$y];
                $ss = $ss + $arr[$i][$x][$y];
            }
            echo " = $s", "<br>";
        }
        echo "<br>";
    }

    echo " ==== $ss", "<br>";
}

//function loopArray($array) {
//    foreach ($array as $key => $value) {
//        if (is_array($value)) {
//            loopArray($value);
//        } else {
//            echo str_pad($value, 4), ' ';
////            debug("key = \"$key\"; value = \"$value\"");
//        }
//
//    }
//    echo "<br>";
//}

function loopArrayFor($array1) {
    for ($m=0; $m<count($array1); $m++) {
        if (is_array($array1[$m])) {
            loopArrayFor($array1[$m]);
        } else {
            echo str_pad($array1[$m], 4), '### ';
//            debug("key = \"$key\"; value = \"$value\"");
        }

    }
    echo "<br>";
}





//echo "<br><hr><br>";
//
//
//for ($i=0; $i<5; $i++ ) {
////    echo "i= ",$i, "<br>";
//
//    for ($x=0; $x<5; $x++ ) {
////        echo "i= ",$i, " x= ",$x, "<br>";
//
//        for ($y=0; $y<5; $y++ ) {
//           echo $array3[$i][$x][$y]," " ;
//
//        }
//        echo "<br>";
//    }
//
//    echo "<br>";
//}
////
//echo "<br><hr><br>";
//
//for ($i=0; $i<5; $i++ ) {
////    echo "i= ",$i, "<br>";
//
//    for ($x=0; $x<5; $x++ ) {
////        echo "i= ",$i, " x= ",$x, "<br>";
//
//        for ($y=0; $y<5; $y++ ) {
//            echo $array_char[$i][$x][$y]," " ;
//
//        }
//        echo "<br>";
//    }
//
//    echo "<br>";
//}

?>
</pre>


