<?php

namespace Src\DesignPatterns\Adapter\Shape;

use Src\DesignPatterns\Adapter\Shape3d\Ball3d;

class Ball implements ShapeInterface
{
    private $adaptee;

    public function __construct()
    {
        $this->adaptee = new Ball3d();
    }

    public function draw()
    {
        return $this->adaptee->print3d();
    }
}
