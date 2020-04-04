<?php


class AdvanceCalculator extends  Calculator
{

    /**
     * Inheritance
     * Calculator constructor.
     * @param $number1
     * @param $number2
     */

    public $result;
    public $details;


    public function __construct($number1, $number2)
    {
        parent::__construct($number1, $number2);
    }

    /**
     *
     */
    public function division()
    {
        $this->result =  $this->number1/$this->number2;
        return $this;
    }


    public function showValue()
    {
        $this->details = 'The value is '.$this->result;
        return $this;
    }



}