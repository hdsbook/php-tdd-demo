<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\ObjectPool\BulletPool;

/**
 * BulletTest
 */
class BulletTest extends TestCase
{
    public function testGet()
    {
        $bulletPool = new BulletPool();
        $bullet1 = $bulletPool->get();
        $bullet2 = $bulletPool->get();

        $this->assertCount(2, $bulletPool);
        $this->assertNotSame($bullet1, $bullet2);
    }

    public function testRecycle()
    {
        $bulletPool = new BulletPool();
        $bullet1 = $bulletPool->get();
        $bulletPool->recycle($bullet1);
        $bullet2 = $bulletPool->get();

        $this->assertCount(1, $bulletPool);
        $this->assertSame($bullet1, $bullet2);
    }
}
