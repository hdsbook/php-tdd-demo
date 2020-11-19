<?php

namespace Tests\DesignPatterns\Adapter;

use App\DesignPatterns\Adapter\Shape\Ball;
use App\DesignPatterns\Adapter\Shape\Circle;
use App\DesignPatterns\Adapter\Shape\Square;
use PHPUnit\Framework\TestCase;

/**
 * ShapeTest
 * @group Shape
 */
class ShapeTest extends TestCase
{
    /** @test */
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
