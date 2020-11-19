<?php

namespace Src\DesignPatterns\Bridge\Abstraction;

class Teacher extends UserAbstract
{
    public $name;
    public $gender;
    protected $jobName = '教師';
}
