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

$result = $db->query("SELECT * FROM `users`");
$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

debug($users);

$result = $db->query("SELECT count(*) AS COUNT FROM `users`");
$usersCount = $result->fetch_row();
debug($usersCount);

$result = $db->query("SELECT `email` FROM `users` WHERE `name` = 'Roma' LIMIT 1");
$userEmail = $result->fetch_row();
debug($userEmail);

$result = $db->query("SELECT `name` FROM `users` WHERE `gender` > 0");
$setUsers = [];
while ($row = $result->fetch_assoc()) {
    $setUsers[] = $row;
}

debug($setUsers);

$result = $db->query("SELECT `gender`, count(*) AS COUNT FROM `users` GROUP BY `gender`");
$groupedUsers = [];
while ($row = $result->fetch_assoc()) {
    $groupedUsers[] = $row;
}

debug($groupedUsers);

$db->close();
