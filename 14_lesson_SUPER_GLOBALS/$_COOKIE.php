<?php

require_once '../helpers/functions.php';

$value = 'Sweet Cookie for all!';

setcookie("test_cookie", $value);
setcookie("test_cookie", $value, time() + 3600);  /** строк дії 1 год */
setcookie(
        "test_cookie",
        $value,
        time() + 3600,
        '/opt/lampp/htdocs/php_course/14_lesson_SUPER_GLOBALS/',
        "localhost",
        1
);

debug($_COOKIE);