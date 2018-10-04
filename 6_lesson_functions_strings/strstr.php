<?php

require_once '../helpers/functions.php';

$email  = 'romsl1991@gmail.com';
$domain = strstr($email, '@');
echo $domain; // виводить @gmail.com
echo '<hr>';
$user = strstr($email, '@', true); // Починаючи з PHP 5.3.0
echo $user; // выводит romsl1991
