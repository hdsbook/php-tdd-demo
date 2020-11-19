<?php

namespace Src\DesignPatterns\Decorator;

class Student implements StudentInterface
{
    public $name;
    public $studyHistory;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function study()
    {
        $this->studyHistory[] = '讀書';
        return $this->studyHistory;
    }
}
