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

//$result = $db->query("RENAME TABLE `customers` TO `users`");
//$result = $db->query("ALTER TABLE `customers` RENAME `users`");

//$result = $db->query("ALTER TABLE `users` CHANGE `gender` `gender` SMALLINT(1) NOT NULL DEFAULT 0");
//$result = $db->query("ALTER TABLE `users` MODIFY `birth` TIMESTAMP");
$result = $db->query("ALTER TABLE `navigation` CHANGE `customer_id` `active` TINYINT(1) NOT NULL DEFAULT 0");

$db->close();
