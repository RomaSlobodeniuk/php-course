<pre>
<?php
    echo "Hello World";

    $qqqq = True;
    $w = False;
    $asd  = "MyTest";
    $d = 0x1A;
    $a = 1.292;
    $a1 = "Це простий текст, записаний в строкову";
    $array[0] = "PHP1";
	
    $q1 = "ggggg";
    echo " ";
    echo $qqqq, "-", $w, "-", $q1, $asd, $d, "<br />", $a, "<br />", $a1  ;
    echo "<br />";
    echo $array[0];

    $b = 1.8e10;
    $c = 4E-9;

    echo "<br />", $b, "<br />" , $c;

    $array[0] = "PHP";
    $array[1] = "Python";
    $array[2] = "Java";

    echo "<br />";

    var_dump($array);

    $array['front_1'] = "Html";
    $array['front_2'] = "Css";
    $array['front_3'] = "JavaScript";

    echo "<br />";
    var_dump($array);

    echo "<br />";
    echo $array[2];

    echo "<br />";
    echo $array['front_2'];

    echo "<br />";
    echo $array[3];

//    $array = [array('juice_1' => 'Apple')];
//    $array = [array('juice_2' => 'Orange')];
//    $array = [array('juice_3' => 'Pineapple')];
//
//    echo "<br />---===";
//    echo $array['juice_1'];
//
//    var_dump($array);

    echo "<br /> !!!!!!!";

    $array = [
        array('juice_1' => 'Apple'),
        array('juice_2' => 'Orange'),
        array('juice_3' => 'Pineapple')
    ];

    echo "<br /> +++++++";
    echo $array['juice_1'];
    echo "<br /> @@@@@@@";
    var_dump($array);

    $var = NULL;
    echo "<br />";
    echo "-", $var, "-";
// ctrl+/
phpinfo();
//land


/*
 * shift+ctrl+/
 *
 * */
/*
 *
 *
 */
/*
 * jfkgwjwlkgjlwr
 */
//
    $foo = 10;   // $foo - ціле число
    $bar = (boolean)$foo;   // $bar - тип boolean, $bar = true

    $var1 = 12;
    $var2 = $var1;

    unset($var1);


    echo "<br />";
    echo "aaa", $var2;

/*
 * дз приведенеи типов и функции вывода double float хоткей php storm  ctrl+d
 *
 * */

?>
</pre>
