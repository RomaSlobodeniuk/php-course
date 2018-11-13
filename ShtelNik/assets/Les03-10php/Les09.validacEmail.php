<?php
    echo "Hello Lesson_09 <br>";
    echo "<br>";

    echo "Lesson_09 Task_01 <br>";
    echo "Написать RegEx для валидации E-mail <br>";
    echo "Доп.условия: до @ - не более 20 симв., после @ - не более 10 симв., после точки - не более 4 симв.<br /><br />";
    //создаем вспомогательную функцию для вывода массива на екран
    function debug($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    //сначала создаем массив е-мэйлов для проверки работы нижеописаного кода
    echo "сначала создаем массив е-мэйлов для проверки работы кода по валидации E-mail <br>";
    $txt = [
        "1.Good-Email_is.2@mail.com",
        "_Good.0uoll@yukkl.com",
        "11Good-Email_is22@mail.com",
        "---___Good.Email.is-@mail.com",
        "_Good.0uoll@yukkl.com",
        "q@i.ua",
        "Bad@digits.com223",
        "Bad_Email_ismail.com",
        "Bad_Email_ismail@com",
        ".Bad-BeginPoint@yukkl.com",
        "Bad)=Symbol@yukkl.com",
        "BadEmail-More_20simbol_is@mail.com",
        "Bad_Email..2point@mail.com",
        "Bad_Email.EndPoint.@mail.com",
        "Bad_Email.EndPoint.@@mail.com",
     ];
    //теперь сам код с встроенным RegEx-ом
    echo "затем создаем сам код с регулярным выражением для валидации E-mail <br>";
    echo "и выводим результаты валидации E-mail из массива <br><br>";
    foreach ($txt as $str) {
        echo 'Проверяем на валидность следующий E-mail: <br />';
        echo $str, '<br />';
        //Регулярное выражение для валидации E-mail:
        preg_match('/^([\w\-]([\w\-\.]{0,18}[\w\-])|([\w\-]{0,19}))(@)([a-zA-Z]{1,10})(\.)([a-z]{2,4})$/', $str,$mach);
        if (! empty($mach[0])) {
            echo 'Это годный E-mail: <br />';
            debug($mach);
        }
        else {
            echo 'Непавильный формат E-mail!!! ','<br />';
        }
        echo '<br />','<br />';
    }

    echo "Fin_Lesson_09 Task_01 <br />";

?>

