<?php

require_once '../helpers/functions.php';

session_start();

echo 'Welcome to the page dedicated to SESSION';

if (!empty($_SESSION['time']) && $_SESSION['time'] <= time()) {
    unset($_SESSION['time']);
    echo 'Сесія завершена!';
} else {
    $_SESSION['lang'] = 'PHP';
    $_SESSION['time'] = empty($_SESSION['time']) ? time() + 30 : $_SESSION['time'];
    echo 'У Вас є ' . date('s', ($_SESSION['time'] - time())) . ' секунд!';
}



debug($_SESSION);
