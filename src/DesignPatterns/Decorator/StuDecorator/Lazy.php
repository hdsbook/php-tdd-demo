<?php

namespace Src\DesignPatterns\Decorator\StuDecorator;

use Src\DesignPatterns\Decorator\StudentInterface;

/**
 * class Lazy
 *
 * @property StudentInterface $stu
 */
class Lazy implements StudentInterface
{
    public function __construct(StudentInterface $stu)
    {
        $this->stu = $stu;
    }

    public function study()
    {
        $this->play();
        $this->stu->study();
        $this->fellAsleep();
        return $this->stu->studyHistory;
    }

    // decorate functions ----------------

    private function play()
    {
        $this->stu->studyHistory[] = '玩遊戲';
    }

    private function fellAsleep()
    {
        $this->stu->studyHistory[] = '讀到睡著';
    }
}
