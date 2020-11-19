<?php

namespace Src\DesignPatterns\Adapter\Shape;

class Circle implements ShapeInterface
{
    public function draw()
    {
        return "drawing circle";
    }
}
