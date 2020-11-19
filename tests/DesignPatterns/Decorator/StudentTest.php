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
        $this->assertSame(['複習', '讀書', '預習'], $studyHistory);
    }

    public function testCombineStudy()
    {
        $stuA = new Lazy(new HardWorking(new Student('先甘後苦同學')));
        $stuA->study();
        $studyHistory = $stuA->getStudyHistory();
        $this->assertSame(
            ['玩遊戲', '複習', '讀書', '預習', '讀到睡著'],
            $studyHistory
        );

        $stuB = new HardWorking(new Lazy(new Student('夢中預習同學')));
        $stuB->study();
        $studyHistory = $stuB->getStudyHistory();
        $this->assertSame(
            ['複習', '玩遊戲', '讀書', '讀到睡著', '預習'],
            $studyHistory
        );
    }
}
