<?php

namespace App\Http\Controllers;

/**
 * Interface for calculator operators
 */
interface CalcI
{
    /**
     * Function to do the calculation
     *
     * @param float $input1
     * @param float $input2
     * @return float|integer
     */
    public function calculate($input1,$input2);

    /**
     * Function to return the calc sign e.g '+'
     *
     * @return string
     */
    public function getSign();
}
