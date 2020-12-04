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
        /** @given student */
        $normalStu = new Student('世雄');

        /** @when study */
        $normalStu->study();
        $studyHistory = $normalStu->getStudyHistory();

        /** @then assert study history */
        $this->assertSame(['讀書'], $studyHistory);
    }

    public function testLazyStudy()
    {
        /** @given lazy student */
        $lazyStu = new Lazy(new Student('大雄'));

        /** @when study */
        $lazyStu->study();
        $studyHistory = $lazyStu->getStudyHistory();

        /** @then assert study history */
        $this->assertSame(['玩遊戲', '讀書', '讀到睡著'], $studyHistory);
    }

    public function testHardStudy()
    {
        /** @given hard working student */
        $goodStu = new HardWorking(new Student('靜香'));

        /** @when study */
        $goodStu->study();
        $studyHistory = $goodStu->getStudyHistory();

        /** @then assert study history */
        $this->assertSame(['複習', '讀書', '預習'], $studyHistory);
    }

    public function testCombineStudy()
    {
        /** @given student with both decorator  */
        $stuA = new Lazy(new HardWorking(new Student('先甘後苦同學')));

        /** @when study */
        $stuA->study();
        $studyHistory = $stuA->getStudyHistory();

        /** @then assert study history */
        $this->assertSame(
            ['玩遊戲', '複習', '讀書', '預習', '讀到睡著'],
            $studyHistory
        );

        /** @given student with both decorator  */
        $stuB = new HardWorking(new Lazy(new Student('夢中預習同學')));

        /** @when study */
        $stuB->study();
        $studyHistory = $stuB->getStudyHistory();

        /** @then assert study history */
        $this->assertSame(
            ['複習', '玩遊戲', '讀書', '讀到睡著', '預習'],
            $studyHistory
        );
    }
}
