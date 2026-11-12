<?php

namespace Tests\Unit;

use App\Services\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_add()
    {
        $calculator = new Calculator;
        $this->assertEquals(5, $calculator->add(2, 3));
    }

    public function test_subtract()
    {
        $calculator = new Calculator;
        $this->assertEquals(3, $calculator->subtract(5, 2));
    }

    public function test_add_negative_numbers()
    {
        $calculator = new Calculator;
        $this->assertEquals(1, $calculator->add(-2, 3));
    }

    public function test_subtract_negative_numbers()
    {
        $calculator = new Calculator;
        $this->assertEquals(-8, $calculator->subtract(-5, 3));
    }
}
