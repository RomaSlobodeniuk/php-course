<?php

// Разбираю функции

////Пример #2 Функции, зависящие от условий
//
//$makefoo = true;
//
///* Мы не можем вызвать функцию foo() в этом месте,
//   поскольку она еще не определена, но мы можем
//   обратиться к bar() */
//
//bar();
//
//if ($makefoo) {
//    function foo()
//    {
//        echo "Я не существую до тех пор, пока выполнение программы меня не достигнет.\n";
//    }
//}
//
///* Теперь мы благополучно можем вызывать foo(),
//   поскольку $makefoo была интерпретирована как true */
//
//if ($makefoo) foo();
//
//function bar()
//{
//    echo "Я существую сразу с начала старта программы.\n";
//}
//
//

//function foo()
//{
//    function bar()
//    {
//        echo "Я не существую пока не будет вызвана foo().\n";
//    }
//}
//
///* Мы пока не можем обратиться к bar(),
//   поскольку она еще не определена. */
//
//foo();
//
///* Теперь мы можем вызвать функцию bar(),
//   обработка foo() сделала ее доступной. */
//
//bar();
//
//
//function myFunc(...$arguments){
//    echo "<pre>";
//    var_dump($arguments);
//    echo "</pre>";
//}
//
//function myFunc1($arguments1){
//    echo "<pre>";
//    var_dump($arguments1);
//    echo "</pre>";
//}
//
//myFunc("first param", "2 param", 123, 123.77, false, true, ['q','s','d','ff',[1,2,3,4,5]] );
//
//
//myFunc1([11,22,33,44,55,66,77,88,['zz','xx','ff','gg']]);
//
//



function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

function factorial ($x) {
    if ($x === 0) {
        return 1;
    }
    else return $x * factorial($x-1);
}



recursion(5);
echo "<br>";
echo factorial(7);



?>





