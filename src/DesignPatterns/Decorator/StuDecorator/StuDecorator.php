<?php

namespace Src\DesignPatterns\Decorator\StuDecorator;

use Src\DesignPatterns\Decorator\StudentInterface;

/**
 * class StuDecorator
 *
 * @property StudentInterface $stu
 */
abstract class StuDecorator implements StudentInterface
{
    public function __construct(StudentInterface $stu)
    {
        $this->stu = $stu;
    }

    public function study()
    {
        $this->stu->study();
    }

    public function pushHistory($history)
    {
        $this->stu->pushHistory($history);
    }

    public function getStudyHistory()
    {
        return $this->stu->getStudyHistory();
    }
}
