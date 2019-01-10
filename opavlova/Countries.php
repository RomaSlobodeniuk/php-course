<?php
abstract class Countries
{
    public $capital;
    public $type;
    public $currency;
    public $head;
    public function __construct()
    {
        $this->head = $this->setHead();
    }

    private function setHead() {
        if ($this->type === 'monarchy') {
            return 'King';
        } elseif ($this->type === 'republic') {
            return 'president';
        } else {
            return 'who knows';
        }
    }
    public function getHead() {
        return $this->head;
    }
}
class GreatBritain extends Countries
{
    public $capital = 'London';
    public $type = 'monarchy';
    public $currency = 'GBP';
}
class Poland extends Countries
{
    public $capital = 'Warsaw';
    public $type = 'republic';
    public $currency = 'PZL';

}
class AnotherCountry extends Countries
{
    public $type = 'default';
    public $currency = 'EUR';
}
$GreatBritain = new GreatBritain();
$Poland = new Poland();
$AnotherCountry = new AnotherCountry();

echo 'GreatBritain is:' . '<br>';
echo 'type: ' . $GreatBritain->type . '<br>';
echo 'currency: '.$GreatBritain->currency . '<br>';
echo 'capital: ' . $GreatBritain->capital . '<br>';
echo 'head: ' . $GreatBritain->getHead();
echo '<hr>';
echo 'Poland is:' . '<br>';
echo 'type: ' . $Poland->type . '<br>';
echo 'currency: '.$Poland->currency . '<br>';
echo 'capital: ' . $Poland->capital . '<br>';
echo 'head: ' . $Poland->getHead();
echo '<hr>';
echo 'AnotherCountry:' . '<br>';
echo 'type: ' . $AnotherCountry->type . '<br>';
echo 'currency: '.$AnotherCountry->currency . '<br>';
echo 'head: ' . $AnotherCountry->getHead();


