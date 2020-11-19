<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\Decorator\StuDecorator\HardWorking;
use Src\DesignPatterns\Decorator\StuDecorator\Lazy;
use Src\DesignPatterns\Decorator\Student;

/**
 * StudentTest
 */
class StudentTest extends TestCase
{

    public function testStudy()
    {
        $normalStu = new Student('世雄');
        $studyHistory = $normalStu->study();
        $this->assertSame(['讀書'], $studyHistory);
    }

    public function testLazyStudy()
    {
        $lazyStu = new Lazy(new Student('大雄'));
        $studyHistory = $lazyStu->study();
        $this->assertSame(['玩遊戲', '讀書', '讀到睡著'], $studyHistory);
    }

    public function testHardStudy()
    {
        $goodStu = new HardWorking(new Student('靜香'));
        $studyHistory = $goodStu->study();
        $this->assertSame(['讀書', '預習'], $studyHistory);
    }

    public function testLazyHardStudy()
    {
        $studentA = new Lazy(new HardWorking(new Student('先苦後甘同學')));
        $studyHistory = $studentA->study();
        $this->assertSame(['玩遊戲', '讀書', '預習', '讀到睡著'], $studyHistory);
    }
}
