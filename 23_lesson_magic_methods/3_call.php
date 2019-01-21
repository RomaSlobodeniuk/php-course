<?php

class SimpleMethodTest
{
    /**
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        // Примітка: значення $name не залежить від регістру
        echo "Виклик метода '$name' " . implode(', ', $arguments) . "<br>";
    }
}

$test = new SimpleMethodTest;
$test->runTest('Param_1', 'Param_2', 12, true);