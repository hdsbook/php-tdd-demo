<?php

namespace App\DesignPatterns\Adapter\Shape;

class Circle implements ShapeInterface
{
    public function draw()
    {
        return "drawing circle";
    }
}
