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

$result = $db->query("LOCK TABLES `users` WRITE");
for ($i = 0; $i < 10000; $i++) {
    $newValue = md5($i);
    $sqlQuery = "INSERT INTO {$table} VALUES (NULL,'test{$i}@i.ua',md5($i),'Test{$i}','{$newValue}','1984-12-01','1')";
    $result = $db->query($sqlQuery);
}

$result = $db->query("UNLOCK TABLES");

$db->close();
