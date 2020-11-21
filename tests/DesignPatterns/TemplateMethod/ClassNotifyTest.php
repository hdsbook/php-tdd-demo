<?php

use PHPUnit\Framework\TestCase;
use Src\DesignPatterns\TemplateMethod\StudentClassNotify;
use Src\DesignPatterns\TemplateMethod\TeacherClassNotify;

/**
 * ClassNotifyTest
 */
class ClassNotifyTest extends TestCase
{
    protected $notifier;
    protected $classData;

    protected function setUp(): void
    {
        parent::setUp();

        $this->notifier = '課程管理者';
        $this->classData = [
            'id' => 1234,
            'name' => "國文課",
            'time' => "今天下午兩點 ~ 三點",
        ];
        $this->notifyCourseInfo =
            "來自 {$this->notifier} 的課程通知！<br>" .
            "課程代碼：{$this->classData['id']}<br>" .
            "課程名稱：{$this->classData['name']}<br>" .
            "課程時間：{$this->classData['time']}<br>";
    }


    public function testStudentNotify()
    {
        /** @Arrange */
        $stuNotify = new StudentClassNotify(
            $this->notifier,
            $this->classData
        );
        $expectedResult = [
            'notifier' => $this->notifier,
            'notifyTarget' => '課程學生',
            'notifyContent' => $this->notifyCourseInfo .
                "請攜帶課程講義，準時前往上課！<br>",
        ];

        /** @Act */
        $notifyResult = $stuNotify->notify();

        /** @Assert */
        $this->assertSame($expectedResult, $notifyResult);
    }

    public function testTeacherNotify()
    {
        /** @Arrange */
        $teaNotify = new TeacherClassNotify(
            $this->notifier,
            $this->classData
        );
        $expectedResult = [
            'notifier' => $this->notifier,
            'notifyTarget' => '授課教師',
            'notifyContent' => $this->notifyCourseInfo .
                "您為此課程的授課教師！<br>" .
                "請準時前往授課！<br>",
        ];

        /** @Act */
        $notifyResult = $teaNotify->notify();

        /** @Assert */
        $this->assertSame($expectedResult, $notifyResult);
    }
}
