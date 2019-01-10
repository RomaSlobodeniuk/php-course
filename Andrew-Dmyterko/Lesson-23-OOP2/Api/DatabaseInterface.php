<?php
/**
 * Интерфейс для работы с базой
 */

namespace Api;

interface DatabaseInterface
{
//    Создаем подключение к БД агрументы подключения указаны в коде static функци getConnection()
//    если при выполнении ошибка то вернет false текст ошибки вернет в $error
    public static function getConnection(&$error);

//    Закрываем соединение БД в виде аргумента передаем объект подключения
    public static function closeConnection($connections);

//    Делаем insert в $table данных $param_for_insert через ','
//    если при выполнении ошибка то вернет false текст ошибки вернет в $error
    public static function insert($table, $param_for_insert, &$error);

//    Делаем select полей $filds_for_select из таблицы $table с параметрами $param_for_where
//    если filds_for_select null=*
//    $array - вид вывода true - массив false - объект 3- горизонтальный вывод
//    если при выполнении ошибка то вернет false текст ошибки вернет в $error
    public static function select($table, $filds_for_select, $param_for_where, $array, &$error);

//    Делаем update (полей с значениями через ',') $param_for_set с параметрами $param_for_where
//    если при выполнении ошибка то вернет false текст ошибки вернет в $error
    public static function update($table, $param_for_set, $param_for_where, &$error);

//    Делаем delete из таблицы $table с параметрами $param_for_where
//    если при выполнении ошибка то вернет false текст ошибки вернет в $error
    public static function delete($table, $param_for_where, &$error);



}
