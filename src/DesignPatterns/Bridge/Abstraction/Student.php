<?php

namespace Src\DesignPatterns\Bridge\Abstraction;

class Student extends UserAbstract
{
    public $name;
    public $gender;
    protected $jobName = '學生';
}
