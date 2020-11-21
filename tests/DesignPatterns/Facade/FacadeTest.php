<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\Facade\FacadeA;
use Src\DesignPatterns\Facade\FacadeB;

/**
 * FacadeTest
 */
class FacadeTest extends TestCase
{
    public function testDoSomethingA()
    {
        $facade = new FacadeA();
        $result = $facade->doSomeThing();
        self::assertSame([
            'API 1 do something',
            'API 2 do something',
        ], $result);
    }

    public function testDoSomethingB()
    {
        $facade = new FacadeB();
        $result = $facade->doSomeThing();
        self::assertSame([
            'API 2 do something',
            'API 3 do something',
        ], $result);
    }
}
