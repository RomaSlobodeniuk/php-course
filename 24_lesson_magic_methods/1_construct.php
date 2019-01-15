<?php

class MainClass
{
    function __construct()
    {
        echo "Конструктор класа MainClass<br>";
    }
}

class ChildClass extends MainClass
{
    function __construct()
    {
        parent::__construct();
        echo "Конструктор класа ChildClass<br>";
    }
}

class OneMoreChildClass extends MainClass
{
    // унаслідує конструктор MainClass
}

// Конструктор класа MainClass
$object = new MainClass();

// Конструктор класа MainClass
// Конструктор класа ChildClass
$object = new ChildClass();

// Конструктор класа MainClass
$object = new OneMoreChildClass();