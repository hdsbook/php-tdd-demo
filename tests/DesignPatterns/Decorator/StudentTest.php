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
        $normalStu->study();
        $studyHistory = $normalStu->getStudyHistory();
        $this->assertSame(['讀書'], $studyHistory);
    }

    public function testLazyStudy()
    {
        $lazyStu = new Lazy(new Student('大雄'));
        $lazyStu->study();
        $studyHistory = $lazyStu->getStudyHistory();
        $this->assertSame(['玩遊戲', '讀書', '讀到睡著'], $studyHistory);
    }

    public function testHardStudy()
    {
        $goodStu = new HardWorking(new Student('靜香'));
        $goodStu->study();
        $studyHistory = $goodStu->getStudyHistory();
        $this->assertSame(['讀書', '預習'], $studyHistory);
    }

    public function testLazyHardStudy()
    {
        $studentA = new Lazy(new HardWorking(new Student('先苦後甘同學')));
        $studentA->study();
        $studyHistory = $studentA->getStudyHistory();
        $this->assertSame(['玩遊戲', '讀書', '預習', '讀到睡著'], $studyHistory);
    }
}
