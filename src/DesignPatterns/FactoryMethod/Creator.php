<?php

namespace factoryMethod;

interface Creator
{
    /**
     * factory method
     *
     * @return Product
     */
    public function create(): Product;
}
