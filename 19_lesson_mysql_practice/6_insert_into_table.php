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

$result = $db->query("INSERT INTO `customers` VALUES
  (NULL,'test1@i.ua',md5('1'),'Test1','.\\/assets\\/images\\/logos\\/c81e728d9d4c2f636f067f89cc14862c.jpeg','1984-12-01','0'),
  (NULL,'test2@i.ua',md5('2'),'Test2','.\\/assets\\/images\\/logos\\/c81e728d9d4c2f636f067f89cc14862c.jpeg','1984-12-02','2'),
  (NULL,'test3@i.ua',md5('3'),'Test3','.\\/assets\\/images\\/logos\\/c81e728d9d4c2f636f067f89cc14862c.jpeg','1984-12-03','2'),
  (NULL,'test4@i.ua',md5('4'),'Test4','.\\/assets\\/images\\/logos\\/c81e728d9d4c2f636f067f89cc14862c.jpeg','1984-12-04','2'),
  (NULL,'test5@i.ua',md5('4'),'Test5','.\\/assets\\/images\\/logos\\/c81e728d9d4c2f636f067f89cc14862c.jpeg','1984-12-05','2'),
  (NULL,'koegorn@i.ua',md5('111'),'Koegorn','.\\/assets\\/images\\/logos\\/c81e728d9d4c2f636f067f89cc14862c.jpeg','1986-11-15','1'),
  (NULL,'romsl1991@gmail.com',md5('222'),'Roma','.\\/assets\\/images\\/logos\\/c4ca4238a0b923820dcc509a6f75849b.jpeg','1991-08-16','1')"
);

$result = $db->query("UNLOCK TABLES");

$db->close();
