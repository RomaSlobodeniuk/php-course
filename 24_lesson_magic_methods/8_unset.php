<?php

class UnsetTest
{
    /**
     * Тут перевантаження буде використане тільки при доступі поза класом
     */
    private $number = 5;

    /**
     * Починаючи з PHP 5.1.0
     * @param $name
     */
    public function __unset($name)
    {
        echo "Знищення неіснуючої властивості '$name'<br>";
    }
}


$unsetTest = new UnsetTest;
unset($unsetTest->someVariable);