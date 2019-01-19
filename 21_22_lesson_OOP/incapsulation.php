<?php

class Car
{
    protected $doors;

    public $type;

    public $color;

    public function __construct($type = false, $color = false, $doors = false)
    {
        $this->doors = !$doors ? 4 : $doors;
        $this->color = !$color ? 'black' : $color;
        $this->type = !$type ? 'default' : $type;
    }

    protected function setDoors()
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

//class Coupe extends Car
//{
//
//}
//
//class Limousin extends Car
//{
//
//}
//
//class AnotherCar extends Car
//{
//
//}

$coupe = new Car('coupe', 'red', 2);
$limousin = new Car('limousin', 'Blue', 6);
$simpleCar = new Car();

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