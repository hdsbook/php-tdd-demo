<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * CalculatorTest
 * @group Calculator
 * @covers Calculator
 */
class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        // Arrange
        $target = new Calculator();
        $expected = 3;

        // Act
        $actual = $target->add(1, 2);

        // Assert
        $this->assertEquals($expected, $actual);
    }
}
