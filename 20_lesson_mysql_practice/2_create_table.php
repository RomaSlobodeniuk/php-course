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

$result = $db->query("DROP TABLE IF EXISTS `customers`");
$result = $db->query("CREATE TABLE `customers` (
                              `id` INT(11) NOT NULL AUTO_INCREMENT,
                              `email` VARCHAR(64) DEFAULT NULL,
                              `password` VARCHAR(64) DEFAULT NULL,
                              `name` VARCHAR(32) DEFAULT NULL,
                              `logo` TEXT,
                              `birth` DATE DEFAULT NULL,
                              `gender` CHAR(1) DEFAULT NULL,
                              PRIMARY KEY (`id`)
                            ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8"
);

$db->close();

