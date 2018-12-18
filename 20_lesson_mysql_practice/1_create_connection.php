<?php

require_once ('../helpers/functions.php');

$params = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '',
    'database' => 'my_db'
];

try {
    $db = new \mysqli($params['host'], $params['user'], $params['password'], $params['database']);
} catch (\Exception $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

$db->query("SET NAMES 'utf8'");

$result = $db->query("SELECT * FROM customers");
$customers = [];
while ($row = $result->fetch_assoc()) {
    $customers[] = $row;
}

$db->close();

debug([
    'Customers using "mysqli"' => $customers
]);

$dsn = "mysql:dbname={$params['database']};host={$params['host']}";
$user = 'root';
$password = '';

try {
    $pdo = new \PDO($dsn, $params['user'], $params['password']);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

$statement = $pdo->prepare("SET NAMES 'utf8'");
$statement->execute();

$statement = $pdo->prepare("SELECT * FROM customers");
$statement->execute();
$users = $statement->fetchAll(2);
unset($statement);
debug([
    'Users using "PDO"' => $users
]);
