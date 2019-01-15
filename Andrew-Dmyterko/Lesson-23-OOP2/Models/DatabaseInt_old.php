<?php
///**
// * Реализация интерфейса Api\DatabaseInterface
// * User: sky_fox
// * Date: 27.12.18
// * Time: 19:54
// * Реализация интерфейса Api\DatabaseInterface
//
// */
//
//namespace Models;
//
//use Api\DatabaseInterfaceMy;
//
//class  DatabaseInt implements DatabaseInterfaceMy
//
//{
//    protected const PARAMS = [
//        'host' => 'localhost',
//        'user' => 'root',
//        'pass' => '650351',
//        'db'   => 'sky_fox_db'
//    ];
//
//    protected static $testDb = 'test';
//
//    public static function getConnection(&$error)
//    {
//        mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
//
//        $error = '';
//        try {
//            $connection = new \mysqli(
//                static::PARAMS['host'],
//                self::PARAMS['user'],
//                DatabaseInt::PARAMS['pass'],
//                self::PARAMS['db']
//            );
//        } catch (\Exception $e) {
//            $connection = false;
//            $error = '!!! Подключение не удалось: ' . $e->getMessage();
//        }
//
//        return $connection;
//    }
//
//    public static function closeConnection($connections)
//    {
//        return $connections->close();
//    }
//
////    Делаем insert в $table данных $param_for_insert через ','
//    public static function insert($table, $param_for_insert, &$error)
//    {
//        $error ='';
//        $db = DatabaseInt::getConnection($error); // Создаем подключение к БД
//
//        // Если нет ошибки подключения выполняем инсерт
//        if ($db) {
//
//            // Оборачиваем каждий элемент в кавычки
//            $param_for_insert = "'".implode("','", explode(',', $param_for_insert))."'";
//
//            // формируем запрос
//            $sql = "insert into $table values ($param_for_insert)";
//            echo $sql,"<br>";
//
//            try {
//                $result = $db->query($sql);
//            } catch (\Exception $e) {
//                $result = false;
//                $error = '!!! Ошибка при insert: ' . $e->getMessage();
//            }
////            if (!$result) $error = $db->error;
//
//            $close = DatabaseInt::closeConnection($db);
//
//            return $result;
//        }
//        else {
//
//            return $db;
//        }
//    }
//
////    Делаем select полей $filds_for_select из таблицы $table с параметрами $param_for_where
////    если filds_for_select null=*
////    $array - вид вывода true - массив false - объект
//    public static function select($table, $filds_for_select="*", $param_for_where="", $array, &$error)
//    {
//        $error ='';
//        $db = DatabaseInt::getConnection($error); // Создаем подключение к БД
//
//        mysqli_report(MYSQLI_REPORT_ALL^MYSQLI_REPORT_INDEX); // избавляемся от ошибки No index used in query/prepared statement
//
//        // Если нет ошибки подключения выполняем select
//        if ($db) {
//
//            // формируем поля запроса
//            if(empty(trim($filds_for_select," \t\n\r\0\x0B,"))) {
//                $filds_for_select = '*';
//            }
//
//            // парсим праметры заключаем все параметры после = в "
////            $param_for_where = preg_replace('/=[\s\t]*([\w-]+)/','="$1"', $param_for_where);
//
//            // формируем условие запроса
//            if(!empty(trim($param_for_where," \t\n\r\0\x0B,"))) {
//                $param_for_where = 'where '.$param_for_where;
//            }
//
//            // Получаем названия колонок
//            // Оборачиваем каждий элемент в кавычки
//            $filds_for_select1 = "'".implode("','", explode(',', $filds_for_select))."'";
//            $add = ($filds_for_select=='*') ? "" : " and COLUMN_NAME in ($filds_for_select1) " ;
////            echo $add;
////            $columName = "SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE()   AND TABLE_NAME = '$table' ORDER BY ORDINAL_POSITION;";
//            $columName = "SELECT COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE()   AND TABLE_NAME = '$table'". $add ."ORDER BY ORDINAL_POSITION;";
////            echo "@@@".$columName;
//            $colum = $db->query($columName);
//
//            $columName=[];
//            while ($raw = $colum->fetch_row()){
//                $columName[] = $raw;
//            }
//            echo "<pre>";
////            var_dump($columName);
//
//            // формируем запрос
//            $sql = "select $filds_for_select from $table $param_for_where";
//            echo $sql,"<br>";
//
//            try {
//                $result = $db->query($sql);
////                var_dump($result);
//
//                /* Читаем информацию по всем столбцам */
//                $finfo = $result->fetch_fields();
//                $finfoArray = [];
////var_dump($finfo);
//                foreach ($finfo as $val) {
//                    $finfoArray[$val->name] =  (array) $val;
//
//
////                            printf("Name:      %s\n",   $val->name);
////                            printf("Table:     %s\n",   $val->table);
////                            printf("Max. Len:  %d\n",   $val->max_length);
////                            printf("Length:    %d\n",   $val->length);
////                            printf("charsetnr: %d\n",   $val->charsetnr);
////                            printf("Flags:     %d\n",   $val->flags);
////                            printf("Type:      %d\n\n", $val->type);
//                }
////                        $result->free();
//
//
//
//                // проверяем выводить объектом или массивом или горизонтально
//                if ($array) {
//                    $temp = [];
//
//                    while ($row = $result->fetch_assoc()) {
//                        $temp[] = $row;
//                    }
////                    echo "@@@@@";
////                    var_dump($temp);
//                    $result=$temp;
//
//                    if ($array === 3) {
//
//
//                        // Формируем шапку для вывода метдом 2 через fetch_filds
//                        $string1 =  "<br> | ";
//                        $string2 =  "<br> +";
//                        foreach ($finfoArray as $idCol => $value) {
//
//                            $string1 = $string1 . str_pad($idCol, $value['max_length'] < strlen($idCol) ? strlen($idCol): $value['max_length']
//                                    , " ", STR_PAD_BOTH) . " | ";
//                            $string2 = $string2 . str_pad("-", $value['max_length'] < strlen($idCol) ? strlen($value['name'])+2 : $value['max_length']+2, "-", STR_PAD_BOTH) . "+";
//                        }
//                        echo $string2;
//                        echo $string1;
//                        echo $string2;
//
//
//
//
//
////                        $maxArray=[];
//////                        Заполняем массив $maxArray значениями по умолчанию
////                        foreach ($columName as $idCol => $value) {
////                            foreach ($value as $idCol1 => $col) {
////                                $maxArray[] = strlen($col);
////                            }
////                        }
////
////                        // Создаем массив длин элементов для корректного вывода в столбик
//////                        $maxArray=[];
////                        foreach ($result as $value) {
////                            foreach ($value as $id => $item) {
////                                if (!isset($maxArray[$id])) {$maxArray[] = 0;}
////                                if ($maxArray[$id] < strlen($item)) {
////                                    $maxArray[$id] = strlen($item);
////                                }
////                            }
////                        }
//////                        var_dump($maxArray);
////
////                        // Формируем шапку для вывода
////                        $string1 =  "<br> | ";
////                        $string2 =  "<br> +";
////                        foreach ($columName as $idCol => $value) {
////                            foreach ($value as $idCol1 => $col) {
////                                $string1 = $string1 . str_pad($col, $maxArray[$idCol], " ", STR_PAD_BOTH) . " | ";
////                                $string2 = $string2 . str_pad("-", $maxArray[$idCol]+2, "-", STR_PAD_BOTH) . "+";
////                            }
////                        }
////                        echo $string2;
////                        echo $string1;
////                        echo $string2;
//////                        str_pad($col, $maxArray[$idCol], " ", STR_PAD_BOTH);
//
//
//
//                        // Делаем вывод в столбик и дополняем пробелами для корректного вывода
//                        foreach ($result as $value) {
//
//                            $string = "<br> | ";
//                            foreach ($value as $id => $item) {
//                                $string = $string.str_pad($item, $finfoArray[$id]['max_length'] < strlen($id) ? strlen($id): $finfoArray[$id]['max_length'], " ", STR_PAD_LEFT)." | ";
//                            }
//                            echo $string;
//                        }
//                        echo $string2;
//
//
//
//
//
//
//
//
//                        $result=true;
//                    }
//                }
//            } catch (\Exception $e) {
//                $result = false;
//                $error = '!!! Ошибка при select: ' . $e->getMessage();
//                var_dump($error);
//            }
//
//            $close = DatabaseInt::closeConnection($db);
//            return $result;
//        }
//        else {
//
//            return $db;
//        }
//    }
//
////    Делаем update (полей с значениями) $param_for_set с параметрами $param_for_where
////    если при выполнении ошибка то вернет false текст ошибки вернет в $error
//    public static function update($table, $param_for_set, $param_for_where, &$error)
//    {
//        $error ='';
//        $db = DatabaseInt::getConnection($error); // Создаем подключение к БД
//
//        mysqli_report(MYSQLI_REPORT_ALL^MYSQLI_REPORT_INDEX); // избавляемся от ошибки No index used in query/prepared statement
//
//        // Если нет ошибки подключения выполняем select
//        if ($db) {
//
//            // парсим праметры заключаем все параметры после = в "
////            $param_for_where = preg_replace('/=[\s\t]*([\w-]+)/','="$1"', $param_for_where);
//
//            // формируем условие запроса
//            if(!empty(trim($param_for_where," \t\n\r\0\x0B,"))) {
//                $param_for_where = 'where '.$param_for_where;
//            }
//            // формируем условие SET
//            if(!empty(trim($param_for_set," \t\n\r\0\x0B,"))) {
//                $param_for_set = 'set '.$param_for_set;
//            }
//
//            // формируем запрос
//            $sql = "update $table $param_for_set  $param_for_where";
//            echo $sql,"<br>";
//
//            try {
//                $result = $db->query($sql);
//                var_dump($result);
//            } catch (\Exception $e) {
//                $result = false;
//                $error = '!!! Ошибка при select: ' . $e->getMessage();
//                var_dump($error);
//            }
//
//            $close = DatabaseInt::closeConnection($db);
//            return $result;
//        }
//        else {
//
//            return $db;
//        }
//    }
//
////    Делаем delete из таблицы $table с параметрами $param_for_where
////    если при выполнении ошибка то вернет false текст ошибки вернет в $error
//    public static function delete($table, $param_for_where="", &$error)
//    {
//        $error ='';
//        $db = DatabaseInt::getConnection($error); // Создаем подключение к БД
//
//        mysqli_report(MYSQLI_REPORT_ALL^MYSQLI_REPORT_INDEX); // избавляемся от ошибки No index used in query/prepared statement
//
//        // Если нет ошибки подключения выполняем select
//        if ($db) {
//
//            // парсим праметры заключаем все параметры после = в "
////            $param_for_where = preg_replace('/=[\s\t]*([\w-]+)/','="$1"', $param_for_where);
//
//            // формируем условие запроса
//            if(!empty(trim($param_for_where," \t\n\r\0\x0B,"))) {
//                $param_for_where = 'where '.$param_for_where;
//            }
//
//            // формируем запрос на удаление
//            $sql = "delete from $table $param_for_where";
//            echo $sql,"<br>";
//
//            try {
//                $result = $db->query($sql);
////                var_dump($result);
//            } catch (\Exception $e) {
//                $result = false;
//                $error = '!!! Ошибка при delete: ' . $e->getMessage();
//                var_dump($error);
//            }
//
//            $close = DatabaseInt::closeConnection($db);
//            return $result;
//        }
//        else {
//
//            return $db;
//        }
//    }
//}