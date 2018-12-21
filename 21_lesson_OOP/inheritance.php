<?php

abstract class AnimalParent
{
    public $legs = 4;

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
echo '<br>';
//echo $cowObject->legs; // 4

$cowObject2 = clone $cowObject;
$cowObject2->legs = 2;

echo '<br>';
echo $cowObject->legs; // 4
echo '<br>';
echo $cowObject2->legs; // 2