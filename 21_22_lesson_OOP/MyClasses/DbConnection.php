<?php

namespace MyClasses;

class DbConnection
{
    protected const PARAMS = [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db' => 'my_db'
    ];

    public static $testDb = 'test';

    public static function getConnections()
    {
        $connection = new \mysqli(
            static::PARAMS['host'],
            self::PARAMS['user'],
            DbConnection::PARAMS['pass'],
            self::$testDb
        );

        return $connection;
    }
}

DbConnection::$testDb = 'Const New';
$testDbName = DbConnection::$testDb;

$objectConnection = DbConnection::getConnections();


var_export($testDbName);