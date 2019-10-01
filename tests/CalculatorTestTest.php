<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTestTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {
        $this->assertIsString(
            $this->calc->str("4", "5"),
            'wrong String'
        );
    }

    protected function tearDown(): void
    {
    }
}
