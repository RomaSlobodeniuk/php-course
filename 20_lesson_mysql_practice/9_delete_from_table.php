<?php

require_once ('../helpers/functions.php');

$params = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '',
    'database' => 'my_db'
];

$db = new \mysqli($params['host'], $params['user'], $params['password'], $params['database']);
$db->query("SET NAMES 'utf8'");

$result = $db->query("DELETE FROM `users` WHERE `gender` = 2 AND `name` = 'Test2'");
$result = $db->query("DELETE FROM `users` WHERE `gender` > 1 OR `gender` = 0");

$db->close();
