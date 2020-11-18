<?php

namespace App\DesignPatterns\Adapter\Shape3d;

class Ball3d implements Shape3dInterface
{
    public function print3d()
    {
        return "printing ball";
    }
}
