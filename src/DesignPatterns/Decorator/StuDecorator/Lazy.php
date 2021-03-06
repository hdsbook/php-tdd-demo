<?php

namespace Src\DesignPatterns\Decorator\StuDecorator;

use Src\DesignPatterns\Decorator\StudentInterface;
use Src\DesignPatterns\Decorator\StuDecorator\StuDecorator;

/**
 * class Lazy
 *
 * @property StudentInterface $stu
 */
class Lazy extends StuDecorator
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
