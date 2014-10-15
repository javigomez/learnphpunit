<?php
include('counter.php');


class CounterTest extends PHPUnit_Framework_TestCase
{
	public function testNextReturnsOne()
	{
		$counter = new Counter();
		$this->assertEquals(1, $counter->next(), 'next to 0 is 1');
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testNotNumericIncrementThrowsException()
	{
		$counter = new Counter;
		$counter->setIncrement('word');
	}
}
