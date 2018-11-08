<?php

require_once '../helpers/functions.php';

session_start();

echo 'Welcome to the page dedicated to SESSION';

$_SESSION['lang'] = 'PHP';
$_SESSION['time'] = time();

debug($_SESSION);
