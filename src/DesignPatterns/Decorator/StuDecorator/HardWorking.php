<?php

namespace Src\DesignPatterns\Decorator\StuDecorator;

use Src\DesignPatterns\Decorator\StudentInterface;
use Src\DesignPatterns\Decorator\StuDecorator\StuDecorator;

/**
 * class HardWorking
 *
 * @property StudentInterface $stu
 */
class HardWorking extends StuDecorator
{
    public function __construct(StudentInterface $stu)
    {
        $this->stu = $stu;
    }

    public function study()
    {
        $this->stu->study();
        $this->preview();
    }

    // decorate functions ----------------

    private function preview()
    {
        $this->pushHistory('預習');
    }
}
