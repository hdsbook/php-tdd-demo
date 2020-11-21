<?php

namespace Src\DesignPatterns\FactoryMethod;

use Src\DesignPatterns\FactoryMethod\Interfaces\Product;

class Shoes implements Product
{
    public function intro()
    {
        return "This is a pair of shoes";
    }
}
