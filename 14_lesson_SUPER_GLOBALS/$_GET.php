<?php

require_once '../helpers/functions.php';

/**
 * http://localhost/php_course/14_lesson_SUPER_GLOBALS/$_GET.php?name=Roma&surname=Slobodeniuk
 */

if (empty($_GET)) {
    debug('NO GET PARAMS');
}

if (!empty($_GET['name'])) {
    debug('User name: "' . $_GET['name'] . '"');
}

if (!empty($_GET['surname'])) {
    debug('User surname: "' . $_GET['surname'] . '"');
}