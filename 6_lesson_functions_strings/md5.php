<?php

require_once '../helpers/functions.php';

$passwordString = 'userPasSword_123';
$passwordHash = md5($passwordString);
echo $passwordHash; //af8106b8be5265c52e23c3fc05bede2b

function getUserHashFromDb() {
    return 'af8106b8be5265c52e23c3fc05bede2b';
}

echo '<hr>';

if ($passwordHash === getUserHashFromDb()) {
    echo 'Password hash is correct, so we can allow to login for user!';
}