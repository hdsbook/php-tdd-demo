<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\FactoryMethod\TshirtFactory;
use Src\DesignPatterns\FactoryMethod\ShoesFactory;
use Src\DesignPatterns\FactoryMethod\Tshirt;
use Src\DesignPatterns\FactoryMethod\Shoes;

/**
 * ProductTest
 */
class ProductTest extends TestCase
{
    public function testCreate()
    {
        $shoesFactory = new ShoesFactory();
        $shoes = $shoesFactory->create();
        $this->assertInstanceOf(Shoes::class, $shoes);

        $tshirtFactory = new TshirtFactory();
        $tshirt = $tshirtFactory->create();
        $this->assertInstanceOf(Tshirt::class, $tshirt);
    }

    public function testIntro()
    {
        $shoesFactory = new ShoesFactory();
        $shoes = $shoesFactory->create();
        $this->assertEquals(
            'This is a pair of shoes',
            $shoes->intro()
        );

        $tshirtFactory = new TshirtFactory();
        $tshirt = $tshirtFactory->create();
        $this->assertEquals(
            'This is a tshirt',
            $tshirt->intro()
        );
    }
}
