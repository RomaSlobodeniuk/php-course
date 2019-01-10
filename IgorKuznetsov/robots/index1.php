<?php

abstract class Tree
{
    private $height;
    public $type;
    public $color;
    public $countOfLeaves;
    public function __construct(){$this->countOfLeaves = $this->setCountOfLeaves();}
    private function setCountOfLeaves(){
        if($this->type === 'spruce'){
            return $this->countOfLeaves = 10;
        } elseif ($this->type === 'oak') {
            return $this->countOfLeaves = 5;
        } else {
            return $this->countOfLeaves = 999999;
        }
    }
    public function getColors(){
        return $this->color;
    }
}

class Spruce extends Tree {
    public $color = 'green';
    public $type = 'spruce';
}

class Oak extends Tree {
    public $color = 'yellow';
    public $type = 'oak';
}

class Hemp extends Tree {
    public $color = 'yellow and red and green';
    public $type = 'someHight';
}

$spruce = new Spruce();
$oak = new Oak();
$hemp = new Hemp();

echo 'Spruse has: ' . '<br>';
echo 'color: ' . $spruce->color . '<br>';
echo 'type: ' . $spruce->type . '<br>';





