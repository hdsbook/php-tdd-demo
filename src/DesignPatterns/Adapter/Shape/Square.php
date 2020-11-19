<?php

namespace Src\DesignPatterns\Adapter\Shape;

class Square implements ShapeInterface
{
    public function draw()
    {
        return "drawing square";
    }
}
