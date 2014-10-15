<?php
include('calculator.php');


class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public $calculator;

    /**
    * Instantiate the Calculator object
    */
    public function setUp ()
    {
		$this->calculator = new Calculator();
    }
	
	public function testThreePlusOneReturnsFour()
	{
		$this->assertEquals(4, $this->calculator->sum(3,1), '3 + 1 must return 4');
	}

	public function testThreePlusTwoReturnsSix()
	{
		$this->assertEquals(5, $this->calculator->sum(3,2), '3 + 2 must return 5');
	}


	public function testThreeMinusTwoReturnsSix()
	{
		$this->assertEquals(1, $this->calculator->substract(3,2), '3 - 2 must return 1');
	}
}
