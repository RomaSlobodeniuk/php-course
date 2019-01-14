<?php

require_once '../helpers/functions.php';

class SetTest
{
    /**
     * Тут перевантаження буде використане тільки при доступі поза класом
     */
    private $number = 1;

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        echo "Запис значення '$value' в '$name'<br>";
        $this->$name = $value;
    }

    public function __get($name)
    {
        echo "Отримання властивості '$name' з допомогою магії:<br>";
        return $name === 'number'
            ? $this->getNumber()
            : 'Властивості з таким іменем НЕ ІСНУЄ!';
    }

    /**
     * Не магічний метод, просто для прикладу
     */
    public function getNumber()
    {
        return $this->number;
    }
}

$setTest = new SetTest();
debug($setTest->number);
$setTest->number = 123;

debug($setTest->number);
debug($setTest->noWay);
