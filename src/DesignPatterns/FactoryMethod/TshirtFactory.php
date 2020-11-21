<?php

namespace Src\DesignPatterns\FactoryMethod;

use Src\DesignPatterns\FactoryMethod\Interfaces\Product;
use Src\DesignPatterns\FactoryMethod\Interfaces\ProductFactory;

class TshirtFactory implements ProductFactory
{
    public function create(): Product
    {
        return new Tshirt();
    }
}
