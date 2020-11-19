<?php

namespace factoryMethod;

class GunCreator implements Creator
{
    public function create(): Gun
    {
        return new Gun();
    }
}
