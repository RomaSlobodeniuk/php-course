<?php

class StaticMethodTest
{
    /**
     * Починаючи з PHP 5.3.0
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        // Примітка: значення $name не залежить від регістру
        echo "Виклик статичного метода '$name' " . implode(', ', $arguments) . "<br>";
    }
}

StaticMethodTest::runTest('Static Context', true);  // Починаючи з PHP 5.3.0