<?php

namespace Tests\DesignPatterns\Adapter;

use Src\DesignPatterns\Adapter\Shape\Ball;
use Src\DesignPatterns\Adapter\Shape\Circle;
use Src\DesignPatterns\Adapter\Shape\Square;
use PHPUnit\Framework\TestCase;

/**
 * ShapeTest
 */
class ShapeTest extends TestCase
{
    public function testShape()
    {
        $circle = new Circle();
        $this->assertEquals('drawing circle', $circle->draw());

        $square = new Square();
        $this->assertEquals('drawing square', $square->draw());

        // Ball is an adapter from Shape3d to Shape
        $ball = new Ball();
        $this->assertEquals('printing ball', $ball->draw());
    }
}
