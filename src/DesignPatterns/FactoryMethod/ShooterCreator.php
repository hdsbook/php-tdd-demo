<?php

namespace factoryMethod;

class ShooterCreator implements Creator
{
    public function create(): Shooter
    {
        return new Shooter();
    }
}
