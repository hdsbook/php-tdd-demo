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

    private function preview()
    {
        $this->pushHistory('預習');
    }
}
