<pre>
<?php

/**
 * Мое ДЗ типы данных
 * */

    echo "<title>Мое ДЗ</title>";
    echo "<h1>Мое ДЗ</h1>";

// Тип BOOLEAN (boolean)(bool) Логический. Присваиваем переменным значения true, false
    $foo = True;
    $bar = False;

/* Тип INTEGER (integer)(int) Целые числа. Присваиваем переменным значения десятичной, шеснадцатиричной, восьмиричной,
*  двоичной, а также отрицательные значения.
*/

    $a = 1234; // десятичное число
    $a1 = -123; // отрицательное число
    $a2 = 0123; // восьмеричное число (эквивалентно 83 в десятичной системе)
    $a3 = 0x1A; // шестнадцатеричное число (эквивалентно 26 в десятичной системе)
    $a4 = 0b11111111; // двоичное число (эквивалентно 255 в десятичной системе)

// Тип FLOAT (float) (double) (real) Числа с плавающей запятой. Присваиваем переменным значения

/* Вы также можете найти несколько упоминаний типа двойной точности (double).
*  Рассматривайте его как число с плавающей точкой, два имени существуют только по историческим причинам.
*
*  В PHP нет никакой разницы. float, double или real являются одним и тем же типом данных.
*  На уровне C все хранится как double.
*  Реальный размер по-прежнему зависит от платформы.
*/
    $aa = 1.234;
    $bb = 1.2e3;
    $cc = 7E-10;

    $vad = 1.1;
    echo '$vad' ;
    echo "$vad" ;
    print gettype($vad);
    var_dump($vad);

// Тип STRING (string) - строковый тип

    $strr = "Це простий текст, записаний в строкову";

    echo 'это простая строка';

    echo 'Также вы можете вставлять в строки
    символ новой строки вот так,
    это нормально';

    // Выводит: Однажды Арнольд сказал: "I'll be back"
    echo 'Однажды Арнольд сказал: "I\'ll be back"';

    echo "\n\r";
    echo "Однажды Арнольд сказал: \n\r be back";

    // Выводит: Вы удалили C:\*.*?
    echo 'Вы удалили C:\\*.*?';

    // Выводит: Вы удалили C:\*.*?
    echo 'Вы удалили C:\*.*?';

    // Выводит: Это не будет развернуто: \n новая строка
    echo 'Это не будет развернуто: \n новая строка';

    // Выводит: Переменные $expand также $either не разворачиваются
    echo 'Переменные $expand также $either не разворачиваются';



    echo "<br />";
    echo "<br />";

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

//    $array = array("foo", "bar", "hallo", "world");
//    echo "<br />";
//    var_dump($array);

//$array = [
//    array("juice_1" => "Apple"),
//    array('juice_2' => 'Orange')
//];
//    echo "<br />";
//    var_dump($array);
//    echo "<br />";
//    var_dump($array["juice_1"]);



    echo "<br />----------------------<br />";
    $aq = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
    $bar = "wwwwwwwww";
    echo "<br />0.print'<br />";
    print $aq['b']."dddddddd".$aq['a'];
    echo "<br />1.print_r<br />";
    print_r ($aq);
    echo "<br />2.var_dump<br />";
    var_dump($aq);
    echo "<br />3.var_export<br />";
    var_export($aq);
    echo "<br />4.var_export-в переменную<br />";
    $mm = var_export($aq, true);
    echo $mm;
    echo "<br />5.echo<br />";
    echo $aq['b'], "aaaaa", $aq['a'];
    echo "<br />----------------------<br />";

/* boolval() - Возвращает логическое значение переменной
*  floatval() - Возвращает значение переменной в виде числа с плавающей точкой
*  intval() - Возвращает целое значение переменной
*  settype() - Присваивает переменной новый тип
*/
    var_dump((bool) "");        // bool(false)
    var_dump((bool) 1);         // bool(true)
    var_dump((bool) -2);        // bool(true)
    var_dump((bool) "foo");     // bool(true)
    var_dump((bool) 2.3e5);     // bool(true)
    var_dump((bool) array(12)); // bool(true)
    var_dump((bool) array());   // bool(false)
    var_dump((bool) "false");   // bool(true)

    echo '!!!!!var_dump((bool), "0")<br>';
    var_dump((bool) "0");
    echo '!!!!!var_dump((bool), "o")<br>';
    var_dump((bool) "o");

    echo "<br />";
    var_dump((int) 5.6895);        //
    echo "<br />";
    var_dump((int) 7E-10);         //
    echo "<br />";
    var_dump((int) 1.2e3);        //

    echo "<br />";
    var_dump((string) 4.1E+6);     //
    echo "<br />";
    var_dump((string) 2.3e5);     //

    $f1 = 1 + "10.5";                // $f1 это float (11.5)
    echo "<br />";
    var_dump($f1);

    $f1 = 1 + "-1.3e3";              // $f1 это float (-1299)
    echo "<br />";
    var_dump($f1);

    $f1 = 1 + "bob-1.3e3";           // $f1 это integer (1)
    echo "<br />";
    var_dump($f1);

    $f1 = 1 + "bob3";                // $f1 это integer (1)
    echo "<br />";
    var_dump($f1);

    $f1 = 1 + "10 Small Pigs";       // $f1 это integer (11)
    echo "<br />";
    var_dump($f1);

    $f1 = 4 + "10.2 Little Piggies"; // $f1 это float (14.2)
    echo "<br />";
    var_dump($f1);

    $f1 = "10.0 pigs " + 1;          // $f1 это float (11)
    echo "<br />";
    var_dump($f1);

    $f1 = "10.0 pigs " + 1.0;        // $f1 это float (11)
    echo "<br />";
    var_dump($f1);
//    var_dump((bool) array(12)); // bool(true)
//    var_dump((bool) array());   // bool(false)
//    var_dump((bool) "false");   // bool(true)





//    $arr = [
//        array('juice_1' => 'Apple'),
//        array('juice_2' => 'Orange'),
//        array('juice_3' => 'Pineapple')
//    ];

//$arr = [
//        'juice_1' => 'Apple1',
//        'juice_2' => 'Orange1',
//        'juice_3' => 'Pineapple1'
//       ];
$arr = array(
    'juice_1' => 'Apple2',
    'juice_2' => 'Orange2',
    'juice_3' => 'Pineapple2');




    echo "<br />var_dump<br />";
    var_dump($arr);
    echo "<br />var_export<br />";
    var_export($arr);
    echo "<br />print_r<br />";
    print_r($arr);


    echo "<br />";
    echo "Hello World";



?>
    </pre>
