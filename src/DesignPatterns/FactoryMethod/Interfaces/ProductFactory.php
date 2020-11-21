<?php

namespace Src\DesignPatterns\FactoryMethod\Interfaces;

interface ProductFactory
{
    /**
     * factory method
     *
     * @return Product
     */
    public function create(): Product;
}
