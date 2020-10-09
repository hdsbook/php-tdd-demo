<?php

use PHPUnit\Framework\TestCase;

class myFirstTest extends TestCase
{
    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testEquals()
    {
        $this->assertEquals(1 + 1, 2);
    }

    public function testSame()
    {
        $this->assertSame(1 + 1, 2);
    }
}
