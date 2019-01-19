<?php

require_once '../helpers/functions.php';

session_start();

echo 'Welcome to the page dedicated to SESSION';

    $_SESSION['lang'] = 'PHP';


    echo $_SESSION['lang'];
    echo $_SESSION['lang1'];
    echo empty($_SESSION['lang1']);

    if (empty($_SESSION['lang1'])) {
        echo "<br>!!!@@@@";
    }


//if (!empty($_SESSION['time']) && $_SESSION['time'] <= time()) {
//    unset($_SESSION['time']);
//    echo 'Сесія завершена!';
//} else {
//    $_SESSION['lang'] = 'PHP';
//    $_SESSION['time'] = empty($_SESSION['time']) ? time() + 30 : $_SESSION['time'];
//    echo 'У Вас є ' . date('s', ($_SESSION['time'] - time())) . ' секунд!';
//}



debug($_SESSION);