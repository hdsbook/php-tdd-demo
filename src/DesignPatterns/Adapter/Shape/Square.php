<?php

namespace App\DesignPatterns\Adapter\Shape;

class Square implements ShapeInterface
{
    public function draw()
    {
        return "drawing square";
    }
}
