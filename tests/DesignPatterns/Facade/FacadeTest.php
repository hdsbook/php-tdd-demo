<?php

use PHPUnit\Framework\TestCase;
use Src\designPatterns\Facade\Facade;

/**
 * FacadeTest
 */
class FacadeTest extends TestCase
{
    public function testDoSomething()
    {
        $facade = new Facade();
        $result = $facade->doSomeThing();
        self::assertSame([
            'API 1 do something',
            'API 2 do something',
        ], $result);
    }
}
