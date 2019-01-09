<?php

namespace Api;

interface DatabaseInterface
{
    public static function getConnection();

    public static function insert($table, $params);

    public static function select($table, $params);

    public static function update($table, $params);

    public static function delete($table, $params);

    public static function closeConnection();
}
