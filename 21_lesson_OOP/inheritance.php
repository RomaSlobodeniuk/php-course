<?php

abstract class AnimalParent
{
    public function say()
    {
        echo 'I am an animal!';
    }
}

class CowClass extends AnimalParent
{

}

$cowObject = new CowClass();
$cowObject->say(); // I am an animal!