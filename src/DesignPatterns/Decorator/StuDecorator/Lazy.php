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
    }

    public function pushHistory($history)
    {
        $this->stu->pushHistory($history);
    }

    public function getStudyHistory()
    {
        return $this->stu->getStudyHistory();
    }

    // decorate functions ----------------

    private function play()
    {
        $this->pushHistory('玩遊戲');
    }

    private function fellAsleep()
    {
        $this->pushHistory('讀到睡著');
    }
}
