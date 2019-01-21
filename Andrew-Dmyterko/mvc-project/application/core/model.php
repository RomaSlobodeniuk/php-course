<?php

class Model
{
    /*
    Модель обычно включает методы выборки данных, это могут быть:
        > методы нативных библиотек pgsql или mysql;
        > методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
        > методы ORM;
        > методы для работы с NoSQL;
        > и др.
*/
    protected const PARAMS = [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '650351',
        'db'   => 'blog_db'
    ];

    public $error; // переменная ошибок

//  Метод подключения к БД
    public static function getConnection(&$error)
    {
        mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

        $error = '';
        try {
            $connection = new \mysqli(
                static::PARAMS['host'],
                self::PARAMS['user'],
                self::PARAMS['pass'],
                self::PARAMS['db']
            );
        } catch (\Exception $e) {
            $connection = false;
            $error = '!!! Подключение не удалось: ' . $e->getMessage();
        }
        return $connection;
    }

//  Метод закрытия соединение БД
    public static function closeConnection($connections)
    {
        return $connections->close();
    }


	// метод выборки данных
//    Метод получения данных с базы
    public function get_data($article_id = null, &$error)
    {
        $error = '';
        $db = self::getConnection($error); // Создаем подключение к БД

        mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX); // избавляемся от ошибки No index used in query/prepared statement

        // Если нет ошибки подключения выполняем select
        if ($db) {

            $param_for_where = '';

            // формируем условие запроса
            if (!empty(trim($article_id, " \t\n\r\0\x0B,"))) {
                $param_for_where = 'where id=' . $article_id;
            }

            // формируем запрос
            $sql = "select * from article $param_for_where order by date_create desc ";
//            echo $sql,"<br>";

            try {
                $data = $db->query($sql);
//                var_dump($result);

                $temp = [];

                while ($row = $data->fetch_assoc()) {
                    $temp[] = $row;
                }
                $data = $temp;
            } catch (\Exception $e) {
                $data = false;
                $error = '!!! Ошибка при select: ' . $e->getMessage();
//                var_dump($error);
            }
            $close = self::closeConnection($db);

            return $data;
        } else {

            return $db;
        }
    }
}