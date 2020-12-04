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
        /** @given facade */
        $facade = new FacadeA();

        /** @when facade do something */
        $result = $facade->doSomeThing();

        /** @then assert result */
        self::assertSame([
            'API 1 do something',
            'API 2 do something',
        ], $result);
    }

    public function testDoSomethingB()
    {
        /** @given facade */
        $facade = new FacadeB();

        /** @when facade do something */
        $result = $facade->doSomeThing();

        /** @then assert result */
        self::assertSame([
            'API 2 do something',
            'API 3 do something',
        ], $result);
    }
}
