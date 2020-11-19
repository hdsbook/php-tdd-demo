<?php

namespace Src\DesignPatterns\Decorator;

class Student implements StudentInterface
{
    public $name;
    public $studyHistory;

    public function __construct($name)
    {
        $this->name = $name;
        $this->studyHistory = [];
    }

    public function study()
    {
        $this->pushHistory('讀書');
    }

    public function pushHistory($history)
    {
        $this->studyHistory[] = $history;
    }

    public function getStudyHistory()
    {
        return $this->studyHistory;
    }
}
