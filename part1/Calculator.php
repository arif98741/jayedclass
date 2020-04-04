<?php
/**
 * Object Oriented Programming
 * Date: 04:04:2020
 * By: Ariful Islam
 */

/**
 * Class Calculator
 */
class Calculator
{
    public $number1;
    public $number2;


    /**
     * Class Definition
     * Calculator constructor.
     * @param $number1
     * @param $number2
     */
    public function __construct($number1, $number2)
    {
       $this->number1 = $number1;
       $this->number2 = $number2;
    }

    public function addition()
    {
        $result = $this->number1 + $this->number2;
        return $result;
    }


    public function multiplication()
    {
        return $this->number1 * $this->number2;
    }

    public function __destruct()
    {
        $this->number1 = null;
        $this->number2 = null;
    }
}




