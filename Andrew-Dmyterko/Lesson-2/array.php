<pre>
    <?php

    // Тип данных array - массивы

    echo "<H1> Массивы </H1>";

    echo "<hr><H2>1. Массив \$aaa </H2>";
    // Определение массива $aaa
    $aaa = array(
        "q" => "w",
        "a" => "s",
        "z" => "x"
    );

    echo "<b>echo:".'$aaa["z"]'."</b><br>";
    echo($aaa["z"]);

    echo "<br><br><b>print:".'$aaa["a"]'."</b><br>";
    print($aaa["a"]);

    echo "<br><br><b>print_r:".'$aaa'."</b><br>";
    print_r($aaa);

    echo "<br><b>var_dump:".'$aaa'."</b><br>";
    var_dump($aaa);

    echo "<br><b>var_export:".'$aaa'."</b><br>";
    var_export($aaa);


    echo "<hr><H2>2. Массив \$aaa1 </H2>";
    // Определение массива $aaa1
    $aaa1 = array(
        "q",
        "w",
        "e",
        "r",
        "t",
        "y"
    );

    echo "<br><b>echo:".'$aaa1[3]'."</b><br>";
    echo($aaa1[3]);

    echo "<br><br><b>print:".'$aaa1[4]'."</b><br>";
    print($aaa1[4]);

    echo "<br><br><b>print_r:".'$aaa1'."</b><br>";
    print_r($aaa1);

    echo "<br><b>var_dump:".'$aaa1'."</b><br>";
    var_dump($aaa1);
//    var_dump($aaa1[4]);

    echo "<br><b>var_export:".'$aaa1'."</b><br>";
    var_export($aaa1);


    echo "<hr><H2>3. Массив \$aaa2 </H2>";
    // Определение массива $aaa2
    $aaa2 = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    );

//    echo "<br><b>echo:".'$aaa[3]'."</b><br>";
//    echo($aaa1[3]);
//
//    echo "<br><br><b>print:".'$aaa[4]'."</b><br>";
//    print($aaa1[4]);

    echo "<br><b>print_r:".'$aaa2'."</b><br>";
    print_r($aaa2);

    echo "<br><b>var_dump:".'$aaa2'."</b><br>";
    var_dump($aaa2);

    echo "<br><b>var_export:".'$aaa2'."</b><br>";
    var_export($aaa2);


    echo "<hr><H2>4. Массив \$aaa3 </H2>";
    // Определение массива $aaa3
    $aaa3 = [
        "a",
        "1"  =>  "b",
        5    =>  "c",
        6    =>  "d",
        "er" =>  "e",
        "cdf" => "f",
        "g",            // 7й индекс со значением "g" перезаписался 7    =>  "j",
        3    =>  "i",
        7    =>  "j",
        "k"


    ];

//    echo "<br><b>echo:".'$aaa3[3]'."</b><br>";
//    echo($aaa1[3]);
//
//    echo "<br><br><b>print:".'$aaa3[4]'."</b><br>";
//    print($aaa1[4]);

    echo "<br><b>print_r:".'$aaa3'."</b><br>";
    print_r($aaa3);

    echo "<br><b>var_dump:".'$aaa3'."</b><br>";
    var_dump($aaa3);

    echo "<br><b>var_export:".'$aaa3'."</b><br>";
    var_export($aaa3);


echo "<hr><H2>5. Массив \$aaa4 </H2>";
    // Определение массива $aaa4
    $aaa4 = [
        0 => [
            0 => 1,
            1 => 2,
            2 => 3
        ],
        1 => [
            0 => 'yyy',
            1 => 'xxx',
            2 => 'zzz'
        ],
        2 => [
            'NYC',
            'Kyiv',
            'Khmelnytskyi'
        ]
    ];

//    echo "<br><b>echo:".'$aaa4[3]'."</b><br>";
//    echo($aaa4[3]);
//
//    echo "<br><br><b>print:".'$aaa3[4]'."</b><br>";
//    print($aaa4[4]);

    echo "<br><b>print_r:".'$aaa4'."</b><br>";
    print_r($aaa4);

    echo "<br><b>var_dump:".'$aaa4'."</b><br>";
    var_dump($aaa4);

    echo "<br><b>var_export:".'$aaa4'."</b><br>";
    var_export($aaa4);


    echo "<hr><H2>6. Массив \$aaa5 </H2>";
    // Определение массива $aaa4
    $aaa5 = [
             [
            0 => 4,
            1 => 5,
            2 => 6
        ],
             [
            0 => 'rrr',
            1 => 'fff',
            2 => 'vvv'
        ],
            [
            'OK',
            'OBB',
            'OkOb'
        ]
    ];

//    echo "<br><b>echo:".'$aaa5[3]'."</b><br>";
//    echo($aaa5[3]);
//
//    echo "<br><br><b>print:".'$aaa5[4]'."</b><br>";
//    print($aaa5[4]);

    echo "<br><b>print_r:".'$aaa5'."</b><br>";
    print_r($aaa5);

    echo "<br><b>var_dump:".'$aaa5'."</b><br>";
    var_dump($aaa5);

    echo "<br><b>var_export:".'$aaa5'."</b><br>";
    var_export($aaa5);


    echo "<hr><H2>7. Массив \$aaa6 Доступ к элементам масива </H2>";
    // Определение массива $aaa6
    $aaa6 = array(
        "foo" => "barrrrr",
        42    => 24,
        "multi" => array(
            "dimensional" => array(
                "array" => "foo00000"
            )
        )
    );

    echo "<br><b>print_r:".'$aaa6'."</b><br>";
    print_r($aaa6);

    echo "<br><b>var_dump:".'$aaa6'."</b><br>";
    var_dump($aaa6);

    echo "<br><b>var_export:".'$aaa6'."</b><br>";
    var_export($aaa6);

    // Доступ к элементам массива
    echo "<br><br>Доступ к элементам массива<br>";
    echo "<br><b>var_export:".'$aaa6["foo"]'."</b><br>";
    var_dump($aaa6["foo"]);
    echo "<br><b>var_export:".'$aaa6[42]'."</b><br>";
    var_dump($aaa6[42]);
    echo "<br><b>var_export:".'$aaa6["multi"]["dimensional"]["array"]'."</b><br>";
    var_dump($aaa6["multi"]["dimensional"]["array"]);


    echo "<hr><H2>8. Массив \$aaa7 Unset() к элементам масива и самому массиву</H2>";
    // Определение массива $aaa7
    $aaa7 = array(5 => 1, 12 => 2);

    echo "<br><b>print_r:".'$aaa7'."</b><br>";
    print_r($aaa7);

    echo "<br><b>var_dump:".'$aaa7'."</b><br>";
    var_dump($aaa7);

    $aaa7[] = 56;    // В этом месте скрипта это
    // то же самое, что и $aaa7[13] = 56;

    echo "<br><b>var_dump:".'$aaa7'." Добавили элемент массива ".' $aaa7[]'." = 56</b><br>";
    var_dump($aaa7);

    echo "<br><b>var_dump:".'$aaa7'." Добавили элемент массива ".' $aaa7["x"]'." = 42</b><br>";
    $aaa7["x"] = 42; // Это добавляет к массиву новый
    // элемент с ключом "x"
    var_dump($aaa7);

    echo "<br><b>var_dump:".'$aaa7'." Удалили элемент массива".' unset($aaa7[5])'."</b><br>";
    unset($aaa7[5]); // Это удаляет элемент из массива
    var_dump($aaa7);

    echo "<br><b>var_dump:".'$aaa7'." Удалили массив полностью".'unset($aaa7)'."</b><br>";
    unset($aaa7);    // Это удаляет массив полностью
    var_dump($aaa7);


    echo "<hr><H2>9. Массив \$aaa8 Unset() к элементам масива и переиндексация массива функцией array_values()</H2>";
    // Определение массива $aaa8
    $aaa8 = array(1, 2, 3, 4, 5);

    echo "<br><b>print_r:".'$aaa8'."</b><br>";
    print_r($aaa8);

    echo "<br><b>var_dump:".'$aaa8'."</b><br>";
    var_dump($aaa8);

    // Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
    foreach ($aaa8 as $i => $value) {
        unset($aaa8[$i]);
    }

    echo "<br><b>print_r:".'$aaa8'." Удалили все элементы ".'unset($aaa8[$i])'."</b><br>";
    print_r($aaa8);

    echo "<br><b>var_dump:".'$aaa8'." Удалили все элементы ".'unset($aaa8[$i])'."</b><br>";
    var_dump($aaa8);

    // Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).
    $aaa8[] = 6;
    echo "<br><b>print_r:".'$aaa8'." Добавили элемент ".'$aaa8[] = 6'."</b><br>";
    print_r($aaa8);

    // Переиндексация:
    $aaa8 = array_values($aaa8);
    echo "<br><b>print_r:".'$aaa8'." Переиндексировали массив ".'$aaa8 = array_values($aaa8)'."</b><br>";
    print_r($aaa8);

    $aaa8[] = 7;
    echo "<br><b>print_r:".'$aaa8'." Добавили элемент ".'$aaa8[] = 7'."</b><br>";
    print_r($aaa8);

    echo "<br><b>var_dump:".'$aaa8'." Удалили все элементы ".'$aaa8[] = 7'."</b><br>";
    var_dump($aaa8);



    echo "<hr><H2>10. Массив \$aaa9 Unset() к элементам масива и переиндексация массива функцией array_values() в другой массив</H2>";
    // Определение массива $aaa9
    $aaa9 = array(1 => 'один', 2 => 'два', 3 => 'три');
    echo "<br><b>print_r:".'$aaa9'."</b><br>";
    print_r($aaa9);

    echo "<br><b>var_dump:".'$aaa9'."</b><br>";
    var_dump($aaa9);
    
    echo "<br><b>print_r:".'$aaa7'." Удалили элемент массива".' unset($aaa9[2])'."</b><br>";
    unset($aaa9[2]);
    var_dump($aaa9);
    /* даст массив, представленный так:
       $aaa9 = array(1 => 'один', 3 => 'три');
       а НЕ так:
       $aaa9 = array(1 => 'один', 2 => 'три');
    */


    echo "<br><b>print_r:".'$bbb1'." Переиндексировали массив в другой массив ".'$bbb1 = array_values($aaa9)'."</b><br>";
    $bbb1 = array_values($aaa9);
    print_r($bbb1);
    // Теперь $b это array(0 => 'один', 1 => 'три')

    echo "<br><b>var_dump:".'$bbb1</b><br>';
    var_dump($bbb1);

    echo "<br><b>print_r:".'$aaa9'."</b><br>";
    print_r($aaa9);

    echo "<br><b>var_dump:".'$aaa9'."</b><br>";
    var_dump($aaa9);



    ?>
</pre>