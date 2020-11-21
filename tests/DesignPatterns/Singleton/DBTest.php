<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\Singleton\DB;
use Src\DesignPatterns\Singleton\TraitCase\DB as DB2;

/**
 * DBTest
 */
class DBTest extends TestCase
{

    public function testGetInstance()
    {
        $firstCall = DB::getInstance();
        $secondCall = DB::getInstance();
        $this->assertInstanceOf(DB::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);

        // singleton 只能透過 getInstance 實體化
        // 直接 new 的話會失敗
        // $fail = new DB();
    }

    public function testGetInstanceTraitCase()
    {
        $firstCall = DB2::getInstance();
        $secondCall = DB2::getInstance();
        $this->assertInstanceOf(DB2::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);

        // singleton 只能透過 getInstance 實體化
        // 直接 new 的話會失敗
        // $fail = new DB2();
    }
}
