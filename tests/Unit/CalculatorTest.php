<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\CalcFactory;

/**
 * Test class for Calculator
 */
class CalculatorTest extends TestCase
{
    /**
     * Test can create addition class and returns correct value
     *
     * @return void
     */
    public function testCreateAndExecuteAddition()
    {
        $calc = CalcFactory::build('add');
        $sum = $calc->calculate(2,2);

        $this->assertEquals($sum,4);
    }

    /**
     * Test can create subtraction class and returns correct value
     *
     * @return void
     */
    public function testCreateAndExecuteSubtraction()
    {
        $calc = CalcFactory::build('subtract');
        $sum = $calc->calculate(4.3,2);

        $this->assertEquals($sum,2.3);
    }

    /**
     * Test can create division class and returns correct value
     *
     * @return void
     */
    public function testCreateAndExecuteDivision()
    {
        $calc = CalcFactory::build('divide');
        $sum = $calc->calculate(10,2);

        $this->assertEquals($sum,5);
    }

    /**
     * Test can create multiply class and returns correct value
     *
     * @return void
     */
    public function testCreateAndExecuteMultiple()
    {
        $calc = CalcFactory::build('multiply');
        $sum = $calc->calculate(150,4);

        $this->assertEquals($sum,600);
    }
}
