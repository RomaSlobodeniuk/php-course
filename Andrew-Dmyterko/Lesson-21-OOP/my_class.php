<?php

abstract class Table
{
    public $leg;
    public $color;
    public $material;
    private $forma;


    public function __construct($leg=8)
    {
        $this->forma = $this->setForma();
        $this->leg = $this->setLeg($leg);
    }

    private function setForma()
    {
        if (($this->color === 'brown') && ($this->material === 'wooden')) {
            return "cube";
        } else {
            return "ХЗ";
        }
    }

    private function setLeg($leg)
    {
            return $leg ;
    }

    abstract function sqeare($x,$y) ;

    public function getForma()
    {
        return $this->forma;
    }
}

class myTable extends Table
{
    public function sqeare($x, $y)
    {
        return $x*$y; // TODO: Implement sqeare() method.
    }

    public $leg = 4;
    public $color = 'brown';
    public $material = "wooden";

}

class myHZTable extends Table
{
    public function sqeare($x, $y)
    {
        return $x*$y; // TODO: Implement sqeare() method.
    }
//
//    public $leg = 4;
//    public $color = 'brown';
//    public $material = "wooden";

}



$myTable = new myTable(44);

echo $myTable->getForma();
echo "<br>";
echo $myTable->sqeare(2,3);
echo "<br>";
//$myTable->leg = 4;
echo $myTable->leg;
echo "<br>";
echo $myTable->material;


$myHZTable = new myHZTable();
echo "<br>";
echo $myHZTable->getForma();
echo "<br>";
echo $myHZTable->leg;

