<?php

require_once ('../helpers/functions.php');

$params = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '',
    'database' => 'test'
];

$db = new \mysqli($params['host'], $params['user'], $params['password'], $params['database']);
$db->query("SET NAMES 'utf8'");

$result = $db->query("CREATE TABLE `test_table` (
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
$result = $db->query("INSERT INTO `test_table` VALUES
                                (NULL,'test@i.ua','hash1','Osborn','image1.jpeg','1994-11-15','1'),
                                (NULL,'romsl1991@gmail.com','hash2','Roma','image2.jpeg','1990-09-03','1'),
                                (NULL,'user@gmail.com.ua','hash3','Geralt','image3.jpeg','1986-03-10','1')"
);

$result = $db->query("TRUNCATE TABLE `test_table`");

$db->close();
