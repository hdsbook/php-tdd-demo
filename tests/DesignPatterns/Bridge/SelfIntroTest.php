<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\Bridge\Abstraction\Student;
use Src\DesignPatterns\Bridge\Abstraction\Teacher;
use Src\DesignPatterns\Bridge\Implementation\BriefSelfIntro;
use Src\DesignPatterns\Bridge\Implementation\DetailedSelfIntro;

/**
 * SelfIntroTest
 * @group group
 */
class SelfIntroTest extends TestCase
{
    /** @test */
    public function testSelfIntro()
    {

        $student = new Student('子路', '舞劍');
        $teacher = new Teacher('孔子', '彈琴');

        $teaIntroBrief = $teacher->selfIntro(new BriefSelfIntro());
        $teaIntroDetail = $teacher->selfIntro(new DetailedSelfIntro());

        $stuIntroBrief = $student->selfIntro(new BriefSelfIntro());
        $stuIntroDetail = $student->selfIntro(new DetailedSelfIntro());

        self::assertEquals(
            "大家好，我叫孔子！",
            $teaIntroBrief
        );
        self::assertEquals(
            "大家好，我叫孔子，我是一位教師，我的興趣是彈琴",
            $teaIntroDetail
        );
        self::assertEquals(
            "大家好，我叫子路！",
            $stuIntroBrief
        );
        self::assertEquals(
            "大家好，我叫子路，我是一位學生，我的興趣是舞劍",
            $stuIntroDetail
        );
    }
}
