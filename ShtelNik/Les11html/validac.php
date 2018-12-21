<?php
$LPE = $_POST;
echo "Наш сервер принял от Вас следующую информацию: <br>";
var_dump($LPE); // Выводим введеное юзером

//по-умолчанию считаем, что юзер допустил ошибки
$vLog = false;
$vPsw1 = false;
$vPsw2 = false;
$vEmail = false;

//функция валидации логина регулярным выражением
function validLog($Log,&$vLog) {
    preg_match('/([\w]){1,6}/', $Log, $mach);
    if (! empty($mach[0])) {
        echo "Вы ввели годный Login",'<br>';
        var_export($Log);
        $vLog = true;
    }
    else {
        echo 'Ваш Login не годен!!','<br>';
        echo '<a href="index.html">Вернитесь назад и введите грамотно!!
        <input type="button" name="backLog" required value="Вернуться"></a>','<br />';
    }
    echo '<br>','<br>';
}

//функция валидации пароля регулярным выражением
function validPsw1($Psw1,&$vPsw1) {
    preg_match('/([\w]){1,6}/', $Psw1,$mach);
    if (! empty($mach[0])) {
        echo "Вы ввели годный пароль ",'<br>';
        var_export($Psw1);
        $vPsw1 = true;
    }
    else {
        echo 'Ваш пароль не годен!!','<br>';
        echo '<a href="index.html">Вернитесь назад и введите грамотно!!
        <input type="button" name="backPsw1" required value="Вернуться"></a>','<br />';
    }
    echo '<br>','<br>';
}

//функция валидации пароля сравнением с предыдущим паролем
function validPsw2($Psw1,$Psw2,&$vPsw2) {
    if ($Psw1===$Psw2) {
        echo "Вы верно повторили пароль",'<br />';
        var_export($Psw2);
        $vPsw2 = true;
    }
    else {
        echo 'Вы НЕ верно повторили пароль!!','<br />';
        echo '<a href="index.html">Вернитесь назад и введите грамотно!!
        <input type="button" name="backPsw2" required value="Вернуться"></a>','<br />';
    }
    echo '<br />','<br />';
}

//функция валидации Е-мейла регулярным выражением
function validEmail($Email,&$vEmail) {
    preg_match('/^([\w\-]([\w\-\.]{0,18}[\w\-])|([\w\-]{0,19}))(@)([a-zA-Z]{1,10})(\.)([a-z]{2,4})$/', $Email,$mach);
    if (! empty($mach[0])) {
        echo "Вы ввели годный Email",'<br />';
        var_export($mach[0]);
        $vEmail = true;
    }
    else {
        echo 'Ваш Email не годен!!','<br />';
        echo '<a href="index.html">Вернитесь назад и введите грамотно!!
        <input type="button" name="backEmail" required value="Вернуться"></a>','<br />';
    }
    echo '<br>','<br>';
}

validLog($LPE['login'],$vLog);
validPsw1($LPE['password1'],$vPsw1);
validPsw2($LPE['password1'],$LPE['password2'],$vPsw2);
validEmail($LPE['email'],$vEmail);

if ($vLog && $vPsw1 && $vPsw2)  {
    session_start();
    $_SESSION['data'] = $LPE;
    print_r ($_SESSION);
    echo '<br>','<br>';
    var_dump ($_SESSION);
    echo '<br>','<br>';
    echo '<a href="page3.php">Маладца!!! Жми WellCome, захады на наш сайт!! 
        <input type="button" name="backEmail" required value="WellCome"></a>','<br />';
}
else {
    echo 'Все печально :((','<br />';
    echo '<a href="index.html">Вернитесь назад и введите грамотно!!
        <input type="button" name="backAll" required value="Вернуться"></a>','<br />';
}
/* & $vEmail
*/



?>