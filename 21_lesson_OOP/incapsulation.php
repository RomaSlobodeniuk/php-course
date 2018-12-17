<?php

abstract class Car
{
    private $doors;

    public $type;

    public $color;

    public function __construct()
    {
        $this->doors = $this->setDoors();
    }

    private function setDoors()
    {
        if ($this->type === 'coupe') {
            return 2;
        } elseif ($this->type === 'limousin') {
            return 6;
        } else {
            return 4;
        }
    }

    public function getDoors()
    {
        return $this->doors;
    }
}

class Coupe extends Car
{
    public $color = 'red';
    public $type = 'coupe';

}

class Limousin extends Car
{
    public $color = 'Blue';
    public $type = 'limousin';
}

class AnotherCar extends Car
{
    public $color = 'Yellow';
    public $type = 'default';
}

$coupe = new Coupe();
$limousin = new Limousin();
$simpleCar = new AnotherCar();

echo 'Coupe has:' . '<br>';
echo 'color: ' . $coupe->color . '<br>';
echo 'type: ' . $coupe->type . '<br>';
echo 'doors: ' . $coupe->getDoors();
echo '<hr>';

echo 'Limousin has:' . '<br>';
echo 'color: ' . $limousin->color . '<br>';
echo 'type: ' . $limousin->type . '<br>';
echo 'doors: ' . $limousin->getDoors() . '<br>';
echo '<hr>';

echo 'Simple car has:' . '<br>';
echo 'color: ' . $simpleCar->color . '<br>';
echo 'type: ' . $simpleCar->type . '<br>';
echo 'doors: ' . $simpleCar->getDoors();