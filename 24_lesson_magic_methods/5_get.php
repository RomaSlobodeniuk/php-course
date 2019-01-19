<?php

require_once '../helpers/functions.php';

class GetTest
{
    /**
     * Тут перевантаження буде використане тільки при доступі поза класом
     */
    private $number = 5;

    public function __get($name)
    {
        echo "Отримання '$name'<br>";

        $trace = debug_backtrace();
        trigger_error(
            'Невизначена властивість в __get(): ' . $name .
            ' у файлі ' . $trace[0]['file'] .
            ' на строці ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    /**
     * Не магічний метод, просто для прикладу
     */
    public function getNumber()
    {
        return $this->number;
    }
}

$getTest = new GetTest;
$getTest->number;

debug($getTest->getNumber());