<?php


$my_mail='kovslim@ukr.net';
$regexp = '/^([a-z0-9_]{3,20}@[a-z0-9_]{2,10}\.[a-z]{1,4})$/i';

if (preg_match($regexp, $my_mail, $matches)) {
    echo $matches[1] . ' - Email is valid!';
} else {
    echo 'Email is NOT valid!';
}


