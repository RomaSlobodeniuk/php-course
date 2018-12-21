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

$result = $db->query("ALTER TABLE `users` ADD UNIQUE(`email`)");
$result = $db->query("ALTER TABLE `users` ADD FULLTEXT(`logo`)");
$result = $db->query("ALTER TABLE `users` ADD INDEX(`gender`)");

$result = $db->query("ALTER TABLE `users` DROP INDEX `email`");
$result = $db->query("ALTER TABLE `users` DROP INDEX `logo`");
$result = $db->query("ALTER TABLE `users` DROP INDEX `gender`");


$result = $db->query("CREATE UNIQUE INDEX unique_email ON `users` (`email`)");
$result = $db->query("CREATE FULLTEXT INDEX fulltext_logo ON `users` (`logo`)");
$result = $db->query("CREATE INDEX index_gender ON `users` (`gender`)");

$result = $db->query("DROP INDEX unique_email ON `customers`");
$result = $db->query("DROP INDEX fulltext_logo ON `customers`");
$result = $db->query("DROP INDEX index_gender ON `customers`");

$db->close();

debug($customers);
