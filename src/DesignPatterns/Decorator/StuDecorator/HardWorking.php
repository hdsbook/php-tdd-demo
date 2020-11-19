<?php

namespace Src\DesignPatterns\Decorator\StuDecorator;

use Src\DesignPatterns\Decorator\StudentInterface;

/**
 * class HardWorking
 *
 * @property Src\DesignPatterns\Decorator\Student $stu
 */
class HardWorking implements StudentInterface
{
    public function __construct(StudentInterface $stu)
    {
        $this->stu = $stu;
    }

    public function study()
    {
        $this->stu->study();
        $this->preview();
        return $this->stu->studyHistory;
    }

    // decorate functions ----------------

    private function preview()
    {
        $this->stu->studyHistory[] = '預習';
    }
}
