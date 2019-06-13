<?php

namespace App\Http\Controllers;

/**
 * Division class
 */
class CalcDivide implements CalcI
{
    /**
     * Var to hold the sign
     *
     * @var string
     */
    private $sign = '/'; 

    /**
     * Function to calculate
     *
     * @param float $value1
     * @param float $value2
     * @return float|integer
     */
    public function calculate($value1, $value2)
    {
        return $value1 / $value2;
    }

    /**
     * Function to get the sign
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }
}
