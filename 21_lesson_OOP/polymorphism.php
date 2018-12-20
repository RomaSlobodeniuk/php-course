<?php

abstract class Animal
{
    public function say(){}
}

class Cat extends Animal
{
    public function say()
    {
        echo 'Meow!';
    }
}

class Dog extends Animal
{
    public function say()
    {
        echo 'Woof!';
    }
}

class Cow extends Animal
{
    public function say()
    {
        echo 'Moo!';
    }
}

foreach (['Cat', 'Dog', 'Cow'] as $animalClass) {
    $animalObject = new $animalClass();
    echo "$animalClass says: ";
    $animalObject->say();
    echo '<br>';
}