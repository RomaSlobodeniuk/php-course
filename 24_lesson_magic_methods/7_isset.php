<?php

require_once '../helpers/functions.php';

class IssetTest
{
    /**
     * Тут перевантаження буде використане тільки при доступі поза класом
     */
    public $phrase = 'Isset Testing';

    /**
     * Починаючи з PHP 5.1.0
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        echo "Чи існує змінна з іменем '$name'?<br>";
        return isset($this->$name);
    }
}

$issetTest = new IssetTest();
$result = isset($issetTest->a) ? $issetTest->a : 'Not set!';
debug($result);

$result = isset($issetTest->phrase) ? $issetTest->phrase : 'Not set!';
debug($result);