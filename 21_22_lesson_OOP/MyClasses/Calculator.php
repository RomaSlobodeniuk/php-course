<?php

namespace MyClasses;

use Api\CalculatorInterface;

/**
 * Class Calculator
 * @package MyClasses
 */
class Calculator implements CalculatorInterface
{
    /**
     * @var bool|int
     */
    private $argument1;

    /**
     * @var bool|int
     */
    private $argument2;

    /**
     * @var bool|int
     */
    private $action;

    /**
     * @var bool|int
     */
    private $result;

    /**
     * Calculator constructor.
     * @param bool $arg1
     * @param bool $arg2
     * @param bool $act
     */
    public function __construct
    (
      $arg1 = false,
      $arg2 = false,
      $act = false
    ) {
        $this->argument1 = $arg1 !== false ? (int)$arg1 : 0;
        $this->argument2 = $arg2 !== false ? (int)$arg2 : 0;
        $this->action = $act !== false ? (int)$act : 1;

        switch ($this->action) {
            case 1:
                $this->add();
                break;
            case 2:
                $this->minus();
                break;
            case 3:
                $this->multiply();
                break;
            case 4:
                $this->divide();
                break;
        }
    }

    public function add()
    {
        $message = $this->argument1 . ' ' . __METHOD__ . ' ' . $this->argument2 . ' = ';
        $result = $this->argument1 + $this->argument2;
        $this->result = $message . $result;
    }

    public function minus()
    {
        $this->result = $this->argument1 - $this->argument2;
    }

    public function multiply()
    {
        $this->result = $this->argument1 * $this->argument2;
    }

    public function divide()
    {
        try {
            $this->result = $this->argument1 / $this->argument2;
        } catch (\Exception $exception) {
            $this->result = $exception->getMessage();
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}
