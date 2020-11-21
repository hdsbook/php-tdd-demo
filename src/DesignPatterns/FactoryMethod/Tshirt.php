<?php

namespace Src\DesignPatterns\FactoryMethod;

use Src\DesignPatterns\FactoryMethod\Interfaces\Product;

class Tshirt implements Product
{
    public function intro()
    {
        return "This is a tshirt";
    }
}
