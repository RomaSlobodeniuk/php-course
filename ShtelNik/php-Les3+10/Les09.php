<?php
    echo "Hello Lesson_09 <br>";
    echo "<br>";

    echo "Lesson_09 Task_01 <br>";
    echo "Написать RegEx для валидации E-mail <br>";
    echo "Доп.условия: до @ - не более 20 симв., после @ - не более 10 симв., после точки - не более 4 симв.<br /><br />";
    //сначала накидаем массив е-мэйлов для проверки работы нижеописаного кода
    $txt = [
        "1.Good-Email_is.2@mail.com",
        "_Good.0uoll@yukkl.com",
        "11Good-Email_is22@mail.com",
        "---___Good.Email.is-@mail.com",
        "_Good.0uoll@yukkl.com",
        "Bad@digits.com223",
        "Bad_Email_ismail.com",
        "Bad_Email_ismail@com",
        ".Bad-BeginPoint@yukkl.com",
        "Bad)=Symbol@yukkl.com",
        "BadEmail-More_20simbol_is@mail.com",
        "Bad_Email..2point@mail.com",
        "Bad_Email.EndPoint.@mail.com",
        "Bad_Email.EndPoint.@@mail.com",
        "q@i.ua"
    ];
    //теперь сам код с встроенным RegEx-ом
    foreach ($txt as $str) {
        echo $str, '<br />';
        echo ' Регулярное выражение: <br />';
        //preg_match('/(^[a-zA-Z0-9_\-][a-zA-Z0-9_\-\.]{0,18}[a-zA-Z0-9_\-]?@[a-zA-Z]{1,10}\.[a-z]{2,4}$)/', $str,$mach);
        preg_match('/^([\w\-][\w\-\.]{0,18}[\w\-])@([a-zA-Z]{1,10})\.([a-z]{2,4})$/', $str,$mach);
        if (! empty($mach[0])) {
        var_export($mach);
        }
        else {
            echo 'ЛОШАРА!!!!','<br />';
        }
        echo '<br />','<br />';
    }

    echo "Fin_Lesson_09 Task_01 <br />";

?>

